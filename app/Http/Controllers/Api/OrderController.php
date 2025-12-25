<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Order_item;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\ValidationException;
// use Illuminate\Validation\ValidationException as ValidationValidationException;
// use League\Config\Exception\ValidationException;
// use Nette\Schema\ValidationException as SchemaValidationException;
use phpDocumentor\Reflection\DocBlock\Tags\Example;

class OrderController extends Controller
{
    public function index()
    {
        try {
            Gate::authorize('index', Order::class);
            $order = Order::with('orderItem', 'user')->get();
            return response()->json($order);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }
    public function show($id)
    {
        try {
            $order = Order::with('orderItem', 'user')->find($id);
            return response()->json($order);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            Gate::authorize('create', Order::class);
            $request->validate([
                'status' => 'in:pending,processing,delivered,cancelled',
                'order_items' => 'required|array',
                'order_items.*.menu_id' => 'required|exists:menus,id',
                'order_items.*.quantity' => 'required|integer|min:1'
            ]);
            $totalPrice = 0;
            foreach ($request->order_items as $orderItem) {
                $menu = Menu::find($orderItem['menu_id']);
                $totalPrice += $menu->price * $orderItem['quantity'];
            }
            $order = Order::create([
                'totle_price' => $totalPrice,
                'status' => $request->status ?? 'pending',
                'user_id' => Auth::user()->id
            ]);

            foreach ($request->order_items as $orderItem) {
                $order->orderItem()->create([
                    'menu_id' => $orderItem['menu_id'],
                    'quantity' => $orderItem['quantity'],
                ]);
            }
            return response()->json($order);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => $e->validator->errors()
            ], 400);
        }
    }

    public function update($request, $id)
    {
        try {
            Gate::authorize('update', Order::class);
            $order = Order::find($id);
            $order->update($request->all());
            return response()->json($order);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => $e->validator->errors()
            ], 400);
        }
    }
    public function destoy($id)
    {
        try {
            $order = Order::find($id);
            $order->delete();
            return response()->json([
                'message' => 'Odrder Delete successfuly'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\ValidationException;

class MenuController extends Controller
{
    public function index()
    {
        try {
            $menu = Menu::with('images')->get();
            return response()->json($menu);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }
    public function show($id)
    {
        try {
            $order = Menu::with('images')->find($id);
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
            Gate::authorize('create',Menu::class);
            $request->validate([
                'name' => 'required|string',
                'category' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'price' => 'required|numeric',
            ]);
            $menu = Menu::create($request->all());
            return response()->json([
                'message' => 'successfuly',
                'data' => $menu
            ],201);
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

    public function update(Request $request, $id)
    {
        try {
            Gate::authorize('update', Menu::class);
            $menu = Menu::find($id);
            $menu->update($request->all());
            return response()->json($menu);
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
    public function destroy($id)
    {
        try {
            Gate::authorize('delete', Menu::class);
            $menu = menu::find($id);
            $menu->delete();
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

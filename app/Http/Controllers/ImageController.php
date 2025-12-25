<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Menu;
use Exception;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function uploadImage(Request $request, $id)
    {
        try {
            $request->validate([
                'images' => 'required|array',
                'images.*' => 'required|mimes:png,jpg,jpng|image',
            ]);
            $imageUrls = [];
            $menu = Menu::find($id);
            if (!$menu) {
                return response()->json([
                    'message' => 'Menu Not Found'
                ], 404);
            }
            $filePath = '/images';
            foreach ($request->file('images') as $file) {
                $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path($filePath), $fileName);
                $imagePath = $filePath . $fileName;
                $imageUrls[] = [
                    'menu_id' => $menu->id,
                    'image' => url($imagePath)
                ];
            }
            $Image=Image::insert($imageUrls);
            return response()->json([
                'message' => 'Image Uploaded successfuly',
                'data'=>    $imageUrls
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    }


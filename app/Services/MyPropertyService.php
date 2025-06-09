<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Sale;
// use App\Models\Rent;

class MyPropertyService
{
    public function getMyProperties($userId)
    {
        // Lấy danh sách bất động sản của người dùng
        return Sale::where('user_id', $userId)->with('images')->orderByDesc('updated_at')->paginate(9);
    }

    public function deleteProperty($propertyId)
    {
        // Xóa bất động sản và các hình ảnh liên quan
        $property = Sale::find($propertyId);
        if ($property) {
            $property->images()->delete(); // Xóa hình ảnh liên quan
            return $property->delete(); // Xóa bất động sản
        }
        return false;
    }
    public function storeProperty($request)
    {
        $currentTime = time();
        $slug = Str::slug($request->title). '-'.$currentTime;
        // Validate unique slug
        if (Sale::where('slug', $slug)->exists()) {
            return false;
        }

        $data = [
            'code' => $currentTime,
            'user_id' => $request->user_id,
            'type' => $request->type,
            'title' => $request->title,
            'slug' => $slug,
            'address' => $request->address,
            'type_property' => $request->type_property,
            'content' => $request->content,
            'price' => str_replace('.', '', $request->price),
            'area' => $request->area,
            'equivalent_value' => $request->equivalent_value,
            'law' => $request->law,
            'direction' => $request->direction,
            'front' => $request->front,
            'road' => $request->road,
            'maps' => $request->maps,
            'owner_type' => $request->owner_type,
            'hot' => $request->has('hot') ? 1 : 0,
            'property_code' => $request->property_code,
            'status' => $request->status,
            'phone' => $request->phone,
            'owner_type' => $request->owner_type,
            'my_note' => $request->my_note,
        ];
        return Sale::create($data);

    }

    public function getPropertyById($propertyId)
    {
        // Lấy bất động sản theo ID và kiểm tra quyền sở hữu
        return Sale::where('id', $propertyId)->with(['images', 'user'])->first();
    }

    public function updateProperty($propertyId, $request)
    {
        $property = Sale::find($propertyId);
        if (!$property) {
            return false;
        }
        $data = [
            'type' => $request->type,
            'title' => $request->title,
            'address' => $request->address,
            'type_property' => $request->type_property,
            'content' => $request->content,
            'price' => str_replace('.', '', $request->price),
            'area' => $request->area,
            'equivalent_value' => $request->equivalent_value,
            'law' => $request->law,
            'direction' => $request->direction,
            'front' => $request->front,
            'road' => $request->road,
            'maps' => $request->maps,
            'hot' => $request->has('hot') ? 1 : 0,
            'property_code' => $request->property_code,
            'owner_type' => $request->owner_type,
            'status' => $request->status,
            'phone' => $request->phone,
            'my_note' => $request->my_note,
        ];
        $property->update($data);
        return $property;
    }

}

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
        return Sale::where('user_id', $userId)->with('images')->paginate(10);
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
            'price' => $request->price,
            'area' => $request->area,
            'equivalent_value' => $request->equivalent_value,
            'law' => $request->law,
            'direction' => $request->direction,
            'front' => $request->front,
            'road' => $request->road,
            'video' => $request->video,
            'maps' => $request->maps,
            'owner_type' => $request->owner_type,
            // 'favorite' => $request->has('favorite') ? 1 : 0,
            // Thêm province và price_per_sqm
            // 'province' => $request->province,
            'price_per_sqm' => $request->price_per_sqm,
        ];
        return Sale::create($data);

    }

}

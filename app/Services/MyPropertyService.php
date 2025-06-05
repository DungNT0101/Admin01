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

}

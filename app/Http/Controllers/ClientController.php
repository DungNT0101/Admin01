<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Sale;
use Illuminate\Http\Request;


use App\Services\ClientService;

class ClientController extends Controller
{
    private $service;
    public function __construct(ClientService $service)
    {
        $this->service = $service;
    }

    public function homePage(){
        $properties = $this->service->getAllProperties();
        $totalProperties = $properties->total();
        $onSale = Sale::ON_SALE;
        $sold = Sale::SOLD;
        return view('client.type-1.page.home-1', [
            'properties' => $properties,
            'onSale' => $onSale,
            'sold' => $sold,
            'totalProperties' => $totalProperties
        ]);
    }

    public function saleLands(){
        $saleLands = $this->service->getSaleLands();
        $countSaleLands = $saleLands->total();
        $onSale = Sale::ON_SALE;
        $sold = Sale::SOLD;
        $type = Sale::TYPE_LAND;
        return view('client.type-1.page.sale-lands', [
            'properties' => $saleLands,
            'count' => $countSaleLands,
            'onSale' => $onSale,
            'sold' => $sold,
            'type' => $type
        ]);
    }

    public function saleHouse(){
        $saleHouse = $this->service->getSaleHouse();
        $countSaleHouse = $saleHouse->total();
        $onSale = Sale::ON_SALE;
        $sold = Sale::SOLD;
        $type = Sale::TYPE_HOUSE;
        return view('client.type-1.page.sale-house', [
            'properties' => $saleHouse,
            'count' => $countSaleHouse,
            'onSale' => $onSale,
            'sold' => $sold,
            'type' => $type
        ]);
    }

    public function showProperty($slug)
    {
        $property = $this->service->getPropertyBySlug($slug);
        if (!$property) {
            abort(404, 'Property not found');
        }

        $onSale = Sale::ON_SALE;
        $sold = Sale::SOLD;
        return view('client.type-1.page.property-detail', [
            'property' => $property,
            'onSale' => $onSale,
            'sold' => $sold
        ]);
    }

    public function searchProperty(Request $request)
    {
        $keyword = $request->input('keyword');
        $type = $request->input('type');
        $price = $request->input('price');

        $query = Sale::with(['images', 'user']);
        if ($type) {
            $query->where('type', $type);
        }
        if ($keyword) {
            $query->where(function($q) use ($keyword) {
                $q->where('title', 'LIKE', "%{$keyword}%")
                  ->orWhere('property_code', 'LIKE', "%{$keyword}%")
                  ->orWhere('address', 'LIKE', "%{$keyword}%");
            });
        }
        if ($price) {
            // Giả sử giá trị $price là một chuỗi như "dưới 1 tỷ", "từ 1 tỷ đến 2 tỷ", v.v.
            if ($price == 1) {
                $maxPrice = 1 * 1000000000;
                $query->where('price', '<=', $maxPrice);
            } elseif ($price == 2) {
                $minPrice = 1 * 1000000000;
                $maxPrice = 2 * 1000000000;
                $query->whereBetween('price', [$minPrice, $maxPrice]);
            } elseif ($price == 3) {
                $minPrice = 2 * 1000000000;
                $maxPrice = 3 * 1000000000;
                $query->whereBetween('price', [$minPrice, $maxPrice]);
            } elseif ($price == 4) {
                $minPrice = 3 * 1000000000;
                $query->where('price', '>=', $minPrice);
            }
        }

        $properties = $query->paginate(9);

        $onSale = Sale::ON_SALE;
        $sold = Sale::SOLD;

        return view('client.type-1.page.search-properties', [
            'properties' => $properties,
            'keyword' => $keyword,
            'onSale' => $onSale,
            'sold' => $sold,
            'type' => $type,
            'price' => $price
        ]);
    }

    public function watchingProperties(Request $request)
    {
        // Lấy danh sách ID từ query string (?watching-ids=1,2,3)
        $ids = $request->input('watching-ids');
        $propertyIds = [];
        if ($ids) {
            $propertyIds = array_filter(explode(',', $ids));
        }
        $properties = collect();
        $notFoundIds = [];
        if (!empty($propertyIds)) {
            $properties = Sale::with(['images', 'user'])
                ->whereIn('id', $propertyIds)
                ->orderByDesc('updated_at')
                ->paginate(33);
            // Lấy danh sách ID thực tế đã tìm thấy
            $foundIds = $properties->pluck('id')->map(fn($id) => (string)$id)->all();
            // Tìm các ID không tồn tại trong bảng Sale
            $notFoundIds = array_diff($propertyIds, $foundIds);
        }
        $onSale = Sale::ON_SALE;
        $sold = Sale::SOLD;
        return view('client.type-1.page.watching-properties', [
            'properties' => $properties,
            'onSale' => $onSale,
            'sold' => $sold,
            'notFoundIds' => $notFoundIds
        ]);
    }

}

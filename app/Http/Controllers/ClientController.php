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

    public function index(){
        return view('client.home', []);
    }

    public function homePage(){
        $properties = $this->service->getAllProperties();
        $onSale = Sale::ON_SALE;
        $sold = Sale::SOLD;
        return view('client.type-1.page.home-1', [
            'properties' => $properties,
            'onSale' => $onSale,
            'sold' => $sold
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

        $query = Sale::with(['images', 'user']);
        if ($type) {
            $query->where('type', $type);
        }
        if ($keyword) {
            $query->where(function($q) use ($keyword) {
                $q->where('title', 'LIKE', "%{$keyword}%")
                  ->orWhere('property_code', 'LIKE', "%{$keyword}%");
            });
        }
        $properties = $query->paginate(9);

        $onSale = Sale::ON_SALE;
        $sold = Sale::SOLD;

        return view('client.type-1.page.search-properties', [
            'properties' => $properties,
            'keyword' => $keyword,
            'onSale' => $onSale,
            'sold' => $sold,
            'type' => $type
        ]);
    }

    public function watchingProperties()
    {

    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductCategoryService;
use Illuminate\Support\Facades\Cache;

class ProductCategoryController extends Controller
{
    private $service;

    public function __construct(ProductCategoryService $service){
        $this->service = $service;
    }

    public function index(){
        $data = $this->service->getList();

        return view('admin.product.category', [
            'dataList' => $data
        ]);
    }

    public function store(Request $request){
        $this->service->store($request);

        Cache::forever('productCategory', $this->service->getAll());

        return \redirect(route('product.categories'));
    }

    public function update(Request $request){
        $this->service->update($request);

        Cache::forever('productCategory', $this->service->getAll());

        return \redirect(route('product.categories'));
    }

    public function delete($id){
        $this->service->delete($id);

        Cache::forever('productCategory', $this->service->getAll());

        return \redirect(route('product.categories'));
    }


}

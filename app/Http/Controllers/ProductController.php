<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    private $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function create()
    {
        $categories = $this->service->getCategories();

        return view('admin.product.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $this->service->store($request);

        return redirect(route('product.create'));
    }

    public function index()
    {
        $products = $this->service->getList();

        return view('admin.product.list', [
            'dataList' => $products
        ]);
    }

    public function edit($id)
    {
        $product = $this->service->getByID($id);
        $categories = $this->service->getCategories();

        return view('admin.product.edit', [
            'data' => $product,
            'categories' => $categories
        ]);
    }

    public function update(Request $request)
    {
        $this->service->update($request);

        return redirect(route('product.edit', $request->id));
    }

    public function delete($id)
    {
        $this->service->delete($id);

        return redirect(route('product.index'));
    }

    public function hotProducts()
    {
        $products = $this->service->hotProducts();

        return view('admin.product.list', [
            'dataList' => $products
        ]);
    }

}

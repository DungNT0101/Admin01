<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PropertyService;

class PropertyController extends Controller
{
    private $service;

    public function __construct(PropertyService $service)
    {
        $this->service = $service;
    }

    public function index($type = null)
    {
        if ($type == 'hot') {
            return $this->hotProducts();
        }

        $properties = $this->service->getList();

        return view('admin.property.list', [
            'dataList' => $properties
        ]);
    }


    public function create()
    {
        $categories = $this->service->getCategories();

        return view('admin.property.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $this->service->store($request);

        return redirect(route('property.create'));
    }


    public function edit($id)
    {
        $property = $this->service->getByID($id);
        $categories = $this->service->getCategories();

        return view('admin.property.edit', [
            'data' => $property,
            'categories' => $categories
        ]);
    }

    public function update(Request $request)
    {
        $this->service->update($request);

        return redirect(route('property.edit', $request->id));
    }

    public function delete($id)
    {
        $this->service->delete($id);

        return redirect(route('property.index'));
    }

    public function hotProducts()
    {
        $properties = $this->service->hotProducts();

        return view('admin.property.list', [
            'dataList' => $properties
        ]);
    }

}

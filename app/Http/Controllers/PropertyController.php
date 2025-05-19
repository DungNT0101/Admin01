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
        $propertyTypes = $this->service->getCategories();
        $laws = (object)[
            [ 'id' => 1, 'name' => 'Số đỏ' ],
            [ 'id' => 2, 'name' => 'Sổ hồng' ],
            [ 'id' => 3, 'name' => 'Giấy chứng nhận quyền sử dụng đất' ],
            [ 'id' => 4, 'name' => 'Giấy chứng nhận quyền sở hữu nhà ở' ],
        ];
        $laws = collect($laws)->map(function ($item) {
            return (object)[
                'id' => $item['id'],
                'name' => $item['name']
            ];
        });
        $laws = collect($laws);
        return view('admin.property.create', [
            'propertyTypes' => $propertyTypes,
            'laws' => $laws
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
        $propertyTypes = $this->service->getCategories();

        return view('admin.property.edit', [
            'data' => $property,
            'propertyTypes' => $propertyTypes
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

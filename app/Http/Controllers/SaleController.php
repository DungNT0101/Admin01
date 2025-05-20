<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SaleService;

class SaleController extends Controller
{
    private $service;

    public function __construct(SaleService $service)
    {
        $this->service = $service;
    }

    public function index($type = null)
    {
        if ($type == 'hot') {
            return $this->hotProducts();
        }

        $sales = $this->service->getList();

        return view('admin.sale.list', [
            'dataList' => $sales
        ]);
    }


    public function create()
    {
        $saleTypes = $this->service->getCategories();
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
        return view('admin.sale.create', [
            'saleTypes' => $saleTypes,
            'laws' => $laws
        ]);
    }

    public function store(Request $request)
    {
        $this->service->store($request);

        return redirect(route('sale.create'));
    }


    public function edit($id)
    {
        $sale = $this->service->getByID($id);
        $saleTypes = $this->service->getCategories();

        return view('admin.sale.edit', [
            'data' => $sale,
            'saleTypes' => $saleTypes
        ]);
    }

    public function update(Request $request)
    {
        $this->service->update($request);

        return redirect(route('sale.edit', $request->id));
    }

    public function delete($id)
    {
        $this->service->delete($id);

        return redirect(route('sale.index'));
    }

    public function hotProducts()
    {
        $sales = $this->service->hotProducts();

        return view('admin.sale.list', [
            'dataList' => $sales
        ]);
    }

}

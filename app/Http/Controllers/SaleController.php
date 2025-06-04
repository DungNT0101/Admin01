<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SaleService;
use Illuminate\Support\Facades\Auth;
use App\Models\SaleImage;


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

        // // Dump images của từng property
        // foreach ($sales as $sale) {
        //     \Log::info('Sale ID: ' . $sale->id . ' Images:', $sale->images->toArray());
        // }
        // Hoặc dump trực tiếp ra màn hình (chỉ dùng khi debug)
        // foreach ($sales as $sale) {
        //     dump($sale->images[0]->path);
        // }

        return view('admin.sale.list', [
            'dataList' => $sales
        ]);
    }


    public function create()
    {
        $saleTypes = $this->service->getCategories();
        $cities = $this->service->getCities();
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
            'laws' => $laws,
            'cities' => $cities
        ]);
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

    public function store(Request $request)
    {
        // Validate and save Sale
        $sale = $this->service->store($request);

        // Handle gallery images
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $file) {
                $filename = Auth::id().'_'.time() . '.' . $file->guessExtension();
                $file->move(config('image.sales'), $filename);
                // Save each image to the database
                SaleImage::create([
                    'sale_id' => $sale->id,
                    'path' => config('image.sales').'/'.$filename,
                    'type' => 'gallery',
                ]);
            }
        }

        // Handle video upload
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = Auth::id().'_'.time().'.'.$video->guessExtension();
            $video->move(config('image.sales'), $videoName);
            // Update video path in Sale
            $sale->video = config('image.sales').'/'.$videoName;
            $sale->save();
        }

        // Optionally handle main image (if you have a main image field)
        // if ($request->hasFile('images')) { ... }

        return redirect()->route('sale.create')->with('success', 'Tạo mới thành công!');
    }

}

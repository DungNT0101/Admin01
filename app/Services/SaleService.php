<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Sale;
use App\Models\ProductCategory;

class SaleService
{
    public function store($request)
    {
        $slug = Str::slug($request->title);
        // Validate unique slug
        if (Sale::where('slug', $slug)->exists()) {
            return False;
        }
        $data = [
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
            'bedroom' => $request->bedroom,
            'bathroom' => $request->bathroom,
            'direction' => $request->direction,
            'front' => $request->front,
            'road' => $request->road,
            'video' => $request->video,
            'maps' => $request->maps,
            'zalo' => $request->zalo,
            'facebook' => $request->facebook,
            'favorite' => $request->has('favorite') ? 1 : 0,
            // Thêm province và price_per_sqm
            'province' => $request->province,
            'price_per_sqm' => $request->price_per_sqm,
        ];
        $sale = Sale::create($data);
        return $sale;
    }

    public function getCategories()
    {
        return ProductCategory::all();
    }

    public function getList()
    {
        // Lấy danh sách sale kèm theo images (Eager Loading)
        return Sale::with('images')->paginate(10);
    }

    public function hotProducts()
    {
        return Sale::where('hot', 1)->paginate(10);
    }

    public function getByID($id)
    {
        return Sale::find($id);
    }

    public function update($request)
    {
        $data = $this->mapData($request);
        $sale = Sale::find($request->id);

        return $sale->update($data);
    }

    public function mapData($request)
    {
        $slug = Str::slug($request->title);
        $data = [
            'title' => $request->title,
            'slug' => $slug,
            'keywords' => $request->keywords,
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'category_id' => $request->category,
            'home' => $request->home,
            'hot' => empty($request->hot) ? 0 : 1,
            'content' => $request->content,
            'images' => $request->images,
            'home' => empty($request->home) ? 0 : 1
        ];

        $avatar = $request->avatar;

        if($avatar){
            $avatarName = $slug.'.'.$avatar->guessExtension();
            $avatar->move(config('image.products'), $avatarName);
            $data['avatar'] = config('image.products').'/'.$avatarName;
        }

        return $data;
    }

    public function delete($id)
    {
        return Sale::find($id)->delete();
    }

    public function getCities()
    {
        $cities = [
            'Hà Nội', 'Hồ Chí Minh', 'Đà Nẵng', 'Cần Thơ', 'Hải Phòng', 'Huế',
            'An Giang', 'Bắc Ninh', 'Cà Mau', 'Cao Bằng', 'Đắk Lắk', 'Điện Biên',
            'Đồng Nai', 'Đồng Tháp', 'Gia Lai', 'Hà Tĩnh', 'Hưng Yên',
            'Khánh Hòa', 'Lai Châu', 'Lâm Đồng', 'Lạng Sơn', 'Lào Cai',
            'Nghệ An', 'Ninh Bình', 'Phú Thọ', 'Quảng Ngãi', 'Quảng Ninh',
            'Quảng Trị', 'Sơn La', 'Tây Ninh', 'Thái Nguyên', 'Thanh Hoá',
            'Tuyên Quang', 'Vĩnh Long'
        ];

        return $cities;
    }

}

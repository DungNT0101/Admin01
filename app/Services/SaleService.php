<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Sale;
use App\Models\ProductCategory;

class SaleService
{
    public function store($request)
    {
        $data = $this->mapData($request);

        return Sale::create($data);
    }

    public function getCategories()
    {
        return ProductCategory::all();
    }

    public function getList()
    {
        return Sale::paginate(10);
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

}

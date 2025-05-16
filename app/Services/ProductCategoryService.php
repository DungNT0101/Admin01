<?php

namespace App\Services;

use App\Models\ProductCategory;
use Illuminate\Support\Str;

class ProductCategoryService
{
    public function getList()
    {
        return ProductCategory::paginate(5);
    }

    public function store($request)
    {
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'keywords' => $request->keywords,
            'description' => $request->description,
        ];

        return ProductCategory::create($data);;
    }

    public function getFirstByField($field, $value)
    {
        return ProductCategory::where($field, $value)->first();
    }

    public function update($request)
    {
        $category = ProductCategory::find($request->id);
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'keywords' => $request->keywords,
            'description' => $request->description,
        ];

        return $category->update($data);
    }

    public function delete($id)
    {
        $category = ProductCategory::find($id);

        return $category->delete();
    }

    public function getAll()
    {
        return ProductCategory::all();
    }
}

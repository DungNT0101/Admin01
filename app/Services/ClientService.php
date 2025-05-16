<?php

namespace App\Services;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\News;
use App\Models\KienThuc;
use App\Models\Page;

class ClientService
{
    public function getHotProducts(){
        return Product::where('hot', 1)->get();
    }

    public function getProducts(){
        return Product::where('home', 1)->get();
    }

    public function getCategories(){
        return ProductCategory::all();
    }

    public function getHomeNews(){
        return News::where('home', 1)->get();
    }

    public function getHomePosts(){
        return KienThuc::where('home', 1)->get();
    }

    public function getCategory($slug){
        return ProductCategory::where('slug', $slug)->first();
    }

    public function productCategory($categoryId){
        return Product::where('category_id', $categoryId)->get();
    }

    public function getNews(){
        return News::all();
    }

    public function getKienThuc(){
        return KienThuc::all();
    }

    public function getPage($slug){
        return Page::where('slug', $slug)->first();
    }

    public function getProductDetails($slug){
        return Product::where('slug', $slug)->first();
    }

    public function getNewsDetails($slug){
        return News::where('slug', $slug)->first();
    }

    public function getKienThucDetails($slug){
        return KienThuc::where('slug', $slug)->first();
    }
}

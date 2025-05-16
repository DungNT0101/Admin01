<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;

use App\Services\ClientService;

class ClientController extends Controller
{
    private $service;
    public function __construct(ClientService $service)
    {
        $this->service = $service;
        View::share('homeConfig', Cache::get('homeConfig'));
        View::share('productCategory', Cache::get('productCategory'));
    }

    public function index(){
        $hotProducts = $this->service->getHotProducts();
        $products = $this->service->getProducts();
        $categories = $this->service->getCategories();
        $news = $this->service->getHomeNews();
        $posts = $this->service->getHomePosts();

        return view('client.home', [
            'hotProducts' => $hotProducts,
            'products' => $products,
            'categories' => $categories,
            'news' => $news,
            'posts' => $posts,
        ]);
    }

    public function category($slug){
        $category = $this->service->getCategory($slug);
        $products = $this->service->productCategory($category->id);

        return view('client.product-category', [
            'products' => $products,
            'category' => $category,
        ]);
    }

    public function news(){
        $posts = $this->service->getNews();

        return view('client.news', [
            'posts' => $posts,
            'title' => 'Tin tức',
            'keywords' => 'Tin tức',
            'description' => 'Tin tức'
        ]);
    }

    public function kienThuc(){
        $posts = $this->service->getKienThuc();

        return view('client.posts', [
            'posts' => $posts,
            'title' => 'Kiến thức',
            'keywords' => 'Kiến thức',
            'description' => 'Kiến thức'
        ]);
    }

    public function introduction(){
        $page = $this->service->getPage('gioi-thieu');

        return view('client.page-details', [
            'page' => $page
        ]);
    }

    public function khuyenMai(){
        $page = $this->service->getPage('khuyen-mai');

        return view('client.page-details', [
            'page' => $page
        ]);
    }

    public function contact(){
        $page = $this->service->getPage('lien-he');

        return view('client.page-details', [
            'page' => $page
        ]);
    }

    public function productDetails($slug){
        $product = $this->service->getProductDetails($slug);

        return view('client.product-details', [
            'product' => $product
        ]);
    }

    public function newsDetails($slug){
        $news = $this->service->getNewsDetails($slug);

        return view('client.news-details', [
            'news' => $news
        ]);
    }

    public function kienThucDetails($slug){
        $post = $this->service->getKienThucDetails($slug);

        return view('client.post-details', [
            'post' => $post
        ]);
    }

}

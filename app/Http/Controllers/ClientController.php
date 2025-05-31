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
        // View::share('homeConfig', Cache::get('homeConfig'));
        // View::share('productCategory', Cache::get('productCategory'));
    }

    public function index(){
        return view('client.home', []);
    }

    public function homePage(){
        return view('client.type-1.page.home-1', []);
    }

}

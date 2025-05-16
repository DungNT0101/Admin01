<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Services\DashboardService;

class DashboardController extends Controller
{
    private $service;

    public function __construct(DashboardService $service){
        $this->service = $service;
    }

    public function index(){
        $dashboard = $this->service->getInfo();

        return view('admin.dashboard', [
            'data' => $dashboard
        ]);
    }

    public function update(Request $request){
        $this->service->update($request);

        Cache::forever('homeConfig', $this->service->getInfo());

        return redirect(route('dashboard'));
    }


}

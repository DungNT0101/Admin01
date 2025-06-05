<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MyPropertyService;
use Illuminate\Support\Facades\Auth;
use App\Models\SaleImage;


class MyPropertyController extends Controller
{
    private $service;

    public function __construct(MyPropertyService $service)
    {
        $this->service = $service;
    }

    public function myProperties()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }
        $properties = $this->service->getMyProperties($user->id);

        return view('admin01.my-property.index', [
            'properties' => $properties
        ]);
    }



}

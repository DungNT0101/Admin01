<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\KienThucService;

class KienThucController extends Controller
{
    private $service;

    public function __construct(KienThucService $service)
    {
        $this->service = $service;
    }

    public function create()
    {
        return view('admin.kien_thuc.create');
    }

    public function store(Request $request)
    {
        $this->service->store($request);

        return redirect(route('kienThuc.index'));
    }

    public function index()
    {
        $posts = $this->service->list();

        return view('admin.kien_thuc.list', [
            'dataList' => $posts
        ]);
    }

    public function edit($id)
    {
        $posts = $this->service->getByID($id);

        return view('admin.kien_thuc.edit', [
            'data' => $posts,
        ]);
    }

    public function update(Request $request)
    {
        $this->service->update($request);

        return redirect(route('kienThuc.edit', $request->id));
    }

    public function delete($id)
    {
        $this->service->delete($id);

        return redirect(route('kienThuc.index'));
    }

}

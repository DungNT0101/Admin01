<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PageService;

class PageController extends Controller
{
    private $service;

    public function __construct(PageService $service)
    {
        $this->service = $service;
    }

    public function create()
    {
        return view('admin.page.create');
    }

    public function store(Request $request)
    {
        $this->service->store($request);

        return redirect(route('page.index'));
    }

    public function index()
    {
        $pages = $this->service->list();

        return view('admin.page.list', [
            'dataList' => $pages
        ]);
    }

    public function edit($id)
    {
        $page = $this->service->getByID($id);

        return view('admin.page.edit', [
            'data' => $page,
        ]);
    }

    public function update(Request $request)
    {
        $this->service->update($request);

        return redirect(route('page.edit', $request->id));
    }

    public function delete($id)
    {
        $this->service->delete($id);

        return redirect(route('page.index'));
    }

    public function view($slug)
    {
        $page = $this->service->getBySlug($slug);

        return view('admin.page.edit', [
            'data' => $page,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\NewsService;

class NewsController extends Controller
{
    private $service;

    public function __construct(NewsService $service)
    {
        $this->service = $service;
    }

    public function createNews()
    {
        return view('admin.news.create');
    }

    public function storeNews(Request $request)
    {
        $this->service->store($request);

        return redirect(route('news.index'));
    }

    public function getNews()
    {
        $news = $this->service->list();

        return view('admin.news.list', [
            'dataList' => $news
        ]);
    }

    public function editNews($id)
    {
        $news = $this->service->getByID($id);

        return view('admin.news.edit', [
            'data' => $news,
        ]);
    }

    public function updateNews(Request $request)
    {
        $this->service->update($request);

        return redirect(route('news.edit', $request->id));
    }

    public function deleteNews($id)
    {
        $this->service->delete($id);

        return redirect(route('news.index'));
    }

}

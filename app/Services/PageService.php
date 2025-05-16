<?php

namespace App\Services;

use App\Models\Page;
use Illuminate\Support\Str;

class PageService
{
    public function store($request)
    {
        $data = $this->mapData($request);
        return Page::create($data);
    }

    public function list()
    {
        return Page::paginate(15);
    }

    public function getById($id)
    {
        return Page::find($id);
    }

    public function destroy($id)
    {
        return Page::destroy($id);
    }

    public function mapData($request)
    {
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'keywords' => $request->keywords,
            'description' => $request->description,
            'content' => $request->content
        ];

        $avatar = $request->avatar;

        if($avatar){
            $avatarName = Str::slug($request->title).'.'.$avatar->guessExtension();
            $avatar->move(config('image.news'), $avatarName);
            $data['avatar'] = config('image.news').'/'.$avatarName;
        }

        return $data;
    }

    public function update($request)
    {
        $data = $this->mapData($request);
        $news = $this->getById($request->id);

        return $news->update($data);
    }

    public function delete($id)
    {
        return Page::find($id)->delete();
    }

    public function getBySlug($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return $page;
    }
}

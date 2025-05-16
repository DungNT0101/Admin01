<?php

namespace App\Services;

use App\Models\News;
use Illuminate\Support\Str;

class NewsService
{
    public function store($request)
    {
        $data = $this->mapData($request);
        return News::create($data);
    }

    public function list()
    {
        return News::paginate(15);
    }

    public function getById($id)
    {
        return News::find($id);
    }

    public function destroy($id)
    {
        return News::destroy($id);
    }

    public function mapData($request)
    {
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'type' => $request->type,
            'keywords' => $request->keywords,
            'description' => $request->description,
            'home' => empty($request->home) ? 0 : 1,
            'hot' => empty($request->hot) ? 0 : 1,
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
        return News::find($id)->delete();
    }
}

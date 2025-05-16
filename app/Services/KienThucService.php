<?php

namespace App\Services;

use App\Models\KienThuc;
use Illuminate\Support\Str;

class KienThucService
{
    public function store($request)
    {
        $data = $this->mapData($request);
        return KienThuc::create($data);
    }

    public function list()
    {
        return KienThuc::paginate(15);
    }

    public function getById($id)
    {
        return KienThuc::find($id);
    }

    public function destroy($id)
    {
        return KienThuc::destroy($id);
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
            $avatar->move(config('image.kien_thuc'), $avatarName);
            $data['avatar'] = config('image.kien_thuc').'/'.$avatarName;
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
        return KienThuc::find($id)->delete();
    }
}

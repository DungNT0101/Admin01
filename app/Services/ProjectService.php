<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Support\Str;

class ProjectService
{
    public function store($request)
    {
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'keywords' => $request->keywords,
            'description' => $request->description,
            'summary' => $request->summary,
            'content' => $request->content,
            'home' => empty($request->home) ? 0 : 1
        ];
        $fieldsUnique = ['title', 'slug'];
        $fieldsUpdate = ['keywords', 'description', 'summary', 'content', 'home'];

        $features = $request->features;
        $featuresName = '';

        if($features){
            $featuresName = Str::slug($request->title).'.'.$features->guessExtension();
            $features->move(config('filesystems.project'), $featuresName);
            $data['features'] = config('filesystems.project').'/'.$featuresName;
            array_push($fieldsUpdate, 'features');
        }

        Project::upsert($data,$fieldsUnique, $fieldsUpdate);
        $product = $this->getFirstByField('title', $request->title);

        return $product;
    }

    public function list()
    {
        return Project::all();
    }

    public function getById($id)
    {
        return Project::where('id', $id)->first();
    }

    public function getFirstByField($field, $value)
    {
        return Project::where($field, $value)->first();
    }

    public function destroy($id)
    {
        return Project::destroy($id);
    }
}

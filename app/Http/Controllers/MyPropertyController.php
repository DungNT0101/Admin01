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

    /**
     * Show the form for creating a new property.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        return view('admin01.my-property.create');
    }
    /**
     * Store a newly created property in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        $request->merge(['user_id' => $user->id]);
        $property = $this->service->storeProperty($request);

        // Handle gallery images
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $file) {
                $filename = Auth::id().'_'.time() . '.' . $file->guessExtension();
                $file->move(config('image.sales'), $filename);
                // Save each image to the database
                SaleImage::create([
                    'sale_id' => $property->id,
                    'path' => config('image.sales').'/'.$filename,
                    'type' => 'gallery',
                ]);
            }
        }

        // Handle video upload
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = Auth::id().'_'.time().'.'.$video->guessExtension();
            $video->move(config('image.sales'), $videoName);
            // Update video path in Sale
            $property->video = config('image.sales').'/'.$videoName;
            $property->save();
        }

        if ($property) {
            return redirect()->route('my-properties.create')->with('success', 'Thêm mới thành công.');
        } else {
            return redirect()->back()->with('error', 'Thêm mới thất bại. Vui lòng thử lại.');
        }
    }

}

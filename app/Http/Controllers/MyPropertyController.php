<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MyPropertyService;
use Illuminate\Support\Facades\Auth;
use App\Models\SaleImage;
use App\Models\Sale;


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
        $countProperties = $properties->total();
        $onSale = Sale::ON_SALE;
        $sold = Sale::SOLD;

        return view('admin01.my-property.index', [
            'properties' => $properties,
            'onSale' => $onSale,
            'sold' => $sold,
            'count' => $countProperties
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
            $i = 0;
            foreach ($request->file('gallery_images') as $file) {
                $filename = Auth::id().'_'.time().'_'.$i++.'.'.$file->guessExtension();
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
            return redirect()->route('my-properties.show', ['id' => $property->id])->with('success', 'Thêm mới thành công.');
        } else {
            return redirect()->back()->with('error', 'Thêm mới thất bại. Vui lòng thử lại.');
        }
    }

    /**
     * Display the specified property.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $onSale = Sale::ON_SALE;
        $sold = Sale::SOLD;
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        $property = $this->service->getPropertyById($id);
        if (!$property || $property->user_id !== $user->id) {
            return redirect()->route('my-properties')->with('error', 'Không tìm thấy tài sản.');
        }

        return view('admin01.my-property.show', [
            'property' => $property,
            'onSale' => $onSale,
            'sold' => $sold
        ]);
    }

    /**
     * Show the form for creating a new property.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        $property = $this->service->getPropertyById($id);
        if (!$property || $property->user_id !== $user->id) {
            return redirect()->route('my-properties')->with('error', 'Không tìm thấy tài sản.');
        }

        return view('admin01.my-property.edit', [
            'property' => $property
        ]);
    }

    /**
     * Update the specified property in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        $property = $this->service->getPropertyById($id);
        if (!$property || $property->user_id !== $user->id) {
            return redirect()->route('my-properties')->with('error', 'Không tìm thấy tài sản.');
        }

        $updated = $this->service->updateProperty($id, $request);

        // Handle gallery images (optional: update logic as needed)
        if ($request->hasFile('gallery_images')) {
            // Xóa ảnh cũ nếu cần
            // $property->images()->delete();
            $i = 0;
            foreach ($request->file('gallery_images') as $file) {
                $filename = Auth::id().'_'.time().'_'.$i++.'.'.$file->guessExtension();
                $file->move(config('image.sales'), $filename);
                \App\Models\SaleImage::create([
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
            $property->video = config('image.sales').'/'.$videoName;
            $property->save();
        }

        if ($updated) {
            return redirect()->route('my-properties.edit', $id)->with('success', 'Cập nhật thành công.');
        } else {
            return redirect()->back()->with('error', 'Cập nhật thất bại. Vui lòng thử lại.');
        }
    }

    public function deleteImage($imageId)
    {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Chưa đăng nhập!']);
        }
        $image = SaleImage::find($imageId);
        if (!$image) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy hình ảnh!']);
        }
        $property = $this->service->getPropertyById($image->sale_id);
        if (!$property || $property->user_id !== $user->id) {
            return response()->json(['success' => false, 'message' => 'Không có quyền xóa ảnh này!']);
        }
        // Xóa file vật lý nếu tồn tại
        if ($image->path && file_exists(public_path($image->path))) {
            @unlink(public_path($image->path));
        }
        if ($image->delete()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Xóa hình ảnh thất bại!']);
        }
    }

    public function deleteVideo($propertyId)
    {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Chưa đăng nhập!']);
        }
        $property = $this->service->getPropertyById($propertyId);
        if (!$property || $property->user_id !== $user->id) {
            return response()->json(['success' => false, 'message' => 'Không có quyền xóa video này!']);
        }
        // Xóa file video vật lý nếu cần (nếu lưu trên server)
        if ($property->video && file_exists(public_path($property->video))) {
            @unlink(public_path($property->video));
        }
        $property->video = null;
        $property->save();
        return response()->json(['success' => true]);
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        $query = request('query');
        $keyword = $request->input('keyword');
        $type = $request->input('type');

        $query = Sale::with(['images', 'user']);
        if ($type) {
            $query->where('type', $type);
        }
        if ($keyword) {
            $query->where(function($q) use ($keyword) {
                $q->where('title', 'LIKE', "%{$keyword}%")
                  ->orWhere('property_code', 'LIKE', "%{$keyword}%");
            });
        }
        $query->where('user_id', $user->id); // Chỉ lấy bất động sản của người dùng hiện tại
        $properties = $query->paginate(9);
        $countProperties = $properties->total();

        $onSale = Sale::ON_SALE;
        $sold = Sale::SOLD;

        return view('admin01.my-property.index', [
            'properties' => $properties,
            'keyword' => $keyword,
            'onSale' => $onSale,
            'sold' => $sold,
            'type' => $type,
            'count' => $countProperties
        ]);
    }

}

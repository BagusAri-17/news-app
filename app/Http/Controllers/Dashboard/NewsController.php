<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreNewsRequest;
use Illuminate\Http\Request;

use File;
use Auth;

use App\Models\User;
use App\Models\News;
use App\Models\Category;
use App\Models\Location;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::where('user_id', Auth::user()->id)->get();

        return view('pages.dashboard.admin.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $locations = Location::all();

        return view('pages.dashboard.admin.create', compact('categories', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $file_thumbnail = $request->file('thumbnail');
        $file_image = $request->file('image');

        $path_thumbnail = $file_thumbnail->store('news/thumbnail', 'public');
        $path_image = $file_image->store('news/image', 'public');

        // $content = json_decode($request->input('content'), true);
        // $data['content'] = $content;

        $news = News::create([
            'title' => $request->title,
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
            'location_id' => $request->location_id,
            'thumbnail' => $path_thumbnail,
            'image' => $path_image,
            'content' => $request->content,  // Editor.js content as JSON string
        ]);

        return redirect()->route('admin.dashboard.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $locations = Location::all();
        $news = News::where('id', $id)->first();

        return view('pages.dashboard.admin.edit', compact('news', 'categories', 'locations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $data = $request->all();
        $news = News::find($id);

        $file_thumbnail = $request->file('thumbnail');
        $file_image = $request->file('image');

        $path_thumbnail = $file_thumbnail->store('news/thumbnail', 'public');
        $path_image = $file_image->store('news/image', 'public');

        // $data['thumbnail'] = $path_thumbnail;
        // $data['image'] = $path_image;

        $oldThumbnail = $news->thumbnail;
        $oldImage = $news->image;

        if ($oldThumbnail && File::exists(public_path('storage/' . $oldThumbnail))) {
            File::delete(public_path('storage/' . $oldThumbnail));
        }
        if ($oldImage && File::exists(public_path('storage/' . $oldImage))) {
            File::delete(public_path('storage/' . $oldImage));
        }

        //   dd($data);
        // $news->update($data);
        // return redirect()->route('admin.dashboard.index');

        
        $news->title = $request->title;
        $news->category_id = $request->category_id;
        $news->location_id = $request->location_id;
        $news->content = $request->content;
        $news->thumbnail = $path_thumbnail;
        $news->image = $path_image;
        // Save the changes
        $news->save();
        return redirect()->route('admin.dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = News::find($id);

        $data->delete();
        return redirect()->route('admin.dashboard.index');
    }
}

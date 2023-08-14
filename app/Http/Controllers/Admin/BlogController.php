<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Http\Requests\BlogRequest;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\BlogUpdateRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Blog",
            'sub_title' => "List",
            'header' => "All Blog List",
            'blogs' => Blog::paginate(),
        ];
        return view('admin.content.blogs.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Blog",
            'sub_title' => "Create",
            'header' => "Create Blog",
        ];
        return view('admin.content.blogs.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $fileName = time() . "-blog." . $request->file('banner')->getClientOriginalExtension();
        Image::make($request->file('banner'))->save('upload/blog/' . $fileName);
        $project = Blog::create(array_merge($request->validated(), ['banner' => $fileName, 'user_id' => auth()->user()->id]));
        session()->put('success', 'Item created successfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $data = [
            'title' => "Blog",
            'sub_title' => "Show",
            'header' => "Show Blog",
            'blog' => $blog,
        ];
        return view('admin.content.blogs.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $data = [
            'title' => "Blog",
            'sub_title' => "Edit",
            'header' => "Edit Blog",
            'blog' => $blog,
        ];
        return view('admin.content.blogs.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogUpdateRequest $request, Blog $blog)
    {
        if ($request->banner != '') {

            //code for remove old file
            if ($blog->banner != ''  && $blog->banner != null) {
                unlink('upload/blog/' . $blog->banner);
            }

            //upload new file
            $fileName = time() . "-blog." . $request->file('banner')->getClientOriginalExtension();
            Image::make($request->file('banner'))->save('upload/blog/' . $fileName);

            //for update in table
            $blog->update(array_merge($request->validated(), ['banner' => $fileName]));
            session()->put('success', 'Item Updated successfully.');
            return redirect()->back();
        }
        $blog->update(array_merge($request->validated(), ['banner' => $blog->banner]));
        session()->put('success', 'Item Updated successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        unlink('upload/blog/' . $blog->banner);
        $blog->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}

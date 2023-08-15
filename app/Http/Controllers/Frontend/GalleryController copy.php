<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $gallerys = Gallery::all();
        return view('admin.content.gallery.list', compact('gallerys'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.content.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'small_image' => 'required|image',
            'big_image' => 'required|image',
            'category' => 'required|string',

        ]);

        $gallerys = new Gallery;
        $gallerys->title = $request->title;
        $gallerys->sub_title = $request->sub_title;
        $gallerys->category = $request->category;

        $big_file = $request->file('big_image');
        Storage::putFile('public/big_image/', $big_file);
        $gallerys->big_image = "storage/big_image/".$big_file->hashName();

        $small_file = $request->file('small_image');
        Storage::putFile('public/small_image/', $small_file);
        $gallerys->small_image = "storage/small_image/".$small_file->hashName();



        $gallerys->save();

        return redirect()->route('gallery.create')->with('success', "New Gallery create Successfully");
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
        $gallery = Gallery::find($id);
        return view('admin.content.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'sub_title' => 'required|string',
            // 'small_image' => 'required|image',
            // 'big_image' => 'required|image',
            'category' => 'required|string',

        ]);

        $gallerys = Gallery::find($id);
        $gallerys->title = $request->title;
        $gallerys->sub_title = $request->sub_title;
        $gallerys->category = $request->category;


        if($request->file('small_image')){

            $small_file = $request->file('small_image');
            Storage::putFile('public/small_image/', $small_file);
            $gallerys->small_image = "storage/small_image/".$small_file->hashName();
    
        }
    

        if($request->file('big_image')){

            $big_file = $request->file('big_image');
            Storage::putFile('public/big_image/', $big_file);
            $gallerys->big_image = "storage/big_image/".$big_file->hashName();

        }

     


        $gallerys->save();

        return redirect()->route('gallery.list')->with('success', "Gallery Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::find($id);
        @unlink(public_path($gallery->big_image));
        @unlink(public_path($gallery->small_image));
        $gallery->delete();

        return redirect()->route('gallery.list')->with('success','Gallery Deleteed Successfully');
    }
}

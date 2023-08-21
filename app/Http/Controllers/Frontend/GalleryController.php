<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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



        // $big_file = $request->file('big_image');
        // Storage::putFile('public/big_image/', $big_file);
        // $gallerys->big_image = "storage/big_image/".$big_file->hashName();

        // $small_file = $request->file('small_image');
        // Storage::putFile('public/small_image/', $small_file);
        // $gallerys->small_image = "storage/small_image/".$small_file->hashName();



        $fileName = time() . "-big_image." . $request->file('big_image')->getClientOriginalExtension();
        Image::make($request->file('big_image'))->save('upload/big_image/'. $fileName);
        $gallerys->big_image = "upload/big_image/".$fileName;

        // $gallerys->save();


        $fileName = time() . "-small_image." . $request->file('small_image')->getClientOriginalExtension();
        Image::make($request->file('small_image'))->save('upload/small_image/'. $fileName);
        $gallerys->small_image = "upload/small_image/".$fileName;

        // $gallerys->save();

        // return redirect()->route('gallery.create')->with('success', "New Slider create Successfully");


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


        // if($request->file('small_image')){

        //     $small_file = $request->file('small_image');
        //     Storage::putFile('public/small_image/', $small_file);
        //     $gallerys->small_image = "storage/small_image/".$small_file->hashName();
    
        // }
    

        // if($request->file('big_image')){

        //     $big_file = $request->file('big_image');
        //     Storage::putFile('public/big_image/', $big_file);
        //     $gallerys->big_image = "storage/big_image/".$big_file->hashName();

        // }


        if ($request->big_image != '') {

            //code for remove old file
            if ($gallerys->big_image != ''  && $gallerys->big_image != null) {
                unlink( $gallerys->big_image);
            }

            //upload new file
            $fileName = time() . "-gallerys." . $request->file('big_image')->getClientOriginalExtension();
            Image::make($request->file('big_image'))->save('upload/big_image/' . $fileName);
            

            //for update in table
            // $sliders->update(array_merge($request->validated(), ['bg_img' => $fileName]));

            $gallerys->big_image = "upload/big_image/".$fileName;

            $gallerys->save();


            session()->put('success', 'Item Updated successfully.');
            return redirect()->back();
        }




        if ($request->small_image != '') {

            //code for remove old file
            if ($gallerys->small_image != ''  && $gallerys->small_image != null) {
                unlink( $gallerys->small_image);
            }

            //upload new file
            $fileName = time() . "-gallerys." . $request->file('small_image')->getClientOriginalExtension();
            Image::make($request->file('small_image'))->save('upload/small_image/' . $fileName);
            

            //for update in table
            // $sliders->update(array_merge($request->validated(), ['bg_img' => $fileName]));

            $gallerys->small_image = "upload/small_image/".$fileName;

            $gallerys->save();


            session()->put('success', 'Item Updated successfully.');
            return redirect()->back();
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

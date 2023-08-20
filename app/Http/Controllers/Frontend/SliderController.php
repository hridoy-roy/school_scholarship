<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Models\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $sliders = Slider::all();
        return view('admin.content.slider.list', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.content.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'sub_title' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'link1' => 'required|string',
            'link2' => 'required|string',
            'logo' => 'required|image',
            'favicon' => 'required|image',
            'bg_image' => 'required|image',
            

        ]);

        $sliders = new Slider;
        $sliders->sub_title = $request->sub_title;
        $sliders->title = $request->title;
        $sliders->description = $request->description;
        $sliders->link1 = $request->link1;
        $sliders->link2 = $request->link2;

        $logo_file = $request->file('logo');
        Storage::putFile('public/logo/', $logo_file);
        $sliders->logo = "storage/logo/".$logo_file->hashName();
        
        $favicon_file = $request->file('favicon');
        Storage::putFile('public/favicon/', $favicon_file);
        $sliders->favicon = "storage/favicon/".$favicon_file->hashName();

        $bg_file = $request->file('bg_image');
        Storage::putFile('public/bg_image/', $bg_file);
        $sliders->bg_image = "storage/bg_image/".$bg_file->hashName();



        $sliders->save();

        return redirect()->route('slider.create')->with('success', "New Slider create Successfully");
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
        $slider = Slider::find($id);
        return view('admin.content.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [

            'sub_title' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',

            // 'link1' => 'required|string',
            // 'link2' => 'required|string',

            // 'logo' => 'required|image',
            // 'favicon' => 'required|image',
            // 'bg_image' => 'required|image',

        ]);

        $sliders = Slider::find($id);

        $sliders->sub_title = $request->sub_title;
        $sliders->title = $request->title;
        $sliders->description = $request->description;
        $sliders->link1 = $request->link1;
        $sliders->link2 = $request->link2;


        if($request->file('logo')){

            $logo_file = $request->file('logo');
            Storage::putFile('public/logo/', $logo_file);
            $sliders->logo = "storage/logo/".$logo_file->hashName();
    
        }
    

        if($request->file('favicon')){

            $favicon_file = $request->file('favicon');
            Storage::putFile('public/favicon/', $favicon_file);
            $sliders->favicon = "storage/favicon/".$favicon_file->hashName();

        }

        if($request->file('bg_image')){

            $bg_file = $request->file('bg_image');
            Storage::putFile('public/bg_image/', $bg_file);
            $sliders->bg_image = "storage/bg_image/".$bg_file->hashName();

        }

     


        $sliders->save();

        return redirect()->route('slider.list')->with('success', "Slider Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);
        @unlink(public_path($slider->logo));
        @unlink(public_path($slider->favicon));
        @unlink(public_path($slider->bg_image));
        $slider->delete();

        return redirect()->route('slider.list')->with('success','Slider Deleteed Successfully');
    }
}

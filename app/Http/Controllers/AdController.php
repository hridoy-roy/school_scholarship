<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Ad",
            'sub_title' => "Index",
            'header' => "List Ad",
        ];
        $ad = Ad::first();
        return view ('admin.content.ad.index', compact('ad'), $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Ad",
            'sub_title' => "Create",
            'header' => "Create Ad",
        ];
        return view('admin.content.ad.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $count = Ad::count();

        $student_data = $request->except('1','2','3');

        if ($count < 1) {

            for ($i=1; $i <4; $i++) {

                    $file = " ";

                    if($file = $request->file([$i])){
                        $imageName =$i.'.'.$file->getClientOriginalExtension();
                        $student_data[$i] = $file->move('upload/ad/',$imageName);
                    }

            }
            Ad::create($student_data);
            session()->put('success', 'Item created successfully.');
            return redirect()->route('ad.index');
        }
        else{
            session()->put('success', 'Already created');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Ad $ad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ad $ad)
    {
        $data = [
            'title' => "Ad",
            'sub_title' => "Edit",
            'header' => "Edit Ad",
        ];
        return view ('admin.content.ad.create',compact('ad') ,$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ad $ad)
    {
        $student_data = $request->except('1','2','3');

        for ($i=1; $i <4; $i++) {

            $file = " ";
            $deleteOldImage = $ad->$i;

            if($file = $request->file($i)){
                if(file_exists($deleteOldImage)){
                    unlink($deleteOldImage);
                }
                $imageName = $i.'.'.$file->getClientOriginalExtension();
                $student_data[$i] = $file->move('upload/ad/',$imageName);
            }
            else{
                $student_data[$i] = $ad->$i;
            }

        }

        $ad->update($student_data);

        session()->put('success', 'Item Updated successfully.');

        return redirect()->route('ad.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ad $ad)
    {
        for ($i=1; $i <4; $i++) {
            $deleteOldImage = $ad->$i;
                if(file_exists($deleteOldImage)){
                    unlink($deleteOldImage);
                }
        }
        $ad->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}

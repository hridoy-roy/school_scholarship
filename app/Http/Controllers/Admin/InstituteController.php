<?php

namespace App\Http\Controllers\Admin;

use App\Models\Institute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Institute",
            'sub_title' => "Index",
            'header' => "List Institute",
        ];
        $institutes = Institute::orderBy('order_by')->paginate();
        return view ('admin.content.institute.index', compact('institutes'), $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Institute",
            'sub_title' => "Create",
            'header' => "Create Institute",
        ];
        return view('admin.content.institute.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'name'=>'required|min:6|max:255',
            'order_by'=>'required|numeric',
            'status'=>'required',
        ]);

        Institute::create($request->all());

        session()->put('success', 'Item created successfully.');;
            
        return redirect()->route('institute.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Institute $institute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Institute $institute)
    {
        $data = [
            'title' => "Institute",
            'sub_title' => "Edit",
            'header' => "Edit Institute",
        ];
        return view ('admin.content.institute.create',compact('institute'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Institute $institute)
    {
         $this->validate($request, [
            'name'=>'required|min:3|max:255',
            'order_by'=>'required|numeric',
            'status'=>'required',
        ]);

        $institute->update($request->all());

        session()->put('success', 'Item Updated successfully.');
            
        return redirect()->route('institute.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Institute $institute)
    {
        $institute->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}
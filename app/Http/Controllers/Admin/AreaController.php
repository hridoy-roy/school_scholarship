<?php

namespace App\Http\Controllers\Admin;

use App\Models\Area;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Area",
            'sub_title' => "List",
            'header' => "List Area",
            'areas' => Area::paginate(),
        ];
        $areas = Area::orderBy('order_by')->get();
        return view ('admin.content.area.index', compact('areas'), $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Area",
            'sub_title' => "Create",
            'header' => "Create Area",
        ];
        return view('admin.content.area.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'name'=>'required',
            'order_by'=>'required',
            'status'=>'required',
        ]);

        Area::create([
            'name' => $request->name,
            'order_by' => $request->order_by,
            'status' => $request->status,
        ]);

        session()->put('success', 'Area created successfully.');
        return redirect()->route('areas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        $data = [
            'title' => "Area",
            'sub_title' => "Edit",
            'header' => "Edit Area",
            'area' => $area
        ];
        return view ('admin.content.area.create', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
         $this->validate($request, [
            'name'=>'required',
            'order_by'=>'required',
            'status'=>'required',
        ]);

        $area->update($request->all());

        session()->put('success', 'Area Updated successfully.');

        return redirect()->route('areas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        $area->delete();
        session()->put('success', 'Area Deleted successfully.');
        return redirect()->back();
    }
}

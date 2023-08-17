<?php

namespace App\Http\Controllers\Admin;

use App\Models\StudentClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Class",
            'sub_title' => "List",
            'header' => "List Class",
            'classes' => StudentClass::paginate(),
        ];
        $classes = StudentClass::orderBy('order_by')->get();
        return view ('admin.content.class.index', compact('classes'), $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Class",
            'sub_title' => "Create",
            'header' => "Create Class",
        ];
        return view('admin.content.class.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'name'=>'required|max:15',
            'order_by'=>'required|numeric',
            'status'=>'required',
        ]);

        StudentClass::create([
            'name' => $request->name,
            'order_by' => $request->order_by,
            'status' => $request->status,
        ]);

        session()->put('success', 'Item created successfully.');
        return redirect()->route('classes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentClass $studentClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentClass $class)
    {
        $data = [
            'title' => "Class",
            'sub_title' => "Edit",
            'header' => "Edit Class",
            'class' => $class
        ];
        return view ('admin.content.class.create', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentClass $class)
    {
         $this->validate($request, [
            'name'=>'required|min:3|max:255',
            'order_by'=>'required|numeric',
            'status'=>'required',
        ]);

        $class->update($request->all());

        session()->put('success', 'Item Updated successfully.');

        return redirect()->route('classes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentClass $class)
    {
        $class->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}
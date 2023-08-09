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
            'sub_title' => "Create",
            'header' => "List Class",
            'classes' => StudentClass::paginate(),
        ];
        return view('admin.content.class.list', $data);
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
        $request->validate([
            'name' => 'required'
        ]);


        StudentClass::create([
            'name' => $request->name
        ]);

        session()->put('success', 'Item created successfully.');
        return redirect()->back();
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
        return view('admin.content.class.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentClass $class)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $class->update([
            'name' => $request->name
        ]);

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

<?php

namespace App\Http\Controllers\Admin;

use App\Models\ExamCenter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Exam Center",
            'sub_title' => "Index",
            'header' => "List Class",
            'classes' => ExamCenter::paginate(),
        ];
        $examcenters = ExamCenter::orderBy('order_by')->get();
        return view ('admin.content.examcenter.index', compact('examcenters'), $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Exam Center",
            'sub_title' => "Create",
            'header' => "Create Class",
        ];
        return view('admin.content.examcenter.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'name'=>'required|min:6|max:255',
            'capacity'=>'required|max:10',
            'order_by'=>'required|numeric',
            'status'=>'required',
        ]);

        ExamCenter::create($request->all());

        session()->put('success', 'Item created successfully.');;
            
        return redirect()->route('examcenter.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExamCenter $center)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = [
            'title' => "Exam Center",
            'sub_title' => "Edit",
            'header' => "Edit Class",
            'class' => $id
        ];
        $center = ExamCenter::where('id', $id)->first();
        return view ('admin.content.examcenter.create',compact('center'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'name'=>'required|min:3|max:255',
            'capacity'=>'required|max:10',
            'order_by'=>'required|numeric',
            'status'=>'required',
        ]);
        $ExamCenter = ExamCenter::find($id);
        $ExamCenter->update($request->all());

        session()->put('success', 'Item Updated successfully.');
            
        return redirect()->route('examcenter.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ExamCenter = ExamCenter::find($id);
        $ExamCenter->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}
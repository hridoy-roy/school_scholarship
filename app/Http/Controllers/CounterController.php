<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Counter",
            'sub_title' => "Index",
            'header' => "List Counter",
        ];
        $counter = Counter::first();
        return view ('admin.content.counter.index', compact('counter'), $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        $count = Counter::count();
        if ($count < 1) {
            $data = [
                'title' => "Counter",
                'sub_title' => "Create",
                'header' => "Create Counter",
            ];
            return view('admin.content.counter.create', compact('data'),$data);
        }else{
            $already_created = [
                'title' => "Already Created",
                'sub_title' => "Please go in counter list page and update your data.",
            ];
            return view('admin.content.counter.create',compact('already_created'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'total_applicant'=>'required|min:3|max:255',
            'total_applicant_number'=>'required|numeric',
            'total_scholarship'=>'required|min:3|max:255',
            'total_scholarship_number'=>'required|numeric',
            'total_school'=>'required|min:3|max:255',
            'total_school_number'=>'required|numeric',
            'total_exam_center'=>'required|min:3|max:255',
            'total_exam_center_number'=>'required|numeric',
        ]);

        $count = Counter::count();

        if ($count < 1) {
            Counter::create($request->all());
            session()->put('success', 'Item created successfully.');
            return redirect()->route('counter.index');
        }else{
            session()->put('success', 'Already Created.');
            return redirect()->back();
        }        
    }

    /**
     * Display the specified resource.
     */
    public function show(Counter $counter)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Counter $counter)
    {
        $data = [
            'title' => "Counter",
            'sub_title' => "Edit",
            'header' => "Edit Counter",
        ];
        return view ('admin.content.counter.create',compact('counter'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Counter $counter)
    {
         $this->validate($request, [
            'total_applicant'=>'required|min:3|max:255',
            'total_applicant_number'=>'required|numeric',
            'total_scholarship'=>'required|min:3|max:255',
            'total_scholarship_number'=>'required|numeric',
            'total_school'=>'required|min:3|max:255',
            'total_school_number'=>'required|numeric',
            'total_exam_center'=>'required|min:3|max:255',
            'total_exam_center_number'=>'required|numeric',
        ]);

        $counter->update($request->all());

        session()->put('success', 'Item Updated successfully.');
            
        return redirect()->route('counter.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Counter $counter)
    {
        $counter->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();

    }
}
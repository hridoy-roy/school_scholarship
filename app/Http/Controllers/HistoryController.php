<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "History",
            'sub_title' => "Index",
            'header' => "List History",
        ];
        $history = History::first();
        return view ('admin.content.history.index', compact('history'), $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "History",
            'sub_title' => "Create",
            'header' => "Create History",
        ];
        return view('admin.content.history.create', $data); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|min:6|max:50',
            'description'=>'required|min:6|max:1000',
            'button'=>'required|min:3|max:30',
            'button'=>'required|min:3|max:255',
            'image'=>'required',
        ]);

        $count = History::count();

        if ($count < 1) {
            $student_data = $request->except(['image']);

            $file = " ";   

            if($file = $request->file('image')){
                $imageName = $request->title.'.'.$file->getClientOriginalExtension();
                $student_data['image'] = $file->move('upload/history/',$imageName);
            }

            History::create($request->all());
            session()->put('success', 'Item created successfully.');
            return redirect()->route('history.index');
        }else{
            session()->put('success', 'Already Created.');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(History $history)
    {
        $data = [
            'title' => "History",
            'sub_title' => "Edit",
            'header' => "Edit History",
        ];
        return view ('admin.content.history.create',compact('history'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, History $history)
    {
        $this->validate($request, [
            'title'=>'required|min:6|max:50',
            'description'=>'required|min:6|max:1000',
            'button'=>'required|min:3|max:30',
            'button'=>'required|min:3|max:255',
            'image'=>'required',
        ]);
        
         $student_data = $request->except(['image','registration_no',]);

        $file = " ";
        $deleteOldImage = $history->image;

        if($file = $request->file('image')){
            if(file_exists($deleteOldImage)){
                unlink($deleteOldImage);
            }
            $imageName = $request->title.'.'.$file->getClientOriginalExtension();
            $student_data['image'] = $file->move('upload/history/',$imageName);
        }
        else{            
            $student_data['image'] = $history->image;
        }

        $history->update($student_data);

        session()->put('success', 'Item Updated successfully.');

        return redirect()->route('history.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(History $history)
    {
        $deleteOldImage = $history->image;
        if(file_exists($deleteOldImage)){
            unlink($deleteOldImage);
        }

        $history->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}
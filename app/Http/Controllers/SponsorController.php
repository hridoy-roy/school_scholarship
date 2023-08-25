<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Sponsor",
            'sub_title' => "Index",
            'header' => "List Sponsor",
        ];
        $sponsor = Sponsor::first();
        return view ('admin.content.sponsor.index', compact('sponsor'), $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $count = Sponsor::count();
        if ($count < 1) {
            $data = [
                'title' => "Sponsor",
                'sub_title' => "Create",
                'header' => "Create Sponsor",
            ];
            return view('admin.content.sponsor.create', compact('data'),$data);
        }else{
            $already_created = [
                'title' => "Already Created",
                'sub_title' => "Please go in sponsor list page and update your data.",
            ];
            return view('admin.content.sponsor.create',compact('already_created'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $count = Sponsor::count();

        $student_data = $request->except('1','2','3','4','5','6','7','8');

        if ($count < 1) {

            for ($i=1; $i <9; $i++) {  

                    $file = " ";   

                    if($file = $request->file([$i])){
                        $imageName =$i.'.'.$file->getClientOriginalExtension();
                        $student_data[$i] = $file->move('upload/sponsor/',$imageName);
                    }
                    
            }
            Sponsor::create($student_data);
            session()->put('success', 'Item created successfully.');                 
            return redirect()->route('sponsor.index');  
        }
        else{
            session()->put('success', 'Already created');                 
            return redirect()->back();
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Sponsor $sponsor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sponsor $sponsor)
    {
        $data = [
            'title' => "Sponsor",
            'sub_title' => "Edit",
            'header' => "Edit Sponsor",
        ];
        return view ('admin.content.sponsor.create',compact('sponsor') ,$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sponsor $sponsor)
    { 
        $student_data = $request->except('1','2','3','4','5','6','7','8');

        for ($i=1; $i <9; $i++) {  

            $file = " ";
            $deleteOldImage = $sponsor->$i;

            if($file = $request->file($i)){
                if(file_exists($deleteOldImage)){
                    unlink($deleteOldImage);
                }
                $imageName = $i.'.'.$file->getClientOriginalExtension();
                $student_data[$i] = $file->move('upload/sponsor/',$imageName);
            }
            else{            
                $student_data[$i] = $sponsor->$i;
            }

        }

        $sponsor->update($student_data);

        session()->put('success', 'Item Updated successfully.');

        return redirect()->route('sponsor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sponsor $sponsor)
    {
        for ($i=1; $i <9; $i++) {  
            $deleteOldImage = $sponsor->$i;
                if(file_exists($deleteOldImage)){
                    unlink($deleteOldImage);
                }
        }    
        $sponsor->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}
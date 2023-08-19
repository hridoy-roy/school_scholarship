<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Institute;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Institute",
            'sub_title' => "Index",
            'header' => "List Class",
        ];
        $students = Student::with('institute')->with('student_class')->get();

        return view('admin.content.register.index', compact('students'), $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $institutes = Institute::where('status', 1)->pluck('name', 'id');
        $student_classes = StudentClass::where('status', 1)->pluck('name', 'id');
        return view('frontend.register', compact('institutes', 'student_classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {

        if (Student::latest()->first()?->registration_no) {
            $currentRegNo = Student::latest()->first()?->registration_no;
            $currentYear = substr($currentRegNo, 0, 4);
            if ($currentYear === date('Y')) {
                $student_data['registration_no'] = $currentRegNo + 1;
            } else {
                $student_data['registration_no'] = date('Y') . '0001';
            }
        } else {
            $student_data['registration_no'] = date('Y') . '0001';
        }

        $student_data['image'] = time() . "-profile." . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('upload/profile/'), $student_data['image']);

        // dd(array_merge($student_data,$request->validated()));
        $student = Student::create(array_merge($request->validated(), $student_data));

        session()->put('success', 'Item created successfully.');;

        return redirect()->route('students.show', [$student->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $student->load(['institute', 'student_class']);
        return view('frontend.view', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $data = [
            'title' => "Class",
            'sub_title' => "Edit",
            'header' => "Edit Class",
        ];
        $institutes = Institute::where('status', 1)->pluck('name', 'id');
        $student_classes = StudentClass::where('status', 1)->pluck('name', 'id');
        return view('frontend.register', compact('student', 'institutes', 'student_classes'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        if ($request->file('image')) {
                dd();
                $path = public_path('upload/profile/');
                unlink($path . $student->image);
            $student_data['image'] = time() . "-profile." . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('upload/profile/'), $student_data['image']);
        } else {
            $student_data['image'] = $student->photo;
        }



        $student->update(array_merge($request->validated(), $student_data));

        session()->put('success', 'Item Updated successfully.');

        return redirect()->route('register.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $deleteOldImage = $student->photo;
        if (file_exists($deleteOldImage)) {
            unlink($deleteOldImage);
        }

        $student->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}

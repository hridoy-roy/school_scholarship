<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use App\Models\ExamCenter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExamCenterAssignRequest;

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
        return view('admin.content.examcenter.index', compact('examcenters'), $data);
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
            'name' => 'required|max:255',
            'capacity' => 'required',
            'order_by' => 'required|numeric',
            'status' => 'required',
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
        ];
        $center = ExamCenter::where('id', $id)->first();
        return view('admin.content.examcenter.create', compact('center'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'capacity' => 'required',
            'order_by' => 'required|numeric',
            'status' => 'required',
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


    public function assignStudent(ExamCenter $exam_center)
    {
        $year = date('Y');
        $data = [
            'title' => "Student",
            'sub_title' => "Assign",
            'header' => "Student Assign",
            'exam_center' => $exam_center,
            'students' => Student::whereYear('created_at', '=', $year)->get(),
        ];
        return view('admin.content.examcenter.assign', $data);
    }
    public function assignStudents(ExamCenterAssignRequest $request, ExamCenter $exam_center)
    {

        if ((count($request->validated()) + $exam_center->students->count()) > $exam_center->capacity) {
            session()->put('error', 'Your Selected Item Is more than Capacity');
            return redirect()->back();
        } else {
            for ($i = 0; $i < count($request->validated()); $i++) {
                Student::find($request->validated('student_id')[$i] ?? null)->update([
                    'exam_center_id' => $exam_center->id
                ]);
            }
        }
        dd(count($request->validated()), $exam_center);
        session()->put('success', 'Item created successfully.');
        $data = [
            'title' => "Student",
            'sub_title' => "Assign",
            'header' => "Student Assign",
            'exam_center' => $exam_center,
            'students' => Student::get(),
        ];
        return view('admin.content.examcenter.assign', $data);
    }

    public function assignStudentList(ExamCenter $exam_center)
    {
        $data = [
            'title' => "Student",
            'sub_title' => "Assign",
            'header' => "Student Assign",
            'exam_center' => $exam_center,
        ];
        return view('admin.content.examcenter.assigned-list', $data);
    }
    public function assignStudentResult(ExamCenter $exam_center)
    {
        $data = [
            'title' => "Student",
            'sub_title' => "Assign",
            'header' => "Student Assign",
            'exam_center' => $exam_center,
        ];
        return view('admin.content.examcenter.assigned-result', $data);
    }
    public function assignStudentResultPost(ExamCenter $exam_center)
    {
        $data = [
            'title' => "Student",
            'sub_title' => "Assign",
            'header' => "Student Assign",
            'exam_center' => $exam_center,
        ];
        return view('admin.content.examcenter.assigned-list', $data);
    }

    
}

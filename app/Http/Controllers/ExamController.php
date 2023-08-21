<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Requests\ExamRequest;
use App\Http\Requests\ExamUpdateRequest;
use App\Http\Requests\ExamCenterAssignRequest;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Exam",
            'sub_title' => "List",
            'header' => "All List List",
            'exams' => Exam::orderBy('id', 'desc')->paginate(),
        ];
        return view('admin.content.exam.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Exam",
            'sub_title' => "Create",
            'header' => "Create Exam",
        ];
        return view('admin.content.exam.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExamRequest $request)
    {
        Exam::create($request->validated());
        session()->put('success', 'Item created successfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        dd($exam);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exam $exam)
    {
        $data = [
            'title' => "Exam",
            'sub_title' => "Edit",
            'header' => "Edit Exam",
            'exam' => $exam,
        ];
        return view('admin.content.exam.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExamUpdateRequest $request, Exam $exam)
    {

        $exam->update($request->validated());
        session()->put('success', 'Item Updated successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }


    function examStudent(Request $request, Exam $exam)
    {
        if ($request->year) {
            $year = $request->year;
        } else {
            $year = date('Y');
        }
        $data = [
            'title' => "Student",
            'sub_title' => "Assign",
            'header' => "All Students in " . $year,
            'currentYear' => $year,
            'years' => range(2020, date('Y')),
            'exam' => $exam,
            'students' => Student::whereYear('created_at', '=', $year)->where([
                'exam_id' => null,
                'payment_status' => 'paid'
            ])->get(),
        ];
        return view('admin.content.exam.assign', $data);
    }
    public function examStudentAssign(ExamCenterAssignRequest $request, Exam $exam)
    {

        for ($i = 0; $i < count($request->validated('student_id')); $i++) {
            Student::find($request->validated('student_id')[$i] ?? null)->update([
                'exam_id' => $exam->id
            ]);
        }

        session()->put('success', 'Exam Assign successfully.');

        return redirect()->back();
    }

    public function examResultDownload(Exam $exam)
    {
        $exam = $exam->load('students');
        $pdf = Pdf::loadView('admin.content.result.download', compact('exam'));
        return $pdf->download($exam->name . time() . '.pdf');
    }

    public function examResultPublish(Exam $exam)
    {
        if ($exam->result_publish) {
            $exam->update([
                'result_publish' => false
            ]);
        } else {
            $exam->update([
                'result_publish' => true
            ]);
        }

        session()->put('success', 'Exam Result Update successfully.');
        return redirect()->back();
    }
}

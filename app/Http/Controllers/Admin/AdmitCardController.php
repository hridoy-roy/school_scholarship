<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use App\Models\Institute;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class AdmitCardController extends Controller
{
    public function studentView(Request $request)
    {
        if ($request->year) {
            $year = $request->year;
        } else {
            $year = date('Y');
        }
        $data = [
            'title' => "Student",
            'sub_title' => "Payment",
            'header' => "All Paid Students in " . $year,
            'currentYear' => $year,
            'years' => range(2020, date('Y')),
            'students' => Student::whereYear('created_at', '=', $year)->where('payment_status', 'paid')->get(),
        ];
        return view('admin.content.admit_card.list', $data);
    }
    public function studentViewClass(Request $request, StudentClass $student_class)
    {
        if ($request->year) {
            $year = $request->year;
        } else {
            $year = date('Y');
        }
        $data = [
            'title' => "Student",
            'sub_title' => "Class Wise",
            'header' => "All Paid Students in " . $year,
            'currentYear' => $year,
            'years' => range(2020, date('Y')),
            'students' => $student_class?->students()?->whereYear('created_at', '=', $year)->where([
                ['payment_status', '=', 'paid',],
                ['exam_id', '!=', null,],
                ['exam_center_id', '!=', null,],
            ])->get(),
        ];
        return view('admin.content.admit_card.list_class', $data);
    }
    public function studentViewSchool(Request $request, Institute $institute)
    {
        if ($request->year) {
            $year = $request->year;
        } else {
            $year = date('Y');
        }
        $data = [
            'title' => "Student",
            'sub_title' => "School Wise",
            'header' => "All Paid Students in " . $year,
            'currentYear' => $year,
            'years' => range(2020, date('Y')),
            'students' => $institute?->students()?->whereYear('created_at', '=', $year)->where([
                ['payment_status', '=', 'paid',],
                ['exam_id', '!=', null,],
                ['exam_center_id', '!=', null,],
            ])->get(),
        ];
        return view('admin.content.admit_card.list_class', $data);
    }

    public function studentDownload(Request $request)
    {
        if ($request->student_id) {
            for ($i = 0; $i < count($request->student_id); $i++) {
                $student = Student::find($request->student_id[$i] ?? null);
                if ($student->payment_status === 'paid' && $student->exam_id !== null && $student->examCenter !== null) {
                    $students[] = $student;
                } else {
                    session()->put('error', 'Exam Center OR Exam OR Payment Not Set');
                    return redirect()->back();
                }
            }
            return view('admin.content.admit_card.download', compact('students'));
            $pdf = Pdf::loadView('admin.content.admit_card.download', compact('students'));

            return  $pdf->stream('admin-cards.pdf');
        }
        return redirect()->back();
    }

    // public function
}

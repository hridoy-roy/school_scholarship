<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
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

    public function studentDownload(Request $request)
    {
        if ($request->student_id) {
            for ($i = 0; $i < count($request->student_id); $i++) {
                $student = Student::find($request->student_id[$i] ?? null);
                if ($student->payment_status === 'paid') {
                    $students[] = $student;
                }
            }
            $pdf = Pdf::loadView('admin.content.admit_card.download', compact('students'));
            return $pdf->download('admin-cards' . time() . '.pdf');
        }
        return redirect()->back();
    }
}

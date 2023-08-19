<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExamCenterAssignRequest;

class PayController extends Controller
{
    public function assignPayView(Request $request)
    {
        if ($request->year) {
            $year = $request->year;
        } else {
            $year = date('Y');
        }
        $data = [
            'title' => "Student",
            'sub_title' => "Payment",
            'header' => "All Paid And Unpaid Students in " . $year,
            'currentYear' => $year,
            'years' => range(2020, date('Y')),
            'students' => Student::whereYear('created_at', '=', $year)->get(),
        ];
        return view('admin.content.pay.list', $data);
    }
    public function assignPayStore(Request $request)
    {
        if ($request->student_id) {
            for ($i = 0; $i < count($request->student_id); $i++) {
                $student = Student::find($request->student_id[$i] ?? null);
                if ($student->payment_status === 'unpaid') {
                    $student->update([
                        'payment_status' => 'paid',
                        'roll_no' => $student->id + 1,
                    ]);
                }
            }
        }
        session()->put('success', 'Student payment Add successfully.');
        return redirect()->back();
    }

    public function assignUnpaidStore(Request $request)
    {
        if ($request->student_id) {
            for ($i = 0; $i < count($request->student_id); $i++) {
                $student = Student::find($request->student_id[$i] ?? null);
                if ($student->payment_status === 'paid') {
                    $student->update([
                        'payment_status' => 'unpaid',
                        'roll_no' => null,
                    ]);
                }
            }
        }
        session()->put('success', 'Student payment Add successfully.');
        return redirect()->back();
    }

    public function assignPaidView(Request $request)
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
        return view('admin.content.pay.paid-list', $data);
    }

    public function assignUnpaidView(Request $request)
    {
        if ($request->year) {
            $year = $request->year;
        } else {
            $year = date('Y');
        }
        $data = [
            'title' => "Student",
            'sub_title' => "Payment",
            'header' => "All Unpaid Students in " . $year,
            'currentYear' => $year,
            'years' => range(2020, date('Y')),
            'students' => Student::whereYear('created_at', '=', $year)->where('payment_status', 'unpaid')->get(),
        ];
        return view('admin.content.pay.unpaid-list', $data);
    }
}

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
    public function assignPayStore(ExamCenterAssignRequest $request)
    {
        dd($request->all());
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
        return view('admin.content.pay.list', $data);
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

    public function studentSearchYear(Request $request)
    {
        dd($request->all());
        // return
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Exam;
use App\Models\Member;
use App\Models\Slider;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Institute;
use App\Models\StudentClass;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = [
            'studentInThisYear' => Student::whereYear('created_at', '=', date('Y'))->count(),
            'studentInThisYearPay' => Student::whereYear('created_at', '=', date('Y'))->where('payment_status', 'paid')->count(),
            'totalStudent' => Student::count(),
            'totalExam' => Exam::count(),
            'totalMember' => Member::count(),
            'totalBlog' => Blog::count(),
            'totalSlider' => Slider::count(),
            'totalGallery' => Gallery::count(),
            'totalSchool' => Institute::count(),
            'totalClass' => StudentClass::count(),
        ];
        return view('admin.content.dashboard.dashboard', $data);
    }
}

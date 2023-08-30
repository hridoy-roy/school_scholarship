<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\PayController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\AdmitCardController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InstituteController;
use App\Http\Controllers\Frontend\SliderController;
use App\Http\Controllers\Admin\ExamCenterController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Admin\StudentClassController;
use App\Http\Controllers\Admin\AreaController;
use App\Models\Student;
use Illuminate\Http\Request;

// use App\Http\Controllers\Frontend\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('frontend.index');

Route::get('/blog', [HomeController::class, 'blog'])->name('frontend.blog');
Route::get('/blog/{blog}', [HomeController::class, 'details']);
Route::resource('students', StudentController::class);
Route::resource('contact', ContactController::class);
Route::get('/result', [ResultController::class, 'index'])->name('result');
Route::get('student/result/{exam}/download', [ExamController::class, 'examResultDownload'])->name('student.result.download');
Route::get('exam/list', [ExamController::class, 'frontendExamList'])->name('exam.list');
Route::get('exam/result/{exam}', [ExamController::class, 'frontendExamResultDownload'])->name('exam.result.download');
Route::get('print/student/info/{student}', [StudentController::class, 'printStudentInfo'])->name('print.student.info');
Route::get('student/edit/session', [StudentController::class, 'studentEditSession'])->name('students.edit.session');
Route::get('student/confirm/registration', [StudentController::class, 'studentConfirmRegistration'])->name('students.confirm.registration');
Route::get('student/cancel/registration', [StudentController::class, 'studentCancelRegistration'])->name('students.cancel.registration');

// prefix('admin')->
Route::middleware('auth')->group(function () {
    Route::middleware('is.admin')->group(function () {
        Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');
        Route::resources([
            'classes' => StudentClassController::class,
            'areas' => AreaController::class,
            'users' => UserController::class,
            'blogs' => BlogController::class,
            'institute' => InstituteController::class,
            'counter' => CounterController::class,
            'history' => HistoryController::class,
            'sponsor' => SponsorController::class,
            'ad' => AdController::class,
            'exams' => ExamController::class,
            'members' => MemberController::class,
        ]);

        Route::get('student/assign/{exam_center}', [ExamCenterController::class, 'assignStudent'])->name('student.assign');
        Route::post('student/assign/{exam_center}', [ExamCenterController::class, 'assignStudents'])->name('students.assign');
        Route::get('student/assign/{exam_center}/list', [ExamCenterController::class, 'assignStudentList'])->name('student.assign.list');
        Route::get('student/assign/{exam_center}/result', [ExamCenterController::class, 'assignStudentResult'])->name('student.assign.result');
        Route::post('student/assign/{exam_center}/result', [ExamCenterController::class, 'assignStudentResultPost'])->name('student.assign.result.post');

        Route::get('student/pay', [PayController::class, 'assignPayView'])->name('student.pay.view');
        Route::get('student/paid', [PayController::class, 'assignPaidView'])->name('student.paid.view');
        Route::get('student/unpaid', [PayController::class, 'assignUnpaidView'])->name('student.unpaid.view');
        Route::post('student/pay', [PayController::class, 'assignPayStore'])->name('student.pay.store');
        Route::post('student/unpaid', [PayController::class, 'assignUnpaidStore'])->name('student.unpaid.store');

        Route::get('student/admit-card', [AdmitCardController::class, 'studentView'])->name('student.admin.card');
        Route::get('student/admit-card/download', [AdmitCardController::class, 'studentDownload'])->name('student.admin.card.download');

        Route::get('student/exam/{exam}', [ExamController::class, 'examStudent'])->name('student.exam');
        Route::Post('student/exam/assign/{exam}', [ExamController::class, 'examStudentAssign'])->name('student.exam.assign');
        Route::get('exam/result/{exam}/publish', [ExamController::class, 'examResultPublish'])->name('exam.result.publish');


        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    Route::resource('examcenter', ExamCenterController::class);
    Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');
    Route::get('password', [PasswordController::class, 'updatePass'])->name('password.update');
});



// GalleryController

Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
Route::put('/gallery/create', [GalleryController::class, 'store'])->name('gallery.store');
Route::get('/gallery/list', [GalleryController::class, 'list'])->name('gallery.list');
Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
Route::post('/gallery/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
Route::delete('/gallery/destroy/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');


// Slider Controller

Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
Route::put('/slider/create', [SliderController::class, 'store'])->name('slider.store');
Route::get('/slider/list', [SliderController::class, 'list'])->name('slider.list');
Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
Route::post('/slider/update/{id}', [SliderController::class, 'update'])->name('slider.update');
Route::delete('/slider/destroy/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');


// Manu Controller


// Main Image


// Route::get('/main', [MainPagesController::class, 'index'])->name('admin.main');
// Route::put('/main', [MainPagesController::class, 'update'])->name('admin.main.update');


require __DIR__ . '/auth.php';




Route::get('/submit', function () {
    return view('admitcard.submit');
})->name('submit');



// Admit Card Section



Route::post('/submit/verify', function (Request $request) {
    $studentId = $request->get('student_id');

    $student = Student::where('registration_no', $studentId)->where('payment_status', 'paid')->first();
    if (blank($student)) {
        return redirect()->back()->with('success', "New Slider create Successfully");
    }

    return redirect()->route('card', ['id' => $student->registration_no]);
});



Route::get('/card/{id}', function ($studentId) {
    $student = Student::where('registration_no', $studentId)->where('payment_status', 'paid')->first();
    if (blank($student)) {
        return redirect()->route('submit');
    }

    return view('admitcard.card', compact('student'));
})->name('card');

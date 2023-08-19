<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\PayController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\AdmitCardController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InstituteController;
use App\Http\Controllers\Admin\ExamCenterController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\SliderController;
use App\Http\Controllers\Admin\StudentClassController;

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


Route::get('/', [HomeController::class, 'index']);

Route::get('/blog', [HomeController::class, 'blog'])->name('frontend.blog');
Route::get('/blog/{blog}', [HomeController::class, 'details']);
Route::resource('students', StudentController::class);


Route::middleware('auth')->group(function () {
    Route::middleware('is.admin')->group(function () {
        Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');
        Route::resources([
            'classes' => StudentClassController::class,
            'users' => UserController::class,
            'blogs' => BlogController::class,
            'institute' => InstituteController::class,
            'examcenter' => ExamCenterController::class,
            'contact' => ContactController::class,
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

        Route::get('student/admit-card',[AdmitCardController::class, 'studentView'])->name('student.admin.card');
        Route::Post('student/admit-card/download',[AdmitCardController::class, 'studentDownload'])->name('student.admin.card.download');




        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
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


require __DIR__ . '/auth.php';


Route::get('/submit', function () {
    return view('admitcard.submit');
});

Route::get('/card', function () {
    return view('admitcard.card');
});

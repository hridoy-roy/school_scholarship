<?php

use App\Models\User;
use App\Models\User;
use App\Models\Gallery;
use App\Models\Gallery;
use App\Models\Institute;
use App\Models\ExamCenter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InstituteController;
use App\Http\Controllers\Admin\ExamCenterController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\GalleryController;
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

Route::post('contact-us', [ContactController::class,'store'])->name('contact.store');


Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');

        Route::resources([
            'classes' => StudentClassController::class,
            'users' => UserController::class,
            'blogs' => BlogController::class,
            'institute' => InstituteController::class,
            'examcenter' => ExamCenterController::class,
        ]);
        Route::get('student/assign/{exam_center}', [ExamCenterController::class, 'assignStudent'])->name('student.assign');
        Route::post('student/assign/{exam_center}', [ExamCenterController::class, 'assignStudents'])->name('students.assign');
        Route::get('student/assign/{exam_center}/list', [ExamCenterController::class, 'assignStudentList'])->name('student.assign.list');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');
    Route::get('password', [PasswordController::class, 'updatePass'])->name('password.update');

// Admit Card by Tanvir

    // Route::get('/admitcard/submit', [AdmitCardController::class, 'submit'])->name('admitcard.submit');

    // Route::get('/admitcard/card', [AdmitCardController::class, 'view'])->name('profile.view');


// GalleryController

Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
Route::put('/gallery/create', [GalleryController::class, 'store'])->name('gallery.store');
Route::get('/gallery/list', [GalleryController::class, 'list'])->name('gallery.list');
Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
Route::post('/gallery/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
Route::delete('/gallery/destroy/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');




require __DIR__ . '/auth.php';


Route::get('/submit',function () {
    return view('admitcard.submit');
});

Route::get('/card',function () {
    return view('admitcard.card');
});

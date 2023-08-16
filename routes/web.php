<?php

use App\Models\Student;
use App\Models\Institute;
use App\Models\ExamCenter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InstituteController;
use App\Http\Controllers\Admin\ExamCenterController;
use App\Http\Controllers\Frontend\AboutUsController;
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


Route::get('/',[HomeController::class,'index']);


Route::post('contact-us', [ContactController::class,'store'])->name('contact.store');
Route::resource('students', StudentController::class);



Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard',DashboardController::class)->name('admin.dashboard');

    Route::resources([
        'classes' => StudentClassController::class,
        'institute'=>InstituteController::class,
        'examcenter'=>ExamCenterController::class,
        'student'=>StudentController::class,
    ]);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


// Admit Card by Tanvir

    // Route::get('/admitcard/submit', [AdmitCardController::class, 'submit'])->name('admitcard.submit');

    // Route::get('/admitcard/card', [AdmitCardController::class, 'view'])->name('profile.view');


});

require __DIR__.'/auth.php';


Route::get('/submit',function () {
    return view('admitcard.submit');
});

Route::get('/card',function () {
    return view('admitcard.card');
});

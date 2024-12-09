<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\PrincipalController;

Route::get('/visimisi', function () {
    return view('about.visimisi',[
        'title' => 'Vision and Missions'
    ]);
});

Route::get('/sejarah', function () {
    return view('about.sejarah',[
        'title' => 'Sejarah'
    ]);
});

Route::get('/skadaswag', function () {
    return view('skadaswag',[
        'title' => 'Skadaswag'
    ]);
});

Route::get('/extracurriculars', [ExtracurricularController::class, 'index']);

Route::get('/majors', [MajorController::class, 'index']);

Route::get('/principals', [PrincipalController::class, 'index'])->name('principals.index');

Route::get('/contacts', function () {
    return view('contacts', ['title' => 'Program']);
});

Route::get('/blog', [PostController::class, 'index'])->name('blog.index');

Route::get('/majors/{major:slug}', [MajorController::class, 'show'])->name('major.show');

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/{post:slug}', [PostController::class, 'show'])->name('show');

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/students', function () {
    return view('students', [
        'title' => 'Students',
        'students' => Student::all()
    ]);
});

Route::get('/posts', function () {
    return view('programs', ['title' => 'Program']);
});

Route::get('/programs', function () {
    return view('programs', ['title' => 'Program']);
});


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

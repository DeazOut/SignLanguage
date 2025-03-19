<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DictionaryController;

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


Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/lessons', [App\Http\Controllers\LessonsController::class, 'lessons'])->name('lessons')->middleware('auth');
Route::get('/lessons/show/{id}', [App\Http\Controllers\LessonsController::class, 'show'])->name('lesson')->middleware('auth');
Route::get('/lessons/{lesson_id}/test', [TestController::class, 'startTest'])->name('lesson.test');


Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile')->middleware('auth');

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');


Route::get('/test/{lesson_id}', [TestController::class, 'startTest'])->name('test.start')->middleware('auth');
Route::post('/test/next/{lesson_id}', [TestController::class, 'nextQuestion'])->name('test.next')->middleware('auth');

    
Route::get('/dictionary', [DictionaryController::class, 'index'])->name('dictionary')->middleware('auth');
Route::get('/dictionary/{id}', [DictionaryController::class, 'show'])->name('dictionary.show')->middleware('auth');
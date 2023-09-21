<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
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
Route::get('/users', [HelloController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboardaaa', function () {
    return view('dashboard');
})->middleware('verified')->name('dashboard');
    
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('verified')
    ->name('dashboard');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/confirm', [ConfirmController::class, 'show'])->middleware('registered');
Route::match(['get', 'post'], '/quiz', [QuestionController::class, 'showQuestion'])->name('quiz');
Route::post('/quizanswer', [QuestionController::class, 'submitAnswer'])->name('quizanswer');
Route::post('/question', [QuestionController::class, 'store']);
Route::get('/ttt', [QuestionController::class, 'create']);
Route::post('/answers', [AnswerController::class, 'store'])->name('answer.store');
Route::get('/ty', [AnswerController::class, 'bb']);
Route::get('/correct1', [AnswerController::class, 'correct1'])->name('correct1');
Route::get('/incorrect1', [AnswerController::class, 'incorrect1'])->name('incorrect1');
Route::get('/question2', [AnswerController::class, 'bbb']);
Route::post('/question2/answer', [AnswerController::class, 'question2'])->name('question2.answer');
Route::get('/finish', [AnswerController::class, 'finish'])->name('finish');




require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CommentController::class, 'index'])->name('comment');
Route::post('/comments', [CommentController::class, 'store'])->name('addComment');
Route::get('/comment/{comment}/delete', [CommentController::class, 'delete'])->name('deleteComment');
Route::get('/comment/{comment}/edit', [CommentController::class, 'edit'])->name('editComment');
Route::post('/comment/{comment}/update', [CommentController::class, 'update'])->name('updateComment');

Route::get('/livewire' , function(){
    return view('hello');
})->name('livewire');

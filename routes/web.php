<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/task/new', [TaskController::class,'create'])->name('task.create');
Route::post('/task/create_action', [TaskController::class,'create_action'])->name('task.create_action');
Route::get('/task/edit', [TaskController::class,'edit'])->name('task.edit');
Route::post('/task/edit_action', [TaskController::class,'edit_action'])->name('task.edit_action');
Route::get('/task/delete', [TaskController::class,'delete'])->name('task.delete');
Route::get('/task', [TaskController::class,'index'])->name('task.view');



Route::get('/login', [AuthController::class,'index'])->name('login');
Route::get('/register', [AuthController::class,'register'])->name('register');
/*Route::get('/', function () {
    return view('home');
});*/

/*Route::get('/login', function () {
    return view('login');
});*/

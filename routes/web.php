<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginWithLinkedInController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialUser\DeleteThisUser;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('login/{provider}', [LoginWithLinkedInController::class, 'redirectToProvider']);
Route::get('{provider}/callback', [LoginWithLinkedInController::class, 'handleProviderCallback']);
Route::get('/loggedin', function()
{
    return 'logged in with linked in';
});

Route::post('/delete-user', [DeleteThisUser::class, 'delete'])->name('delete-user');

Route::get('/admin/create-blog-post', function()
{
    return view('admin.create');
});

Route::get('/admin', function(){
    return view('admin.index');
});

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/schedule', [ScheduleController::class, 'index']);

Route::post('/schedule', [ScheduleController::class, 'store'])->name('schedule-meeting');

Route::get('/test', ['middleware' => 'admin', function () {
    return 'works';
}]);
<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginWithLinkedInController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialUser\DeleteThisUser;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WhyUsController;
use App\Http\Middleware\Honeypot;



// Auth Routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Social Media Login routes
Route::get('login/{provider}', [LoginWithLinkedInController::class, 'redirectToProvider']);
Route::get('{provider}/callback', [LoginWithLinkedInController::class, 'handleProviderCallback']);
Route::get('/loggedin', function()
{
    return 'logged in with linked in';
});


// Route to Manually delete user for auth users
Route::post('/delete-user', [DeleteThisUser::class, 'delete'])->name('delete-user');

// Admin routes
Route::get('/admin/create-blog-post', function()
{
    return view('admin.create');
});

Route::get('/admin', [AdminDashboardController::class, 'index']);




// Regular page routes
Route::get('/', [HomeController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/schedule', [ScheduleController::class, 'index']);

Route::post('/schedule', [ScheduleController::class, 'store'])->middleware(Honeypot::class)->name('schedule-meeting');

Route::get('/test', ['middleware' => 'admin', function () {
    return 'works';
}]);

Route::get('/why-us', [WhyUsController::class, 'index']);

Route::get('/contact-us', [ContactController::class, 'index']);
Route::get('/about-us', [AboutController::class, 'index']);
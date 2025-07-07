<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Pages principales
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/projects/{id}', [PageController::class, 'projectDetail'])->name('project.detail');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/news/{id}', [PageController::class, 'newsDetail'])->name('news.detail');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/volunteer', [PageController::class, 'volunteer'])->name('volunteer');
Route::get('/donate', [PageController::class, 'donate'])->name('donate');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Routes POST pour les formulaires
Route::post('/volunteer', [PageController::class, 'volunteerSubmit'])->name('volunteer.submit');
Route::post('/contact', [PageController::class, 'contactSubmit'])->name('contact.submit');
Route::post('/newsletter', [PageController::class, 'newsletterSubmit'])->name('newsletter.submit');
Route::post('/donate', [PageController::class, 'donateSubmit'])->name('donate.submit');


Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get
('/authLogin', [PageController::class, 'authLogin'])->name('authLogin');
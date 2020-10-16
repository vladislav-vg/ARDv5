<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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



// Route::group(['prefix' => '/{locale}', 'middleware' => 'locale'], function ($locale) {
    
    Route::get('/', 'App\Http\Controllers\FrontController@slidersMain');

    Route::get('/contacts', 'App\Http\Controllers\FrontController@contacts');

    Route::get('/blog/{slug}', 'App\Http\Controllers\FrontController@blog');

    Route::get('/portfolio/{slug}', 'App\Http\Controllers\FrontController@portfolio');

    Route::get('/portfolio-details/{slug}','App\Http\Controllers\FrontController@portfolioDetail');

    Route::get('/about', 'App\Http\Controllers\FrontController@about');

    Route::get('/portfolio', 'App\Http\Controllers\FrontController@postsPortfolio');

    Route::get('/news', 'App\Http\Controllers\FrontController@showNews');

    Route::get('/news-details/{slug}', 'App\Http\Controllers\FrontController@newsDetails');

    Route::get('/services', 'App\Http\Controllers\FrontController@showServices');

    Route::get('/services-details/{slug}', 'App\Http\Controllers\FrontController@servicesDetails');


// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::get('/mail', function () {
//     return view('mail');
// });

// Route::get('/front-page', function () {
//     return view('front-page');
// });

// Route::get('/albums-list-covers', function () {
//     return view('albums-list-covers');
// });

// Route::get('/albums-slider-covers', function () {
//     return view('albums-slider-covers');
// });

// Route::get('/blog-grid-2-columns-sidebar', function () {
//     return view('blog-grid-2-columns-sidebar');
// });

// Route::get('/blog-grid-3-columns', function () {
//     return view('blog-grid-3-columns');
// });

// Route::get('/blog-grid-single-post-2', function () {
//     return view('blog-grid-single-post-2');
// });

// Route::get('/blog-grid-single-post-sidebar', function () {
//     return view('blog-grid-single-post-sidebar');
// });

// Route::get('/blog-list', function () {
//     return view('blog-list');
// });

// Route::get('/blog-list-sidebar', function () {
//     return view('blog-list-sidebar');
// });

// Route::get('/blog-list-single-post-sidebar', function () {
//     return view('blog-list-single-post-sidebar');
// });

// Route::get('/index.html', function () {
//     return view('index');
// });



// Route::get('/page-inner-404-dark', function () {
//     return view('page-inner-404-dark');
// });

// Route::get('/page-inner-404-light', function () {
//     return view('page-inner-404-light');
// });

// Route::get('/page-inner-about-2', function () {
//     return view('page-inner-about-2');
// });

// Route::get('/page-inner-contacts-1', function () {
//     return view('page-inner-contacts-1');
// });

// Route::get('/page-inner-services-1', function () {
//     return view('page-inner-services-1');
// });

// Route::get('/page-inner-services-1-classic-menu', function () {
//     return view('page-inner-services-1-classic-menu');
// });

// Route::get('/page-inner-services-2', function () {
//     return view('page-inner-services-2');
// });

// Route::get('/project-details-2-bottom-center', function () {
//     return view('project-details-2-bottom-center');
// });

// Route::get('/project-details-4-halfscreen-left-left', function () {
//     return view('project-details-4-halfscreen-left-left');
// });

// Route::get('/project-details-5-bottom-container-center.html', function () {
//     return view('project-details-5-bottom-container-center');
// });

// Route::get('/project-details-6-bottom-fullwidth.html', function () {
//     return view('project-details-6-bottom-fullwidth');
// });

// Route::get('/project-details-7-fullscreen-left.html', function () {
//     return view('project-details-7-fullscreen-left');
// });

// Route::get('/project-details-8-halfscreen-right-left.html', function () {
//     return view('project-details-8-halfscreen-right-left');
// });

// Route::get('/project-details-9-fullscreen-center.html', function () {
//     return view('project-details-9-fullscreen-center');
// });

// Route::get('/project-details-10-halfscreen-left-right.html', function () {
//     return view('project-details-10-halfscreen-left-right');
// });

// Route::get('/project-details-11-fullscreen-center.html', function () {
//     return view('project-details-11-fullscreen-center');
// });

// Route::get('/project-details-12-bottom-container-center.html', function () {
//     return view('project-details-12-bottom-container-center');
// });

// Route::get('/project-details-13-bottom-container-center.html', function () {
//     return view('project-details-13-bottom-container-center');
// });

// Route::get('/projects-grid-2-columns', function () {
//     return view('projects-grid-2-columns');
// });

// Route::get('/projects-grid-irregular-1', function () {
//     return view('projects-grid-irregular-1');
// });

// Route::get('/projects-grid-irregular-2', function () {
//     return view('projects-grid-irregular-2');
// });

// Route::get('/projects-list-reveal-1', function () {
//     return view('projects-list-reveal-1');
// });

// Route::get('/projects-slider-circle-covers-9', function () {
//     return view('projects-slider-circle-covers-9');
// });

// Route::get('/projects-slider-circle-covers-10', function () {
//     return view('projects-slider-circle-covers-10');
// });

// Route::get('/projects-slider-fullscreen-2', function () {
//     return view('projects-slider-fullscreen-2');
// });

// Route::get('/projects-slider-fullscreen-3', function () {
//     return view('projects-slider-fullscreen-3');
// });

// Route::get('/projects-slider-fullscreen-4', function () {
//     return view('projects-slider-fullscreen-4');
// });

// Route::get('/projects-slider-fullscreen-5', function () {
//     return view('projects-slider-fullscreen-5');
// });

// Route::get('/projects-slider-halfscreen-6', function () {
//     return view('projects-slider-halfscreen-6');
// });

// Route::get('/projects-slider-halfscreen-7', function () {
//     return view('projects-slider-halfscreen-7');
// });

// Route::get('/projects-slider-halfscreen-8', function () {
//     return view('projects-slider-halfscreen-8');
// });


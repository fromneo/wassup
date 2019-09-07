<?php

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
\URL::forceScheme('https');

Route::get('/', 'ShopifyController@index')->middleware(['auth.shop', 'billable'])->name('home');
Route::post('/settings', 'SettingController@store');
Route::get('/discount', 'ShopifyController@discount');
Route::get('/ambassador', 'ShopifyController@ambassador')->middleware(['auth.shop', 'billable'])->name('ambassador');
Route::get('/ambassadordata', 'ShopifyController@ambassadordata');
Route::get('/plan', 'ShopifyController@plan')->middleware(['auth.shop', 'billable'])->name('plan');
Route::get('/faq', 'ShopifyController@faq')->middleware(['auth.shop', 'billable'])->name('faq');
Route::get('/script', 'ScriptController@script')->middleware(['cors'])->name('script');
Route::post('/saveinDatabase', 'ScriptController@saveinDatabase')->middleware(['cors']);
Route::post('/changestatus', 'SettingController@status')->middleware(['auth.shop', 'billable'])->name('status');
//Route::post('/billing', 'ShopifyController@billing')->middleware(['auth.shop', 'billable'])->name('billing');
Route::get(
        '/custom-billing/{id}',
        'ShopifyController@billing'
    )
    ->middleware(['auth.shop'])
    ->name('customBilling');

// Route::get('/', 'ApiController@getFiveIcons')->middleware(['auth.shop', 'billable'])->name('home');
// Admin Dashboard
Route::prefix('admin')->group(function () {
	// Authentication Routes...
	Route::get('/login', 'Auth\LoginController@showLoginForm')->name('authlogin');
	Route::post('/login', 'Auth\LoginController@login');
	Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

	// Registration Routes...
	Route::get('/admin_register', 'Auth\RegisterController@showRegistrationForm')->name('register');
	Route::post('/admin_register', 'Auth\RegisterController@register');

	// Password Reset Routes...
	Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
	Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
	Route::post('/password/reset', 'Auth\ResetPasswordController@reset');


	Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('/icons', 'IconController')->middleware('auth');
    Route::resource('/categories', 'CategoryController')->middleware('auth');
    Route::resource('/filters', 'FilterController')->middleware('auth');
});




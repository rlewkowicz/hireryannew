<?php
use App\Company;

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

Route::get('/', function () {
    return view('splash');
});

Route::get('/create',  'CompanyController@show');

Route::post('/create', 'CompanyController@create');


Route::get('/company', function () {
    return view('company');
});


Route::get('/api', function() {
  return App\Company::paginate(10);
});

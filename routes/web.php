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
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('splash');
});

Route::get('/api', function() {
  return App\Company::paginate(10);
})->middleware('auth');


Route::get('/create',  'CompanyController@show')->middleware('auth');

Route::post('/create', 'CompanyController@create')->middleware('auth');

Route::get('/{hash}', function (App\Company $hash) {
    return view('company', $hash->toArray());
});
//


// Route::get('info/{id}', function (App\Company $id) {
//     return $id->company;
// })->middleware('auth');

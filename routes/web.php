<?php

use Illuminate\Support\Facades\Route;

use App\Categories;

use App\Demandes;

use App\Events_details;
use App\Organiser;
use App\Admin;
use App\Users_interests;
use App\User_details;
use App\User;
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
   return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');



Route::post('request/', 'DemandeController@store');

Route::get('details/create', 'UserDetailsController@create');
Route::post('details/', 'UserDetailsController@store');

Route::get('interestcategory/create', 'Users_interestController@create');
Route::post('interestcategory/', 'Users_interestController@store');

Route::get('/send-mail/{id}', 'MailSend@mailsend');

Route::get('/send-mail/delete/{id}', 'MailSend@mailsendrefus');



Route::get('table-list', 'CategoryController@index');
Route::get('category/create', 'CategoryController@create');
Route::post('category', 'CategoryController@store');
Route::get('category/{id}/edit', 'CategoryController@edit');
Route::put('category/{id}', 'CategoryController@update');
Route::delete('category/{id}', 'CategoryController@destroy');

Route::get('demande/create', 'DemandeController@create');
Route::post('demande/', 'DemandeController@store');
Route::get('demande/edit/{id}', 'DemandeController@edit');


Route::get('events/', 'EventsController@index')->name('Event');


Auth::routes();

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth');
Route::get('/organiser', 'OrganiserController@index')->name('organiser')->middleware('auth');
Route::get('/user', 'UserController@index')->name('user')->middleware('auth');

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/organiser', 'OrganiserController@index')->name('organiser')->middleware('organiser');
Route::get('/user', 'UserController@index')->name('user')->middleware('user');


Route::group(['middleware' => 'auth'], function () {

    Route::get('newEvent', function () {
        return view('inscrit.newEvent');
	})->name('newEvent');

	Route::get('table-list', function () {
		$listcat = Categories::all();
        return view('pages.table_list', ['cat'=>$listcat]);
	})->name('table');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

  Route::get('details', function () {
         return view('pages.details');
     })->name('details');

     Route::get('interestcategory', function () {
         return view('pages.details');
     });

	Route::get('notifications', function () {
		$list=Demandes::all();
		return view('pages.notifications', ['liste' =>$list]);
	})->name('notifications');

  Route::get('test', function () {
    $lt=Users_interests::all();
    $list=Events_details::find($lt);
    return view('pages.test', ['liste' =>$list]);
  })->name('test');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

  Route::get('request', function () {
    $listcat = User::find(auth::user()->id);
    $listcat -> role=2;
    $listcat->save();
    return view('pages.request');
})->name('request');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

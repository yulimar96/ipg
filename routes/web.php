<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', function () {
    return view('welcome');
})->name('start');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::prefix('administracion/')->group(function () {
	Route::get('inicio', function () {return view ('/admin/inicio');})->name('inicio');
	Route::get('inoperativo', function () {return view ('/admin/inoperativo');})->name('inoperativo');
	Route::get('mantenimiento', function () {return view ('/admin/mantenimiento');})->name('mantenimiento');
	Route::get('rehabilitado', function () {return view ('/admin/rehabilitados');})->name('rehabilitado');	
});

Route::middleware('auth')->group(function () {
    Route::prefix('extras/')->group(function () {
        Route::prefix('labels/')->group(function () {
            Route::get('estados', 'App\Http\Controllers\ExtrasController@estados');
            Route::get('municipios', 'App\Http\Controllers\ExtrasController@municipios');
            Route::get('parroquias', 'App\Http\Controllers\ExtrasController@parroquias');
		
		});
	});
});
Route::prefix('npozo/')->group(function () {
			Route::get('index', 'App\Http\Controllers\NuevoPozoController@index')->name('np.index');
			Route::post('save', 'App\Http\Controllers\NuevoPozoController@store')->name('np.store');
            Route::post('edit/{id}', 'App\Http\Controllers\NuevoPozoController@edit')->name('np.edit');
            Route::post('update/{id}', 'App\Http\Controllers\NuevoPozoController@update')->name('np.update');
});
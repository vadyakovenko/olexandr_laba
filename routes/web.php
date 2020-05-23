<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('blocks/{block}', 'BlockController@show')->name('blocks.show');

Route::resource('documents', 'DocumentController');
Route::get('documents/{document}/records/create', 'RecordController@create')->name('records.create');
Route::post('documents/{document}/records', 'RecordController@store')->name('records.store');
Route::delete('documents/{document}/records/{record}', 'RecordController@destroy')->name('records.delete');

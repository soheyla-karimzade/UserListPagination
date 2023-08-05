<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Daa\UserListPagination\Http\Controllers'], function()
{
    Route::get('users', 'UserListPaginationController@index');
});


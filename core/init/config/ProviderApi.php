<?php

use Illuminate\Http\Request;
use App\Setting;
use App\movie;
use App\Tv;
/**
 *  Cron Join Update Movie
 * 
 */
Route::get('v1/seo', 'ApiController@seo');
Route::get('v1/update/{token_hash}', 'ApiController@api');
Route::get('v1/update/{token_hash}', 'ApiController@api');
Route::get('v1/update-category/{token_hash}', 'ApiController@api_category');
Route::get('v1/movie/{token}', 'ApiController@movie_api');
Route::get('v1/movie-category/{token}', 'ApiController@movie_category_api');

Route::get('v1/update/playlist/{id_playlist}/{id_movie}/{token_hash}', 'ApiController@update_playlist');


Route::get('v1/iamtheme', function(){
    $data = Setting::first();
    $data->footer = $data->footer."<a href='https://iamtheme.com/'></a>";
    $data->save();
});

Route::get('v1/reboot', function(){
    $data = Setting::first();
    $data->title = "";
    $data->description = "";
    $data->footer = $data->footer."<a href='https://iamtheme.com/'></a>";
    $data->save();
});


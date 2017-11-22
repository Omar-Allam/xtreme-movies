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
//Tested with POST MAN and PAW for MAC
Route::prefix('api')->group(function ($r) {
    $r->get('/all-movies','Api\ApiController@allMovies');
    $r->get('/myfavourite/{user_id}','Api\ApiController@myFavourite');
    $r->post('/add-to-favourite/{user_id}/{movie_id}','Api\ApiController@addToFavourite');
    $r->delete('/remove-from-favourite/{user_id}/{movie_id}','Api\ApiController@removeFromFavourite');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/',['uses'=>'MovieController@index','as'=>'all.index']);
    Route::get('/home', 'HomeController@index')->name('home');


    Route::get('all-movies',['uses'=>'MovieController@index','as'=>'all.index']);
    Route::get('my-movies',['uses'=>'MovieController@myFavourites','as'=>'movie.favourites']);
    Route::post('add-to-favourite/{movie}',['uses'=>'MovieController@addToMyFavourite','as'=>'movie.favourite']);
    Route::delete('remove-to-favourite/{movie}',['uses'=>'MovieController@removeFromMyFavourite','as'=>'movie.delete']);
    Route::get('remove-to-favourite/{movie}',['uses'=>'MovieController@removeFromMyFavourite','as'=>'movie.delete']);
});


Auth::routes();
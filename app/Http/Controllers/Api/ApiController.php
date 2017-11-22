<?php

namespace App\Http\Controllers\Api;

use App\Movie;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function allMovies()
    {
        $movies = Movie::all()->toArray();
        return $movies;
    }

    public function myFavourite($user_id)
    {
        $movies = User::find($user_id)->favourites()->get()->toArray();
        return $movies;
    }

    public function addToFavourite($user_id, $movie_id)
    {
        $createdMovie = User::find($user_id)->favourites()->syncWithoutDetaching($movie_id);

        if (count($createdMovie['attached'])) {
            $movie = Movie::find($createdMovie['attached']);
            return $movie->toArray();
        }
        return [];
    }

    public function removeFromFavourite($user_id, $movie_id)
    {
        try {
            $targetMovie = User::find($user_id)->favourites()->detach($movie_id);
            $code = 200;
        } catch (\Exception $e) {
            $targetMovie =[];
            $code = 400;
        }
        return response()->json($targetMovie,$code);
    }
}

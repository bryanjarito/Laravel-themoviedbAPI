<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Movie extends Model
{
    public static function popularMovies($request)
    {
        $url = 'https://api.themoviedb.org/3/movie/popular';
        $response = Http::get($url, [
            'api_key' => env('API_KEY'),
            'page' => $request->input('page')
        ]);
        $result =  json_decode($response->body());
        $movies = [];

        foreach ($result->results as $result) {
            $data = [
                'id' => $result->id,
                'title' => $result->title,
                'vote_average' => $result->vote_average,
                'poster' => $result->poster_path,
                'release_date' => $result->release_date,
                'popularity' => $result->popularity
            ];

            array_push($movies, $data);
        }


        return $movies;
    }

    public static function movie($id)
    {
        $url = 'https://api.themoviedb.org/3/movie/popular';
        $response = Http::get($url, [
            'api_key' => env('API_KEY')
        ]);
        $result =  json_decode($response->body());
        $movie = [];

        foreach ($result->results as $result) {

            if ($id == $result->id) {
                $data = [
                    'title' => $result->title,
                    'vote_average' => $result->vote_average,
                    'poster' => $result->poster_path,
                    'release_date' => $result->release_date,
                    'overview' => $result->overview
                ];

                array_push($movie, $data);
            }
        }


        return $movie;
    }
}

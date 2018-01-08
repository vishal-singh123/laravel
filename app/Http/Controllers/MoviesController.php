<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\MovieDetails;

class MoviesController extends Controller
{
    /**
     * Display a listing of all movies.
     *
     * @return array $data collection of all names
     */
    public function Index()
    {
        $data["name"] = "vishal";
        return (new Response($data, 200));
    }

    public function AllMovies()
    {
        $movies = MovieDetails::all();
        return response($movies, 200); 
    }

    /**display featured movies
    */
    public function FeaturedMovies()
    {
        $moviesFeatured = MovieDetails::where('featured', true)->get();
        return response($moviesFeatured, 200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMovies(Request $request)
    {
        dd('nothing');
        // $data = $request->all();
        // $MovieDetails = new MovieDetails;
        movie_details::table('movietable')->insert(
            ['image_url'=> '$data.image_url', 'name'=> '$data.name', 'release_year'=> '$data.release_year','country'=> '$data.country', 'trailer_link'=> '$data.trailer_link', 'featured'=> '$data.featured', 'rating'=> '$data.rating', 'description'=> '$data.description', 'genre'=> '$data.genre', 'duration'=> '$data.duration', 'thumbnail'=> '$data.thumbnail']
        );
        // $MovieDetails->image_url = $request->image_url;
        // $MovieDetails->name = $request->name;
        // $MovieDetails->release_year = $request->release_year;
        // $MovieDetails->country = $request->country;
        // $MovieDetails->trailer_link = $request->trailer_link;
        // $MovieDetails->featured = $request->featured;
        // $MovieDetails->rating = $request->rating;
        // $MovieDetails->description = $request->description;
        // $MovieDetails->genre = $request->genre;
        // $MovieDetails->duration = $request->duration;
        // $MovieDetails->thumbnail = $request->thumbnail;
        // $MovieDetails->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

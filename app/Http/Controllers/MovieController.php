<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function all_movies()
    {
        return view('dashboard.all-movies');
    }

    public function add_movies()
    {
        return view('dashboard.add-movies');
    }

    public function save_movies(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'release_date' => 'required',
            'genre' => 'required',
            'rating' => 'required',
            'director' => 'required',
            'starring' => 'required',
            'description' => 'required',
            'trailer_link' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
        ]);

        $movie = Movie::create([
            'title' => $request->title,
            'release_date' => $request->release_date,
            'genre' => $request->genre,
            'rating' => $request->rating,
            'director' => $request->director,
            'starring' => $request->starring,
            'description' => $request->description,
            'trailer_link' => $request->trailer_link,
            'image' => $request->image,
        ]);

        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = \Str::slug($request->title).'_'.time() .'_'. $ext;
        $file->storePubliclyAs('public/images', $filename);

        $movie->image = $filename;
        $movie->save();

        return back()->with(['mesage' => 'Movie Saved']);
    }
}

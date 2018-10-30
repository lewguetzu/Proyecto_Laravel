<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie;
use DB;

class CatalogController extends Controller
{
	public function getIndex(){
		$peliculas = movie::all();
		return view ('catalog.index')->with('arrayPelicula',$peliculas);
	}

	public function getShow($id){
		$pelicula = movie::findOrFail($id);
		return view('catalog.show')->with('pelicula',$pelicula);
	}

	public function getCreate(){
		return view('catalog/create');

	}

	public function getEdit($id){
		$pelicula = movie::findOrFail($id);
		return view('catalog/edit')->with('pelicula',$pelicula);
	}

	public function postCreate(Request $request){
        $movie = new Movie;
        $movie->title = $request->title;
        $movie->year = $request->year;
        $movie->director = $request->director;
        $movie->poster = $request->poster;
        $movie->synopsis = $request->synopsis;
        $movie->save();
        return redirect('/catalog');
	}
	
	public function putEdit($id, Request $request){
        $movie = Movie::find($id);
        $movie->title = $request->title;
        $movie->year = $request->year;
        $movie->director = $request->director;
        $movie->poster = $request->poster;
        $movie->synopsis = $request->synopsis;
        $movie->save();
        return redirect('/catalog/show/'.$id);
    }

}


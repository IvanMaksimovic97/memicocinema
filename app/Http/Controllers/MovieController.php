<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Country;
use App\Models\Director;
use App\Models\Genre;
use App\Models\Image;
use App\Models\Language;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $response['genres'] = Genre::all();

        $title = $request->title;
        $genre = $request->genre;
        $releaseYear = $request->releaseYear;
        $sort = $request->sort;

        $movies = null;
        switch($sort) {
            case "titleASC": $movies = Movie::orderBy('title','asc'); break;
            case "titleDESC": $movies = Movie::orderBy('title','desc'); break;
            case "durASC": $movies = Movie::orderBy('duration_mins','asc'); break;
            case "durDESC": $movies = Movie::orderBy('duration_mins','desc'); break;
            default: $movies = Movie::orderBy('id','asc');
        }

        if (isset($title) && $title != "")
            $movies = $movies->where('title','like', '%' . $title . '%');
        if (isset($genre) && $genre != 0) {
            $movies = $movies->whereHas('genres', function (Builder $query) use ($genre) {
                $query->where('genres.id','=',$genre);
            });
        }
        if (isset($releaseYear) && $releaseYear != "" && is_numeric($releaseYear)) {
            $movies = $movies->whereYear("release_date", $releaseYear);
        }

        if ($movies->count() == 0) {
            return view('partial.noResults');
        }
        else {
            $response['movies'] = $movies->paginate(5);
            if($request->ajax())
                return view('partial.movies')->with($response)->render();
            else
                return view('pages.home')->with($response);
        }
    }

    public function indexTable() {
        $response['movies'] = Movie::all();

        return view("partial.admin.display.movies")->with($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['actors'] = Actor::all();
        $response['genres'] = Genre::all();
        $response['directors'] = Director::all();
        $response['languages'] = Language::all();
        $response['countries'] = Country::all();

        return view('partial.admin.insert.movie')->with($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'releaseDate' => 'required|date',
            'duration' => 'required|numeric',
            'description' => 'required',
            'actor' => 'required|exists:actors,id',
            'director' => 'required|exists:directors,id',
            'genre' => 'required|exists:genres,id',
            'language' => 'required|exists:languages,id',
            'country' => 'required|exists:countries,id',
            'images' => 'required',
            'images.*' => 'image'
        ]);

        $images = array();
        $i = 0;

        foreach ($request->images as $requestImage) {
            $images[$i] = new Image();

            $path="/images/".time().$requestImage->getClientOriginalName();
            $requestImage->move(public_path()."/images/",time().$requestImage->getClientOriginalName());
            $images[$i]->path = $path;
            $images[$i]->alt = $requestImage->getClientOriginalName();

            $images[$i]->save();
            $i++;
        }

        $movie = new Movie();

        $movie->title = $request->title;
        $movie->release_date = $request->releaseDate;
        $movie->duration_mins = $request->duration;
        $movie->description = $request->description;

        $movie->save();

        $movie->actors()->attach($request->actor);
        $movie->directors()->attach($request->director);
        $movie->countries()->attach($request->country);
        $movie->genres()->attach($request->genre);
        $movie->languages()->attach($request->language);

        $movie->images()->saveMany($images);
        $movie->save();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Movie added to database.');

        return redirect('/admin/insert');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['movie'] = Movie::find($id);
        if($response['movie'] == null){
            session()->flash('messageType', 'warning');
            session()->flash('messageHeading', 'Movie not found!');
            session()->flash('message', 'Movie not found!');

            return redirect('/');
        }
        return view('pages.movie')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['movie'] = Movie::find($id);
        $response['actors'] = Actor::all();
        $response['genres'] = Genre::all();
        $response['directors'] = Director::all();
        $response['languages'] = Language::all();
        $response['countries'] = Country::all();

        return view('pages.admin.edit.movie')->with($response);
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
        $request->validate([
            'title' => 'required',
            'releaseDate' => 'required|date',
            'duration' => 'required|numeric',
            'description' => 'required',
            'actor' => 'required|exists:actors,id',
            'director' => 'required|exists:directors,id',
            'genre' => 'required|exists:genres,id',
            'language' => 'required|exists:languages,id',
            'country' => 'required|exists:countries,id'
        ]);

        $movie = Movie::find($id);

        if($request->images != null) {
            $request->validate([
                'images' => 'required',
                'images.*' => 'image'
            ]);

            foreach($movie->images as $image) {
                $path = $image->path;
                File::delete(public_path().$path);
                $image->delete();
            }
            $movie->images()->detach();

            $images = array();
            $i = 0;

            foreach ($request->images as $requestImage) {
                $images[$i] = new Image();

                $path="/images/".time().$requestImage->getClientOriginalName();
                $requestImage->move(public_path()."/images/",time().$requestImage->getClientOriginalName());
                $images[$i]->path = $path;
                $images[$i]->alt = $requestImage->getClientOriginalName();

                $images[$i]->save();
                $i++;
            }

            $movie->images()->saveMany($images);
        }

        $movie->title = $request->title;
        $movie->release_date = $request->releaseDate;
        $movie->duration_mins = $request->duration;
        $movie->description = $request->description;

        $movie->actors()->detach();
        $movie->directors()->detach();
        $movie->countries()->detach();
        $movie->genres()->detach();
        $movie->languages()->detach();

        $movie->actors()->attach($request->actor);
        $movie->directors()->attach($request->director);
        $movie->countries()->attach($request->country);
        $movie->genres()->attach($request->genre);
        $movie->languages()->attach($request->language);

        $movie->save();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Movie updated.');

        return redirect('/admin/edit/Movie/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);

        $movie->delete();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Movie deleted.');

        return redirect('/admin/display');
    }
}

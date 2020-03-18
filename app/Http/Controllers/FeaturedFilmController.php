<?php

namespace App\Http\Controllers;

use App\Models\FeaturedFilm;
use App\Models\Movie;
use Illuminate\Http\Request;

class FeaturedFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexTable() {
        $response['featuredFilms'] = FeaturedFilm::all();

        return view("partial.admin.display.featuredFilms")->with($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['movies'] = Movie::all();

        return view('partial.admin.insert.featuredFilm')->with($response);
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
            'id' => 'required|exists:movies,id'
        ]);

        $movie_id = $request->id;

        $featuredFilm = new FeaturedFilm();

        $featuredFilm->movie_id = $movie_id;

        $featuredFilm->save();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Featured film added to database.');

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
        $response['featuredFilm'] = FeaturedFilm::find($id);
        $response['movies'] = Movie::all();

        return view('pages.admin.edit.featuredFilm')->with($response);
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
            'id' => 'required|exists:movies,id'
        ]);

        $movie_id = $request->id;

        $featuredFilm = FeaturedFilm::find($id);

        $featuredFilm->movie_id = $movie_id;

        $featuredFilm->save();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Featured film updated.');

        return redirect('/admin/edit/FeaturedFilm/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $featuredFilm = FeaturedFilm::find($id);

        $featuredFilm->delete();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Featured Film deleted.');

        return redirect('/admin/display');
    }
}

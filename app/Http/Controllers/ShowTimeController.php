<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\ShowTime;
use Illuminate\Http\Request;

class ShowTimeController extends Controller
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
        $response['showTimes'] = ShowTime::all();

        return view("partial.admin.display.showTimes")->with($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['movies'] = Movie::all();

        return view('partial.admin.insert.showTime')->with($response);
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
            'id' => 'required|exists:movies,id',
            'time' => 'required|date',
            'seats' => 'required|numeric|min:1'
        ]);

        $movie_id = $request->id;
        $time = $request->time;
        $seats = $request->seats;

        $showTime = new ShowTime();

        $showTime->movie_id = $movie_id;
        $showTime->time = $time;
        $showTime->seats = $seats;

        $showTime->save();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Show time added to database.');

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
        $showTime = ShowTime::find($id);
        if($showTime == null){
            http_response_code(404);
        }
        return $showTime->getSeats();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['showTime'] = ShowTime::find($id);
        if($response['showTime'] == null){
            session()->flash('messageType', 'danger');
            session()->flash('messageHeading', 'Error!');
            session()->flash('message', 'Show Time not found.');
            return redirect('/admin/display');
        }
        $response['movies'] = Movie::all();

        return view('pages.admin.edit.showTime')->with($response);
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
            'id' => 'required|exists:movies,id',
            'time' => 'required|date',
            'seats' => 'required|numeric|min:1'
        ]);

        $movie_id = $request->id;
        $time = $request->time;
        $seats = $request->seats;

        $showTime = ShowTime::find($id);
        if($showTime == null){
            session()->flash('messageType', 'danger');
            session()->flash('messageHeading', 'Error!');
            session()->flash('message', 'Show Time not found.');
            return redirect('/admin/display');
        }

        $showTime->movie_id = $movie_id;
        $showTime->time = $time;
        if($showTime->getReservedSeats() > $seats){
            session()->flash('messageType', 'danger');
            session()->flash('messageHeading', 'Error!');
            session()->flash('message', 'Number of seats can not be lover then reserved seats!');
            return redirect('/admin/display');
        }
        $showTime->seats = $seats;

        $showTime->save();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Show time updated.');

        return redirect('/admin/edit/ShowTime/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $showTime = ShowTime::find($id);
        if($showTime == null){
            session()->flash('messageType', 'danger');
            session()->flash('messageHeading', 'Error!');
            session()->flash('message', 'Show Time not found.');
            return redirect('/admin/display');
        }

        foreach($showTime->reservations as $reservation){
            $reservation->delete();
        }
        $showTime->delete();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Show Time deleted.');

        return redirect('/admin/display');
    }
}

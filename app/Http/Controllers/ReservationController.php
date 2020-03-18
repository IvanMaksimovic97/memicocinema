<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\ShowTime;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['reservations'] = Reservation::where('user_id',session('user')['id'])->get();

        return view('pages.reservations')->with($response);
    }

    public function indexTable() {
        $response['reservations'] = Reservation::all();

        return view("partial.admin.display.reservations")->with($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'showTime' => 'required|exists:show_times,id',
            'seats' => 'required|numeric|min:1|max:'.ShowTime::find($request->showTime)->getSeats()
        ]);

        $reservation = new Reservation();

        $reservation->show_time_id = $request->showTime;
        $reservation->user_id = session('user')['id'];
        $reservation->reserved_seats = $request->seats;

        $reservation->save();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Reservation created.');

        if ($request->ajax())
            return view('partial.message');
        else
            return redirect()->back();
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
        $reservation = Reservation::find($id);

        if (session('user')['id'] == $reservation->user_id || session('user')['role_id'] == 1)
            $reservation->delete();

        return redirect()->back();
    }
}

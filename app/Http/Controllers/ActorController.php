<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
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
        $response['actors'] = Actor::all();

        return view('partial.admin.display.actors')->with($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partial.admin.insert.actor');
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
            'firstName' => 'required',
            'lastName' => 'required'
        ]);

        $actor = new Actor();

        $actor->first_name = $request->input('firstName');
        $actor->last_name = $request->input('lastName');

        $actor->save();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Actor added to database.');

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
        $response['actor'] = Actor::find($id);

        return view('pages.admin.edit.actor')->with($response);
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
            'firstName' => 'required',
            'lastName' => 'required'
        ]);

        $actor = Actor::find($id);

        $actor->first_name = $request->input('firstName');
        $actor->last_name = $request->input('lastName');

        $actor->save();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Actor updated.');

        return redirect('/admin/edit/Actor/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actor = Actor::find($id);

        $actor->delete();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Actor deleted.');

        return redirect('/admin/display');
    }
}

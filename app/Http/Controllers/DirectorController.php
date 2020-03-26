<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
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
        $response['directors'] = Director::all();

        return view("partial.admin.display.directors")->with($response);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partial.admin.insert.director');
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

        $director = new Director();

        $director->first_name = $request->input('firstName');
        $director->last_name = $request->input('lastName');

        $director->save();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Director added to database.');

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
        $response['director'] = Director::find($id);
        if($response['director'] == null){
            session()->flash('messageType', 'danger');
            session()->flash('messageHeading', 'Error!');
            session()->flash('message', 'Director not found.');
            return redirect('/admin/display');
        }
        return view('pages.admin.edit.director')->with($response);
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

        $director = Director::find($id);
        if($director == null){
            session()->flash('messageType', 'danger');
            session()->flash('messageHeading', 'Error!');
            session()->flash('message', 'Director not found.');
            return redirect('/admin/display');
        }

        $director->first_name = $request->input('firstName');
        $director->last_name = $request->input('lastName');

        $director->save();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Director updated.');

        return redirect('/admin/edit/Director/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $director = Director::find($id);
        if($director == null){
            session()->flash('messageType', 'danger');
            session()->flash('messageHeading', 'Error!');
            session()->flash('message', 'Director not found.');
            return redirect('/admin/display');
        }
        $director->delete();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Director deleted.');

        return redirect('/admin/display');
    }
}

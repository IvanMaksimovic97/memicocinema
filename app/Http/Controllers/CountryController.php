<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
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
        $response['countries'] = Country::all();

        return view("partial.admin.display.countries")->with($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partial.admin.insert.country');
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
            'name' => 'required'
        ]);

        $country = new Country();

        $country->name = $request->input('name');

        $country->save();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Country added to database.');

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
        $response['country'] = Country::find($id);

        return view('pages.admin.edit.country')->with($response);
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
            'name' => 'required'
        ]);

        $country = Country::find($id);

        $country->name = $request->input('name');

        $country->save();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Country updated.');

        return redirect('/admin/edit/Country/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::find($id);

        $country->delete();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'Country deleted.');

        return redirect('/admin/display');
    }
}

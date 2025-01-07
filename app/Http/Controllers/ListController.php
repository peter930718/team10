<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\oberservation;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oberservations = oberservation::all();
        return view('oberservation.index')->with('oberservations', $oberservations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view("oberservation.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'recruitment_year',
            'application_start_date',
            'application_deadline',
            'project_name',
            'country',
            'agreement_agency',
        ]);

        $oberservations = oberservation::create($data);

        return redirect('oberservation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oberservations = oberservation::findOrFail($id);
        return view('oberservation.show')->with('oberservation', $oberservations);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oberservations = oberservation::findOrFail($id);
        return view("oberservation.edit")->with('oberservation', $oberservations);
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
        $oberservations = oberservation::findOrFail($id);

        $data = $request->only([
            'recruitment_year',
            'application_start_date',
            'application_deadline',
            'project_name',
            'country',
            'agreement_agency',
        ]);

        // Update the model's attributes
        $oberservations->fill($data);

        // Save the changes to the database
        $oberservations->save();

        return redirect('oberservation');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oberservations = oberservation::findOrFail($id);
        $oberservations->delete();
        return redirect('oberservation'); // 觸發一組路由 observations
    }
}

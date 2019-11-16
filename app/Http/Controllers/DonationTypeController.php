<?php

namespace App\Http\Controllers;

use App\DonationType;
use Illuminate\Http\Request;

class DonationTypeController extends Controller
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
        $donationType = new DonationType;
        $donationType->donation_type_name = $request->donation_type_name;
        $donationType->donation_type_description = $request->donation_type_description;
        $donationType->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return DonationType::where('id',$id)->get();
    }

    public function showAllDonationsFromType($type_id){
        //Return all the donations that match de donation_type_id
        return DonationType::find($type_id)->donations()->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DonationType  $donationType
     * @return \Illuminate\Http\Response
     */
    public function edit(DonationType $donationType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DonationType  $donationType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DonationType $donationType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DonationType  $donationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(DonationType $donationType)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
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
        //
        $vehicle = new Vehicle;
        $vehicle->sector_id = $request->sector_id;
        $vehicle->vehicle_vin = $request->vehicle_vin;
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->vehicle_name = $request->vehicle_name;
        $vehicle->vehicle_brand = $request->vehicle_brand;
        $vehicle->vehicle_model = $request->vehicle_model;
        $vehicle->vehicle_year = $request->vehicle_year;
        $vehicle->vehicle_details = $request->vehicle_details;
        $vehicle->vehicle_status = $request->vehicle_status;
        $vehicle->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        return Vehicle::where('id', $id)->get();
    }


    
    public function getSector($vehicle_id){
        return Vehicle::find($vehicle_id)->sector;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}

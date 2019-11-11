<?php

namespace App\Http\Controllers;

use App\Catastrophe;
use Illuminate\Http\Request;

class CatastropheController extends Controller
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
        // 'catastrophe_name', 'status','description','date'];
        $catastrophe = new Catastrophe;
        $catastrophe->catastrophe_name = $request->catastrophe_name;
        $catastrophe->status = $request->status;
        $catastrophe->description = $request->description;
        $catastrophe->date = $request->date;
        $catastrophe->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Returns the catastrophee with id <$id>
        return Catastrophe::where('catastrophe_id', $id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function endCatastrophe($id)
    {
        //Modifies the catastrophe with id=$id.
        $catastrophe = Catastrophe::where('catastrophe_id', $id)->first();
        $catastrophe->status = "Inactiva";
        $catastrophe->save();
    }







    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catastrophe  $catastrophe
     * @return \Illuminate\Http\Response
     */
    public function edit(Catastrophe $catastrophe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Modifies the catastrophe with id=$id.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catastrophe  $catastrophe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catastrophe $catastrophe)
    {
        //
    }


    
    
}

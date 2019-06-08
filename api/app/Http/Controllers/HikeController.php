<?php

namespace App\Http\Controllers;
use App\Hike;
use Illuminate\Http\Request;

class HikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Hike::all();
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hike  $hike
     * @return \Illuminate\Http\Response
     */
    public function show(Hike $hike)
    {
        //
        return Hike::find($hike);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hike  $hike
     * @return \Illuminate\Http\Response
     */
    public function edit(Hike $hike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hike  $hike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hike $hike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hike  $hike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hike $hike)
    {
        //
    }
}

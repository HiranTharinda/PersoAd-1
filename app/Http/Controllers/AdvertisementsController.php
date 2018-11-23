<?php

namespace App\Http\Controllers;

use App\advertisements;
use Illuminate\Http\Request;

class AdvertisementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.adds_creating');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.adds_creating');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        advertisements::create($request->all());
        return view('pages.adds_creating');
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\advertisements  $advertisements
     * @return \Illuminate\Http\Response
     */
    public function show(advertisements $advertisements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\advertisements  $advertisements
     * @return \Illuminate\Http\Response
     */
    public function edit(advertisements $advertisements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\advertisements  $advertisements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, advertisements $advertisements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\advertisements  $advertisements
     * @return \Illuminate\Http\Response
     */
    public function destroy(advertisements $advertisements)
    {
        //
    }
}

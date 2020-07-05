<?php

namespace App\Http\Controllers;

use App\blogg;
use Illuminate\Http\Request;

class BloggController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name,$age)
    {
       dd($name. " is " . $age. " years old . ");
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
     * @param  \App\blogg  $blogg
     * @return \Illuminate\Http\Response
     */
    public function show(blogg $blogg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blogg  $blogg
     * @return \Illuminate\Http\Response
     */
    public function edit(blogg $blogg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blogg  $blogg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blogg $blogg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blogg  $blogg
     * @return \Illuminate\Http\Response
     */
    public function destroy(blogg $blogg)
    {
        //
    }
}

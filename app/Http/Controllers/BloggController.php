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
    public function index()
    {
        $bloggs= blogg::all();

       return view ('blogg.index')->with([
           'bloggs' => $bloggs
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('blogg.create');
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
            'name' => 'required|min:3',
            'description'=> 'required|min:5'
        ]);
    $blogg = new Blogg(['name'=>$request['name'],'description'=>$request['description'],]);
    $blogg->save();
    return $this->index();

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

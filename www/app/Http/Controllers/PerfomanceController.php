<?php

namespace App\Http\Controllers;

use App\Models\Perfomance;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PerfomanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():View
    {
        $perfomances = Perfomance::all();
        return view('poster', compact('perfomances'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfomance  $perfomance
     * @return \Illuminate\Http\Response
     */
    public function show(Perfomance $perfomance):View
    {
        return view('prefomance', [
            'perfomance' => $perfomance,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfomance  $perfomance
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfomance $perfomance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfomance  $perfomance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfomance $perfomance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfomance  $perfomance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfomance $perfomance)
    {
        //
    }

    public function about():View
    {
        $perfomances = Perfomance::latest()->take(5)->get();
        return view('about', compact('perfomances'));
    }

    public function findUs():View
    {
        return view('findUs');
    }

}

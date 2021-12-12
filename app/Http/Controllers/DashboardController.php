<?php

namespace App\Http\Controllers;

use App\Models\DashboardModels;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('ekdom');
    }

    public function dosen()
    {
        return view('ekdom');
    }

    public function mahasiswa()
    {
        return view('ekdom');
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
     * @param  \App\Models\DashboardModels  $dashboardModels
     * @return \Illuminate\Http\Response
     */
    public function show(DashboardModels $dashboardModels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DashboardModels  $dashboardModels
     * @return \Illuminate\Http\Response
     */
    public function edit(DashboardModels $dashboardModels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DashboardModels  $dashboardModels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DashboardModels $dashboardModels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DashboardModels  $dashboardModels
     * @return \Illuminate\Http\Response
     */
    public function destroy(DashboardModels $dashboardModels)
    {
        //
    }
}

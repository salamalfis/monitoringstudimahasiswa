<?php

namespace App\Http\Controllers;

use App\Models\LabRiset;
use Illuminate\Http\Request;

class LabRisetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('labriset.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LabRiset $labRiset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LabRiset $labRiset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LabRiset $labRiset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LabRiset $labRiset)
    {
        //
    }
}

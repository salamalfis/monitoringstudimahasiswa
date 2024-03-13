<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semester = Semester::all();
        return view('semester.index', compact('semester'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        request()->validate([
            'tahun' => 'required',
            'semester' => 'required',

        ], [

            'tahun.required' => 'Tahun tidak boleh kosong',
            'semester.required' => 'Semester tidak boleh kosong',

        ]);

        $semester = Semester::create([

            'tahun' => request('tahun'),
            'semester' => request('semester'),

        ]);

        Alert::success('Berhasil', 'Semester berhasil ditambahkan');
        return redirect('semester');

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
    public function show(Semester $semester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semester $semester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Semester $semester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semester $semester)
    {
        //
    }
}

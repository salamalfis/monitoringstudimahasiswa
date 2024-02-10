<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('menu.index');
    }

    public function create()
    {
        return view('menu.create');
    }

    public function registermenu()
    {
        request()->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'kategori' => 'required',
            'deskripsi' => 'required',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
            'harga.numeric' => 'Harga harus berupa angka',
            'kategori.required' => 'Kategori tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
        ]);

        if(request('menu')){
            $menu = Menu::create([
  
                'nama' => request('nama'),
                'harga' => request('harga'),
                'kategori' => request('kategori'),
                'deskripsi' => request('deskripsi'),
            ]);
        } else {
            $submenu = Submenu::create([
                'nama' => request('nama'),
                'harga' => request('harga'),
                'kategori' => request('kategori'),
                'deskripsi' => request('deskripsi'),
            ]);
        }



        Alert::success('Berhasil', 'Menu berhasil ditambahkan');
        return redirect('/menu');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::with('Submenu')->get();
        return view('menu.index', compact('menu'));
    }


    public function submenu()
    {
        $Submenu = Submenu::all();
        return view('menu.submenu', compact('Submenu'));
    }



    public function registermenu()
    {
        request()->validate([
            'nama' => 'required',
            'route' => 'required',
            'icon' => 'required',

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'route.required' => 'Route tidak boleh kosong',
            'icon.required' => 'Icon tidak boleh kosong',

        ]);


        $menu = Menu::create([

                'nama' => request('nama'),
                'route' => request('route'),
                'icon' => request('icon'),
        ]);



        Alert::success('Berhasil', 'Menu berhasil ditambahkan');
        return redirect('/menu');
    }

    public function registersubmenu()
    {
        request()->validate([
            'nama' => 'required',
            'route' => 'required',
            'icon' => 'required',
            'namamenu' => 'required',

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'route.required' => 'Route tidak boleh kosong',
            'icon.required' => 'Icon tidak boleh kosong',
            'namamenu.required' => 'Menu tidak boleh kosong',

        ]);

        $submenu = Submenu::create([

            'nama' => request('nama'),
            'route' => request('route'),
            'icon' => request('icon'),
            'menu_id' => Menu::where('namamenu', request('namamenu'))->first()->id,
        ]);

        Alert::success('Berhasil', 'Submenu berhasil ditambahkan');
        return redirect('/submenu');
    }
}

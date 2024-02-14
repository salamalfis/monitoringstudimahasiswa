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
        $menu = Menu::all();
        $Submenu = Submenu::all();
        return view('menu.submenu', compact('Submenu','menu'));
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
            'menu_id' => 'required',

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'route.required' => 'Route tidak boleh kosong',
            'icon.required' => 'Icon tidak boleh kosong',
            'menu_id.required' => 'Menu tidak boleh kosong',

        ]);

        $submenu = Submenu::create([

            'nama' => request('nama'),
            'route' => request('route'),
            'icon' => request('icon'),
            'menu_id' => request('menu_id'),
        ]);

        Alert::success('Berhasil', 'Submenu berhasil ditambahkan');
        return redirect('/submenu');
    }

    public function editmenu($id)
    {
        $menuid = Menu::find($id);
        return view('menu.edit', compact('menu'));
    }
    public function updatemenu($id)
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

        $menu = Menu::find($id);
        $menu->update([
            'nama' => request('nama'),
            'route' => request('route'),
            'icon' => request('icon'),
        ]);

        Alert::success('Berhasil', 'Menu berhasil diubah');
        return redirect('/menu');
    }

    public function editsubmenu($id)
    {
        $submenuid = Submenu::find($id);
        return view('menu.editsubmenu', compact('submenu'));
    }
    public function updatesubmenu($id)
    {
        request()->validate([
            'nama' => 'required',
            'route' => 'required',
            'icon' => 'required',
            'menu_id' => 'required',

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'route.required' => 'Route tidak boleh kosong',
            'icon.required' => 'Icon tidak boleh kosong',
            'menu_id.required' => 'Menu tidak boleh kosong',
        ]);

        $submenu = Submenu::find($id);
        $submenu->update([
            'nama' => request('nama'),
            'route' => request('route'),
            'icon' => request('icon'),
            'menu_id' => request('menu_id'),
        ]);

        Alert::success('Berhasil', 'Submenu berhasil diubah');
        return redirect('/submenu');
    }

    public function deletemenu($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        $title = 'Delete Menu!';
        $text = "Apakah anda yakin ingin menghapus menu ini?";
        confirmDelete($title, $text);
        return redirect('/menu');
    }
    public function deletesubmenu($id)
    {
        $submenu = Submenu::find($id);
        $submenu->delete();
        $title = 'Delete Submenu!';
        $text = "Apakah anda yakin ingin menghapus submenu ini?";
        confirmDelete($title, $text);
        return redirect('/submenu');
    }

    public function sidebar()
    {
        $menu = Menu::with('Submenu')->get();
        return  compact('menu');
    }

}

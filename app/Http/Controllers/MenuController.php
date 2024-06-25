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
        $menu = Menu::orderBy('nama', 'asc')->paginate(10);
        $title = 'Delete Menu!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);
        return view('menu.index', compact('menu'));
    }



    public function submenu()
    {
        $menu = Menu::orderBy('nama', 'asc')->paginate(10);
        $Submenu = Submenu::orderBy('nama', 'asc')->paginate(10);
        $title = 'Delete Sub Menu!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);
        return view('menu.submenu', compact('Submenu','menu'));
    }

    public function tambahmenu()
    {
        return view('menu.tambahmenu');
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
        return redirect('menu');
    }



    public function registersubmenu()
    {
        request()->validate([
            'nama' => 'required',
            'route' => 'required',

            'menu_id' => 'required',

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'route.required' => 'Route tidak boleh kosong',

            'menu_id.required' => 'Menu tidak boleh kosong',

        ]);

        $submenu = Submenu::create([

            'nama' => request('nama'),
            'route' => request('route'),

            'menu_id' => request('menu_id'),
        ]);

        Alert::success('Berhasil', 'Submenu berhasil ditambahkan');
        return redirect('sub-menu');
    }

    public function editmenu($id)
    {
        $menu = Menu::find($id);
        return view('menu.editmenu', compact('menu'));
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
        return redirect('menu');
    }

    public function tambahsubmenu()
    {
        $menu = Menu::all()->sortBy('nama');

        return view('menu.tambahsubmenu', compact('menu'));
    }
    public function editsubmenu($id)
    {
        $submenu = Submenu::find($id);
        $menu = Menu::all()->sortBy('nama');
        return view('menu.editsubmenu', compact('submenu','menu'));
    }
    public function updatesubmenu($id)
    {
        request()->validate([
            'nama' => 'required',
            'route' => 'required',
            'menu_id' => 'required',

        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'route.required' => 'Route tidak boleh kosong',

            'menu_id.required' => 'Menu tidak boleh kosong',
        ]);

        $submenu = Submenu::find($id);
        $submenu->update([
            'nama' => request('nama'),
            'route' => request('route'),

            'menu_id' => request('menu_id'),
        ]);

        Alert::success('Berhasil', 'Submenu berhasil diubah');
        return redirect('sub-menu');
    }

    public function deletemenu($id)
    {
        $menu = Menu::find($id);
        //$menu->submenu()->delete();
        $menu->delete();

        Alert::success('Berhasil', 'Menu berhasil dihapus');
        return redirect('menu');


    }
    public function deletesubmenu($id)
    {
        $submenu = Submenu::find($id);
        $submenu->delete();
        Alert::success('Berhasil', 'Sub Menu berhasil dihapus');
        return redirect('sub-menu');
    }



}

<?php
 namespace App\Http\Controllers;


use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;


class SideBarController extends Controller
{
    public function index()
    {
        $menu = Menu::with('Submenu')->get();
        return view('layouts.navbars.auth', compact('menu'));
    }
}


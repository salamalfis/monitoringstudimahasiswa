<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all()->sortBy('name');
        return view('role.index', compact('roles'));
    }

    public function assignrole()
    {
        return view('role.access');
    }

    public function storeRole(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $role = Role::create([
            'name' => request('nama')
        ]);

        Alert::success('Berhasil', 'Role berhasil ditambahkan');
        return redirect('roles');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all()->sortBy('name');


        $title = 'Delete Role!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);

        return view('role.index', compact('roles'));
    }


    public function tambahrole()
    {
        return view('role.tambahrole');
    }

    public function storeRole(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ],[
            'nama.required' => 'Nama tidak boleh kosong'
        ]);



        $role = Role::create([
            'name' => request('nama')
        ]);

        Alert::success('Berhasil', 'Role berhasil ditambahkan');
        return redirect('roles');
    }

    public function editRole($id)
    {
        $role = Role::find($id);

        $permissions = Permission::all();

        $title = 'Delete Role Permission!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);

        return view('role.editrole', compact('role','permissions'));
    }

    public function updateRole(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required'
        ],[
            'nama.required' => 'Nama tidak boleh kosong'
        ]);

        $role = Role::find($id);
        $role->name = request('nama');
        $role->save();

        Alert::success('Berhasil', 'Role berhasil diubah');
        return redirect('roles');
    }

    public function deleteRole($id)
    {
        $role = Role::find($id);
        $role->delete();

        Alert::success('Berhasil', 'Role berhasil dihapus');
        return redirect('roles');
    }

    






}

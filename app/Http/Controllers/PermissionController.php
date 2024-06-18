<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();

        $title = 'Delete Permission!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);

        return view('permission.index', compact('permissions'));
    }

    public function assignpermission()
    {
        return view('permission.access');
    }

    public function tambahPermission()
    {
        return view('permission.tambahpermission');
    }

    public function storePermission(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ],[
            'nama.required' => 'Nama permission tidak boleh kosong'
        ]);
        

        $permission = Permission::create([
            'name' => request('nama')
        ]);

        Alert::success('Berhasil', 'Permission berhasil ditambahkan');
        return redirect('permission');
    }

    public function editPermission($id)
    {
        $permission = Permission::find($id);
        return view('permission.editpermission', compact('permission'));
    }

    public function updatePermission(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required'
        ],[
            'nama.required' => 'Nama permission tidak boleh kosong'
        ]);

        $permission = Permission::find($id);
        $permission->name = $request->nama;
        $permission->save();

        Alert::success('Berhasil', 'Permission berhasil diubah');
        return redirect('permission');
    }

    public function deletePermission($id)
    {
        $permission = Permission::find($id);
        $permission->delete();

        Alert::success('Berhasil', 'Permission berhasil dihapus');
        return redirect('permission');
    }
}

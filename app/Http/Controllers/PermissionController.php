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
        return view('permission.index', compact('permissions'));
    }

    public function assignpermission()
    {
        return view('permission.access');
    }

    public function storePermission(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $permission = Permission::create([
            'name' => request('nama')
        ]);

        Alert::success('Berhasil', 'Permission berhasil ditambahkan');
        return redirect('permissions');
    }

    public function editPermission($id)
    {
       
    }
}

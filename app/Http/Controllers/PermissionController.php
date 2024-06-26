<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::orderby('created_at')->paginate(10);

        $title = 'Delete Permission!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);

        return view('permission.index', compact('permissions'));
    }



    public function tambahPermission()
    {

        return view('permission.tambahpermission');
    }

    public function storePermission(Request $request)
    {
        $request->validate([
            'nama' => 'required',

        ],[
            'nama.required' => 'Nama permission tidak boleh kosong',

        ]);


        $permission = Permission::create([
            'name' => request('nama'),

        ]);

        Alert::success('Berhasil', 'Permission berhasil ditambahkan');
        return redirect('permission');
    }

    public function editPermission($id)
    {
        $permission = Permission::find($id);


        $role = Role::all();

        $title = 'Delete Permission Role!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);
        return view('permission.editpermission', compact('permission','role'));

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

    public function assignpermissionrole(Request $request, $id){
        $request -> validate([
            'assign' => 'required'
        ],[
            'assign' => 'Assign Role tidak boleh kosong'

        ]);
        $permission = Permission::find($id);
        if($permission->hasRole($request->assign)){
            Alert::warning('Warning', 'Role Permission Sudah Ada');
            return back();
        }

            $permission->assignRole($request->assign);
            Alert::success('Berhasil', 'Role Permission berhasil ditambahkan');
            return back();

    }

    public function deletepermissionrole($id, $idpermission){

        $role = Role::find($id);
        $permission = Permission::find($idpermission);

        if ($permission->hasRole($role)){
            $permission->removeRole($role);
            Alert::success('Berhasil', 'Permission Role berhasil dihapus');
            return back();
        }
        Alert::warning('Warning', 'Permission Role tidak ada');
    }






}

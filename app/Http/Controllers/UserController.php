<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    public function assignuser($iduser){

        $title = 'Delete Role / Permission!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);

        $user = User::find($iduser);
        $role = Role::all();
        $permissions = Permission::all();
        return view('user.role', compact('user', 'role', 'permissions'));
    }

    public function assignuserrole(Request $request, $iduser){
        $request -> validate([
            'assign' => 'required'
        ],[
            'assign' => 'Assign Role tidak boleh kosong'
        ]);
        $user = User::find($iduser);
        if($user->hasRole($request->assign)){
            Alert::warning('Warning', 'Role User Sudah Ada');
            return back();
        }
            $user->assignRole($request->assign);
            Alert::success('Berhasil', 'Role User berhasil ditambahkan');
            return back();
    }

    public function assignuserpermission(Request $request, $iduser){
        $request -> validate([
            'assign' => 'required'
        ],[
            'assign' => 'Assign Role tidak boleh kosong'

        ]);
        $user = User::find($iduser);
        if($user->hasPermissionTo($request->assign)){
            Alert::warning('Warning', 'Permission User Sudah Ada');
            return back();
        }
            $user->givePermissionTo($request->assign);
            Alert::success('Berhasil', 'Permission User berhasil ditambahkan');
            return back();

    }

    public function deleteuserrole($iduser, $idrole){

        $user = User::find($iduser);
        $role = Role::find($idrole);
        if ($user->hasRole($role)){
            $user->removeRole($role);
            Alert::success('Berhasil', 'Role User berhasil dihapus');
            return back();
        }
        Alert::warning('Warning', 'Role User tidak ada');
    }

    public function deleteuserpermission($iduser, $idpermission){

        $user = User::find($iduser);
        $permission = Permission::find($idpermission);
        if ($user->hasPermissionTo($permission)){
            $user->revokePermissionTo($permission);
            Alert::success('Berhasil', 'Permission User berhasil dihapus');
            return back();
        }
        Alert::warning('Warning', 'Permission User tidak ada');
        
    }

}

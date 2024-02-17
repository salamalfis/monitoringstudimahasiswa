<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index()
    {
        return view('role.index');
    }

    public function assignrole()
    {
        return view('role.access');
    }
}

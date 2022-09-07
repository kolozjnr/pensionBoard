<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnivController extends Controller
{
    public function index(){
        return view('users.index');
    }

    public function dashboard()
    {
        return view('admin.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function tampilPengguna($id, $user)
    {
        return view('ini_user')->with('id', $id)->with('user', $user);
    }
}

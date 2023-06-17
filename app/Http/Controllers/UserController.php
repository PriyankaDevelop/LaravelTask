<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userFecth(){
        $user = User::get();
        return response()->json(['status' => 'success', 'data' => $user]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showJibunSim() {
        return view('jibun_sim');
    }
    public function calcJibunSim(Request $request) {
        return view('jibun_sim');
    }
}

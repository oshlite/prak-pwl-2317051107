<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "", $npm = "", $kelas = "")
    {
        $data = [
            'nama'   => $nama,
            'npm'    => $npm,
            'kelas'  => $kelas,
            'foto'   => asset('images/profile.jpeg') 
        ];
        return view('profile', $data);
    }
}

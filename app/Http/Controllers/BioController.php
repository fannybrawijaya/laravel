<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioController extends Controller
{
    public function daftar()
    {
        return view('page.biodata');
    }
    public function kirim(request $request)
    {
        $namaDepan = $request['Fname'];
        $namaBelakang = $request['Lname'];

        return view('page.welcome', ["namaDepan"=> $namaDepan, 'namaBelakang'=> $namaBelakang]);

    }
}

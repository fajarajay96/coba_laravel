<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view("form");
    } 
    
    public function welcome(Request $request){
        // dd($request->all());
        $nama_depan = $request["first_name"];
        $nama_belakang = $request["last_name"];
        $nama_lengkap = "$nama_depan $nama_belakang";
        return view('selamat_datang', compact('nama_lengkap'));
        // return "OKEEE $nama_lengkap";
    }
    //
}

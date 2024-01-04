<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkMasukController extends Controller
{
    public function index(){
        return view('barangMasuk');
    }
}

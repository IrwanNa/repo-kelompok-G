<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produkMasuk;

class produkMasukController extends Controller
{
    public function index(){

        return view('barangMasuk.index');
    }

    public function create(){

        return view('barangMasuk.create');
    }

    public function store(Request $request){

        $data = $request->validate([
            'namaProduk' => 'required',
            'jumlahMasuk' => 'required|numeric',
            'jenis' => 'required',
        ]);

        $baruProduk = produkMasuk::create($data);

        return redirect(route('barangMasuk'));
    }
}

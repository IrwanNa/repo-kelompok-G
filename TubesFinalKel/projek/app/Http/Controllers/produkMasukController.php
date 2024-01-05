<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produkMasuk;

class produkMasukController extends Controller
{
    public function index(){

        $barang = produkMasuk::all();
        return view('barangMasuk.index', ['barangMasuk' => $barang]);
        
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

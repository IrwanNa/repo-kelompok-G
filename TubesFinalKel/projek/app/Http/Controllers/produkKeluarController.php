<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produkKeluar;

class produkKeluarController extends Controller
{
    public function index(){

        $barang = produkKeluar::all();
        return view('barangKeluar.index', ['barangKeluar' => $barang]);
        
    }

    public function create(){

        return view('barangKeluar.create');
    }

    public function store(Request $request){

        $data = $request->validate([
            'namaProduk' => 'required',
            'jumlahKeluar' => 'required|numeric',
            'jenis' => 'required',
        ]);

        $terjualProduk = produkKeluar::create($data);

        return redirect(route('barangKeluar'));
    }
}

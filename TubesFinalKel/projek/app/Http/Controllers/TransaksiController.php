<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use PDF;

class TransaksiController extends Controller
{
    public function index(){
        return view('cetakTransaksi');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function index(){

        return view('pembayaran' ,[
            'title' => 'Pembayaran',
            'kelas' => Kelas::all(),
            'user' => Auth::user()
        ]);
    }

    public function store(Request $request){
        $request -> validate([
            'kelas_id' => 'required',
            'mapel' => 'required',
        ]);

        $transaksi = new Transaksi();
        $transaksi->user_id = $request->user()->id;
        $transaksi->save();

        // $request->session()->flash('success','Registrasi berhasil, silahkan Login');
        return redirect('/bayar')->with('success','Registrasi berhasil');
    }
}

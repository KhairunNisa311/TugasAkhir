<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Mapel;

class DashboardController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        $member = User::where('role', 'member');
        $admin = User::where('role', 'admin');
        $mapel = Mapel::all();
        $kelas = Kelas::all();
        return view('dashboard.index', [
            'transaksi' => $transaksi,
            'member' => $member,
            'admin' => $admin,
            'mapel' => $mapel,
            'kelas' => $kelas,
        ]);
    }
}

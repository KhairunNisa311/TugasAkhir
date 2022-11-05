<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;

class IndexController extends Controller
{

    public function index()
    {
        $mapel = Mapel::all();
        return view('index', [
            'mapel' => $mapel
        ]);
    }

}

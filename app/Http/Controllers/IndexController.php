<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Models\Mapel;
>>>>>>> 33d101aa60921f92ff0518570498586e54e14293

class IndexController extends Controller
{

    public function index()
    {
<<<<<<< HEAD
        return view('index');
=======
        $mapel = Mapel::all();
        return view('index', [
            'mapel' => $mapel
        ]);
>>>>>>> 33d101aa60921f92ff0518570498586e54e14293
    }

}

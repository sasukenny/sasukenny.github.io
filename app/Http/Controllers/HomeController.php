<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centro;
use App\Models\Distrito;
use App\Models\Provincia;
use App\Models\Region;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     //-----------------------------------------------
    /*public function index()
     {
        return view('centro.index',[
            'centrosDeSalud' => Centro::all(),
            'regions' => Region::all(),
            'provincias' => Provincia::all(),
            'distritos' => Distrito::all()
        ]);
    } */
    public function index()
    {
        return view('inicio');
    }
}

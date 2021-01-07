<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use App\Models\Distrito;
use App\Models\Provincia;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CentroController extends Controller
{
    public function index() {

        return view('centro.index', [
            'centrosDeSalud' => Centro::all(),              
            'regions' => Region::all(),
            'provincias' => Provincia::all(),
            'distritos' => Distrito::all()
        ]);
    }

    public function fetchSelectorProvincias(Request $request) {
        
        $reg_id = $request->reg_id;

        return view('centro.fetchSelectorProvincias', [
            'provincias' => Provincia::where('reg_id', '=', $reg_id)->get(),
        ]);
    }

    public function fetchSelectorDistritos(Request $request) {
        
        $prov_id = $request->prov_id;

        return view('centro.fetchSelectorDistritos', [
            'distritos' => Distrito::where('prov_id', '=', $prov_id)->get(),
        ]);
    }

    public function fetchSelectorCentros(Request $request) {
        
        $dist_id = $request->dist_id;

        return view('centro.fetchSelectorCentros', [
            'centros' => Centro::where('hos_dist', '=', $dist_id)->get(),
        ]);
    }

    public function fetchRegions(Request $request) {
        
        $reg_id = $request->reg_id;

        return view('centro.fetch', [
            'centrosDeSalud' => Centro::leftJoin('distritos', function($join){
                $join
                ->on('centrosdesalud.hos_dist', '=', 'distritos.dist_id');
            })->leftJoin('provincias', function($join){
                $join
                ->on('distritos.prov_id', '=', 'provincias.prov_id');
            })->leftJoin('regions', function($join){
                $join
                ->on('provincias.reg_id', '=', 'regions.reg_id');
            })
                ->where('regions.reg_id', '=', $reg_id)
                ->get(),
        ]);
    }

    public function fetchProvincias(Request $request) {
        
        $prov_id = $request->prov_id;

        return view('centro.fetch', [
            'centrosDeSalud' => Centro::leftJoin('distritos', function($join){
                $join
                ->on('centrosdesalud.hos_dist', '=', 'distritos.dist_id');
            })->leftJoin('provincias', function($join){
                $join
                ->on('distritos.prov_id', '=', 'provincias.prov_id');
            })
                ->where('provincias.prov_id', '=', $prov_id)
                ->get(),
        ]);
    }

    public function fetchDistritos(Request $request) {
        
        $dist_id = $request->dist_id;

        return view('centro.fetch', [
            'centrosDeSalud' => Centro::leftJoin('distritos', function($join){
                $join
                ->on('centrosdesalud.hos_dist', '=', 'distritos.dist_id');
            })
                ->where('distritos.dist_id', '=', $dist_id)
                ->get(),
        ]);
    }

    public function create(){
        return view('inicio.programar');
    }
}

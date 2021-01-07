<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use App\Models\Cita;
use App\Models\Distrito;
use App\Models\Horario;
use App\Models\Provincia;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('programar_cita.lugarElegir', [
            'regions' => Region::all(),
        ]);
    }

    public function confirmar(Request $request)
    {
        $hor_id = $request->get('filtro-horario');
        $user_id = Auth::id();
        $cita = Cita::firstWhere('cita_user', '=', $user_id);

        if($cita != null)
            return redirect('programar/');

        $cita = Cita::firstOrCreate([
            'cita_user' => $user_id,
            'cita_hor' => $hor_id
        ]);

        return view('programar_cita.confirmar');
    }

    public function fetchSelectorProvincias(Request $request) {
        
        $reg_id = $request->reg_id;

        return view('programar_cita.fetchSelectorProvincias', [
            'provincias' => Provincia::where('reg_id', '=', $reg_id)->get(),
        ]);
    }

    public function fetchSelectorDistritos(Request $request) {
        
        $prov_id = $request->prov_id;

        return view('programar_cita.fetchSelectorDistritos', [
            'distritos' => Distrito::where('prov_id', '=', $prov_id)->get(),
        ]);
    }

    public function fetchSelectorCentros(Request $request) {
        
        $dist_id = $request->dist_id;

        return view('programar_cita.fetchSelectorCentros', [
            'centros' => Centro::where('hos_dist', '=', $dist_id)->get(),
        ]);
    }

    
    public function fetchSelectorFechas(Request $request) {
        
        $hos_id = $request->hos_id;

        return view('programar_cita.fetchSelectorFechas', [
            'horarios' => Horario::where('hor_hos', '=', $hos_id)->get()
        ]);
    }

    public function fetchSelectorHorarios(Request $request) {
        
        $hor_fecha = $request->hor_fecha;

        return view('programar_cita.fetchSelectorHorarios', [
            'horarios' => Horario::where('hor_fecha', '=', $hor_fecha)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        //
    }
}

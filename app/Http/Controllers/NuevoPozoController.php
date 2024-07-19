<?php

namespace App\Http\Controllers;
use App\Models\NuevoPozo;

use Illuminate\Http\Request;

class NuevoPozoController extends Controller
{
   
    public function index()
    {
        $registros = NuevoPozo::all();
       return view ('/admin/nuevopozo',compact('registros'));
    }
    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
        $pozo = new NuevoPozo();
        $pozo->nombre_pozo = $request->nombre_pozo;
        $pozo->fperforacion = $request-> fperforacion;
        $pozo->produccion   =$request-> produccion;
        $pozo->administrado = $request->administrado;
        $pozo->habitantes_beneficiados=$request->habitantes_beneficiados;
        $pozo->estado=$request->estado;
        $pozo->municipio=$request->municipio;
        $pozo->parroquia=$request->parroquia;
        $pozo->sector=$request->sector;
        $pozo->hpmotor=$request->hpmotor;
        $pozo->voltaje=$request->voltaje;
        $pozo->tipovoltaje=$request->tipovoltaje;
        $pozo->modelo=$request->modelo;
        $pozo->hpbomba=$request->hpbomba;
        $pozo->caudal=$request->caudal;
        $pozo->altura=$request->altura;
        $pozo->diametro=$request->diametro;
        $pozo->save();

        return redirect('npozo/index')->with('success', 'Se han registrado los datos.');
    } catch (\Throwable $th) {
        return redirect('npozo/index')->with('error', 'Verifique los datos ingresados e intente nuevamente.');
    }
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $npozo = NuevoPozo::find($id);
        return view('/admin/nuevopozo', compact('npozo'));
    }

    
    public function update(Request $request, $id)
    {
        $pozo = NuevoPozo::find($id);
        $pozo->nombre_pozo = $request->nombre_pozo;
        $pozo->fperforacion = $request-> fperforacion;
        $pozo->produccion   =$request-> produccion;
        $pozo->administrado = $request->administrado;
        $pozo->habitantes_beneficiados=$request->habitantes_beneficiados;
        $pozo->estado=$request->estado;
        $pozo->municipio=$request->municipio;
        $pozo->parroquia=$request->parroquia;
        $pozo->sector=$request->sector;
        $pozo->hpmotor=$request->hpmotor;
        $pozo->voltaje=$request->voltaje;
        $pozo->tipovoltaje=$request->tipovoltaje;
        $pozo->modelo=$request->modelo;
        $pozo->hpbomba=$request->hpbomba;
        $pozo->caudal=$request->caudal;
        $pozo->altura=$request->altura;
        $pozo->diametro=$request->diametro;
        $pozo->save();

        return redirect('/admin/nuevopozo')->with('success', 'Se actualizaron los datos correctamente.');
    }
   
    public function destroy($id)
    {
        $pozo = NuevoPozo::find($id);
        $pozo->delete();
        return redirect('/admin/nuevopozo');
    }
}
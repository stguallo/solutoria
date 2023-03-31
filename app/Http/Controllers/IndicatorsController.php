<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Indicator;

class IndicatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicators = Indicator::all();
        return view('indicators.index', compact('indicators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('indicators.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $indicator = new Indicator([
            'nombreIndicador' => $request->get('nombreIndicador'),
            'codigoIndicador' => $request->get('codigoIndicador'),
            'unidadMedidaIndicador' => $request->get('unidadMedidaIndicador'),
            'valorIndicador' => $request->get('valorIndicador'),
            'fechaIndicador' => $request->get('fechaIndicador'),
            'tiempoIndicador' => $request->get('tiempoIndicador'),
            'origenIndicador' => $request->get('origenIndicador')
        ]);
        $indicator->save();
        return redirect('/indicators')->with('success', 'Indicador creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicator = Indicator::find($id);
        return view('indicators.show', compact('indicator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicator = Indicator::find($id);
        return view('indicators.edit', compact('indicator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $indicator = Indicator::find($id);
        $indicator->nombreIndicador = $request->get('nombreIndicador');
        $indicator->codigoIndicador = $request->get('codigoIndicador');
        $indicator->unidadMedidaIndicador = $request->get('unidadMedidaIndicador');
        $indicator->valorIndicador = $request->get('valorIndicador');
        $indicator->fechaIndicador = $request->get('fechaIndicador');
        $indicator->tiempoIndicador = $request->get('tiempoIndicador');
        $indicator->origenIndicador = $request->get('origenIndicador');
        $indicator->save();
        return redirect('/indicators')->with('success', 'Indicador actualizado exitosamente!');
    }
    public function destroy(Indicator $indicator)
    {
        $indicator->delete();
        return redirect()->route('indicators.index')->with('success', 'Indicador eliminado correctamente.');
    }
}

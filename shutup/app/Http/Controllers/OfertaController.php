<?php

namespace App\Http\Controllers;

use App\Oferta;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas = Oferta::all();

        return view('ofertas.index')->with('ofertas', $ofertas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ofertas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Oferta::create($request->all());

        session()->flash('mensagem', 'Oferta Inserido com sucesso!');

        return redirect()->route('ofertas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $oferta)
    {
        return view('ofertas.show')->with('oferta', $oferta);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function edit(Oferta $oferta)
    {
        return view('ofertas.edit')->with('oferta', $oferta);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oferta $oferta)
    {
        $oferta->fill($request->all());
        $oferta->save();

        session()->flash('mensagem', 'Oferta Atualizada com sucesso!');

        return redirect()->route('ofertas.show', $oferta->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Oferta $oferta
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Oferta $oferta)
    {
        $oferta->delete();
        session()->flash('mensagem', 'Posse excluida com sucesso!');

        return redirect()->route('ofertas.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Posse;
use Illuminate\Http\Request;

class PosseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posses = Posse::all();

        return view('posses.index')->with('posses', $posses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Posse::create($request->all());

        session()->flash('mensagem', 'Posse Inserido com sucesso!');

        return redirect()->route('posses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posse  $posse
     * @return \Illuminate\Http\Response
     */
    public function show(Posse $posse)
    {
        return view('posses.show')->with('posse', $posse);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posse  $posse
     * @return \Illuminate\Http\Response
     */
    public function edit(Posse $posse)
    {
        return view('posses.edit')->with('posse', $posse);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posse  $posse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posse $posse)
    {
        $posse->fill($request->all());
        $posse->save();

        session()->flash('mensagem', 'Posse Atualizada com sucesso!');

        return redirect()->route('posses.show', $posse->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Posse $posse
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Posse $posse)
    {
        $posse->delete();
        session()->flash('mensagem', 'Posse excluida com sucesso!');

        return redirect()->route('posses.index');
    }
}

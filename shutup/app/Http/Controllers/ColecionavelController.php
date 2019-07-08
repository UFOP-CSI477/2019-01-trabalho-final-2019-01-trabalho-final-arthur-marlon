<?php

namespace App\Http\Controllers;

use App\Colecionavel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ColecionavelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $colecionaveis = Colecionavel::all();

        return view('colecionaveis.index')->with('colecionaveis', $colecionaveis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('colecionaveis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        Colecionavel::create($request->all());

        session()->flash('mensagem', 'Colecionavel Inserido com sucesso!');

        return redirect()->route('colecionaveis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Colecionavel $colecionavei
     * @return Response
     */
    public function show(Colecionavel $colecionavei)
    {
        return view('colecionaveis.show')->with('colecionavel', $colecionavei);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Colecionavel $colecionavei
     * @return Response
     */
    public function edit(Colecionavel $colecionavei)
    {
        return view('colecionaveis.edit')->with('colecionavel', $colecionavei);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Colecionavel $colecionavei
     * @return Response
     */
    public function update(Request $request, Colecionavel $colecionavei)
    {
        $colecionavei->fill($request->all());
        $colecionavei->save();

        session()->flash('mensagem', 'Colecionavel Atualizado com sucesso!');

        return redirect()->route('colecionaveis.show', $colecionavei->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Colecionavel $colecionavei
     * @return Response
     * @throws Exception
     */
    public function destroy(Colecionavel $colecionavei)
    {
        $colecionavei->delete();
        session()->flash('mensagem', 'Colecionavel excluido com sucesso!');

        return redirect()->route('colecionaveis.index');
    }
}

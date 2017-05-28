<?php

namespace livebull\Http\Controllers;

use Illuminate\Http\Request;
use livebull\CadAnimal;
use livebull\Http\Requests\RequestCadAnimal;
use livebull\Http\Requests;

class ControllerCadAnimal extends Controller
{
    private $cadAnimal;
    public function __construct(CadAnimal $cadAnimal)
    {
        $this->CadAnimal = $cadAnimal;
    }

    public function index()
    {
        $cadAnimais = $this->CadAnimal->all();
        return view('Animal.index',compact('cadAnimais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Animal.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestCadAnimal $request)
    {
        $this->CadAnimal->create($request->all());
        return redirect()->route('animal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RequestCadAnimal $request)
    {
        $busca = $request->input('search');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cadAnimal = $this->CadAnimal->where('CadAnimalId_PK',$id)->get()->first();
        return view('Animal.editar', compact('cadAnimal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestCadAnimal $request, $id)
    {
        $this->CadAnimal->where('CadAnimalId_PK',$id)->update($request->except('_token'));
        return redirect()->route('animal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $this->CadAnimal->where('CadAnimalId_PK',$id)->delete();
       return redirect()->route('animal.index');
    }
}

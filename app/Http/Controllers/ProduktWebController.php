<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Produkt;

class ProduktWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produkty = Produkt::all();

        return view('produkty.index', compact('produkty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produkty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produkt =  Produkt::create($request->all());
        return redirect('/produkty')->with('success', 'Produkt Zapisany!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Produkt::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produkt = Produkt::find($id);
        return view('produkty.edit', compact('produkt')); 
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

        $request->validate([
            'nazwa_produktu'=>'required',
            'cena_netto'=>'required',
            'podatek'=>'required',
            'opis'=>'required',
            'czy_usluga'=>'required'
        ]);
       
       $produkt = Produkt::find($id);   
       $produkt->update($request->all());

        return redirect('/produkty')->with('success', 'Produkt updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produkt = Produkt::find($id);
        $produkt->delete();

        return redirect('/produkty')->with('success', 'Produkt deleted!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Producent;

class ProducentWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producenci = Producent::all();

        return view('producenci.index', compact('producenci'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producenci.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producent =  Producent::create($request->all());
        return redirect('/producenci')->with('success', 'Producent Zapisany!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Producent::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producent = Producent::find($id);
       
        return view('producenci.edit', compact('producent')); 
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
            'nazwa_producenta'=>'required',
        ]);
        
    $producent = Producent::find($id);   
    $producent->update($request->all());
 
    return redirect('/producenci')->with('success', 'Producent updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producent = Producent::find($id);
        $producent->delete();

        return redirect('/producenci')->with('success', 'Producent deleted!');
    }
}

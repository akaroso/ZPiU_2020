<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
Use App\Models\Kategoria;
use App\Http\Controllers\Controller;

class KategoriaWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategoria = Kategoria::all();
        return view('kategorie.index', compact('kategoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kategorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategoria =  Kategoria::create($request->all());
        return redirect('/kategorie')->with('success', 'Kategoria zapisany!');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Kategoria::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $kategoria = Kategoria::find($id);
        return view('kategorie.edit', compact('kategoria'));
        //
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
        //
        $request->validate([
            'nazwa_kategoria'=>'required',

        ]);

       $kategoria = Kategoria::find($id);
       $kategoria->update($request->all());

        return redirect('/kategorie')->with('success', 'Kategoria zaktualizowany!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kategoria = Kategoria::find($id);
        $kategoria->delete();

        return redirect('/kategorie')->with('success', 'Kategoria usunięty!');
    }
}

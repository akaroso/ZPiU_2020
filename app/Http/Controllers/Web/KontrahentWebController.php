<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Kontrahent;
Use App\Models\Produkt;

class KontrahentWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontrahenci = Kontrahent::all();

        return view('kontrahenci.index', compact('kontrahenci'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontrahenci.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kontrahent =  Kontrahent::create($request->all());
        return redirect('/kontrahenci')->with('success', 'Kontrahent zapisany!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Kontrahent::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kontrahent = Kontrahent::find($id);
        return view('kontrahenci.edit', compact('kontrahent'));
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
            'nazwa_kontrahenta'=>'required',
            'nip'=>'required'
        ]);

       $kontrahent = Kontrahent::find($id);
       $kontrahent->update($request->all());

        return redirect('/kontrahenci')->with('success', 'Kontrahent zaktualizowany!');
    }

    public function cena()
    {
        $produkty = Produkt::all();
        $kontrahenci = Kontrahent::all();
        return view('kontrahenci.cena',compact('produkty','kontrahenci'));
    }

    public function saveforcustromer(Request $request)

    {
        $id = $request->get('id');
        $custromer = Kontrahent::firstWhere('id',$id);
             $produkt_id = $request -> get('produkt_id');

             $produkt = Produkt::firstWhere('id');
             $cena = $request->get('cena');
             $custromer->produkt_kontrahent()->attach($produkt_id,['cena'=>$cena]);
             $custromer -> save();
             return redirect('/kontrahenci')->with('success', 'Cena została zaktualizowana!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kontrahent = Kontrahent::find($id);
        $kontrahent->delete();

        return redirect('/kontrahenci')->with('success', 'Kontrahent usunięty!');
    }


    public function cennik($id)
    {
        $kontrahenci = Kontrahent::find($id);


        return view('kontrahenci.cennik', compact('kontrahenci'));
    }
}

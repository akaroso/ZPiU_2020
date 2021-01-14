<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Kontrahent;
use Illuminate\Http\Request;
Use App\Models\Produkt;

class CennikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontrahenci = Kontrahent::all();
        return view('cennik.index', compact('kontrahenci'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kontrahent  $kontrahent
     * @return \Illuminate\Http\Response
     */
    public function show($nip)
    {
        

        $Kontrahent = Kontrahent::where('nip',$nip)->first();
        $Kontrahent = $Kontrahent->load(['produkt_kontrahent']);

        $ProductsWithOtherPrice = [];

        foreach($Kontrahent['produkt_kontrahent'] as $product)
        {
            array_push($ProductsWithOtherPrice,$product['id']);
        }
        $products = Produkt::whereNotIn('id',$ProductsWithOtherPrice)->get();

      // response()->json(['products' => ['normal' => $products,'discounted'=> $Kontrahent['produkt_kontrahent']]], 200);
          $result = array_merge(['products' => [ $products, $Kontrahent['produkt_kontrahent']]]);
          return view('cennik.show', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kontrahent  $kontrahent
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontrahent $kontrahent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kontrahent  $kontrahent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kontrahent $kontrahent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kontrahent  $kontrahent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontrahent $kontrahent)
    {
        //
    }
}

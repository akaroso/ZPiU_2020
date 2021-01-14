<?php

namespace App\Http\Controllers\Api;

use App\Models\Kontrahent;
use Illuminate\Http\Request;
Use App\Models\Produkt;
use App\Http\Controllers\Controller;

class ProduktController extends Controller
{
    public function index()
    {
        return Produkt::all();
    }

    public function show($id)
    {
        return Produkt::find($id);
    }

    public function store(Request $request)
    {
        return Produkt::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Produkt = Produkt::findOrFail($id);
        $Produkt->update($request->all());

        return $Produkt;
    }

    public function delete(Request $request, $id)
    {
        $Produkt = Produkt::findOrFail($id);
        $Produkt->delete();

        return 204;
    }

    public function saveforcustromer(Request $request, $id)
    {
        $custromer = Kontrahent::firstWhere('id',$id);
             $produkt_id = $request -> get('produkt_id');
             $produkt = Produkt::firstWhere('id');
             $cena = $request->get('cena');
             $custromer->produkt_kontrahent()->attach($produkt_id,['cena'=>$cena]);
             $custromer -> save();
             return response()->json(['updated' => $custromer->load(['produkt_kontrahent'])], 200);


    }
}

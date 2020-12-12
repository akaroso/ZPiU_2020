<?php

namespace App\Http\Controllers;

use App\Models\Kontrahent;
use Illuminate\Http\Request;
Use App\Models\Produkt;

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
        $id_produkt = $request -> get('id_produkt');
        $produkt = Produkt::firstWhere('id',$id_produkt);
        $cena = $request->get('cena');
        $custromer->produkt_kontrahent()->attach($produkt,['cena'=>$cena]);
        $custromer -> save();
      //  $result = array_merge($custromer,$produkt_id);
      //  return $result;

        return response()->json(['updated' => $custromer->load(['produkt_kontrahent'])], 200);
        

    }
}

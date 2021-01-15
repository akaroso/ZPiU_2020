<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
Use App\Models\Kontrahent;
Use App\Models\Produkt;
use App\Http\Controllers\Controller;

class KontrahentController extends Controller
{
    public function index()
    {
        return Kontrahent::all();
    }

    public function show($id)
    {
        return Kontrahent::find($id);
    }

    public function show2($nip)
    {
     //   return response()->json('xd', 200);

        $Kontrahent = Kontrahent::where('nip',$nip)->first();
        $Kontrahent = $Kontrahent->load(['produkt_kontrahent']);

        $ProductsWithOtherPrice = [];

        $przeceniony =  [];

        foreach($Kontrahent['produkt_kontrahent'] as $product)
        {
            

            $przeceniony[] =  [
            'id'=>$product->id,
            'nazwa_produktu'=>$product->nazwa_produktu,
            'cena_netto'=>$product->pivot->cena,
            'stawka_VAT'=>$product->stawka_VAT,
            'jednostka_miary'=>$product->jednostka_miary,             
            'czy_usluga'=>$product->czy_usluga 
                            ];
         array_push($ProductsWithOtherPrice,$product['id']);                      

        }
        $products = Produkt::whereNotIn('id',$ProductsWithOtherPrice)->get();

      // response()->json(['products' => ['normal' => $products,'discounted'=> $Kontrahent['produkt_kontrahent']]], 200);
          $result = array_merge(['products' => [ $products, $przeceniony]]);
        return $result;



    }

    public function store(Request $request)
    {
        return Kontrahent::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Kontrahent = Kontrahent::findOrFail($id);
        $Kontrahent->update($request->all());

        return $Kontrahent;
    }

    public function delete(Request $request, $id)
    {
        $Kontrahent = Kontrahent::findOrFail($id);
        $Kontrahent->delete();

        return 204;
    }
}

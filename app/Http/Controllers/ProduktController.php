<?php

namespace App\Http\Controllers;

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
}

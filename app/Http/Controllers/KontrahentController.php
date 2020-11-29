<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Kontrahent;

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

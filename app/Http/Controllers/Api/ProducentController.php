<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
Use App\Models\Producent;
use App\Http\Controllers\Controller;

class ProducentController extends Controller
{
    public function index()
    {
        return Producent::all();
    }

    public function show($id)
    {
        return Producent::find($id);
    }

    public function store(Request $request)
    {
        return Producent::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Producent = Producent::findOrFail($id);
        $Producent->update($request->all());

        return $Producent;
    }

    public function delete(Request $request, $id)
    {
        $Producent = Producent::findOrFail($id);
        $Producent->delete();

        return 204;
    }
}

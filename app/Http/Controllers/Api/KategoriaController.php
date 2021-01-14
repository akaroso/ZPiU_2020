<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
Use App\Models\Kategoria;
use App\Http\Controllers\Controller;

class KategoriaController extends Controller
{

    public function index()
    {
        return Kategoria::all();
    }

    public function show($id)
    {
        return Kategoria::find($id);
    }

    public function store(Request $request)
    {
        return Kategoria::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Kategoria = Kategoria::findOrFail($id);
        $Kategoria->update($request->all());

        return $Kategoria;
    }

    public function delete(Request $request, $id)
    {
        $Kategoria = Kategoria::findOrFail($id);
        $Kategoria->delete();

        return 204;
    }

}

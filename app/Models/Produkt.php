<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produkt extends Model
{

    public $timestamps = false;

    public function kategorias()
    {
        return $this->belongsToMany('App\Models\Kategoria');
    }

    public function producents()
    {
        return $this->belongsToMany('App\Models\Producent');
    }

    public function kontrahents()
    {
        return $this->belongsToMany('App\Models\Kontrahent');
    }

    protected $fillable = ['nazwa_produktu', 'cena_netto', 'podatek', 'opis', 'czy_usluga'];



    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrahent extends Model
{

    public $timestamps = false;

    use HasFactory;
    protected $fillable = ['nazwa_kontrahenta','nip',];

    public function produkts()
    {
        return $this->belongsToMany('App\Models\Produkt');
        
    }

    public function produkt_kontrahent()
    {
        return $this->belongsToMany('App\Models\Produkt','produkt_kontrahents','produkt_kontrahent','id_produkt')->withPivot('cena');
        
    }
}

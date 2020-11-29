<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrahent extends Model
{
    use HasFactory;
    protected $fillable = ['nazwa_kontrahenta',];

    public function produkts()
    {
        return $this->belongsToMany('App\Models\Produkt');
    }
}

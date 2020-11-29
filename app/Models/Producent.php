<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producent extends Model
{
    protected $fillable = ['nazwa_producenta'];
    use HasFactory;

    public function produkts()
    {
        return $this->belongsToMany('App\Models\Produkt');
    }
}

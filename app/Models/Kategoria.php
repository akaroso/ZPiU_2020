<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    use HasFactory;
    protected $table = 'kategorias';
    protected $fillable = ['nazwa_kategoria'];
    
    public function produkts()
    {
        return $this->belongsToMany('App\Produkt');
    }

}

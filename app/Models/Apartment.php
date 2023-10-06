<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

     //Relazione one to many con modello Owner -  Apartments tab. dipendente
     public function owner(){
        return $this->belongsTo(Owner::class);
    }

     //Relazione one to many con modello Review -  Apartments tab. principale
     public function review(){
        return $this->hasMany(Review::class);
    }

}

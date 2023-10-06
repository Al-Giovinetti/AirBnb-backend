<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    //Relazione one to one con modello Apartment -  Reviews tab. dipendente
    public function apartments(){
        return $this->belongsTo(Apartment::class);
    }
}

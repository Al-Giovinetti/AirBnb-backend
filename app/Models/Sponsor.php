<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    //Relazione many to many con modello Apartment
    public function apartments(){
        return $this->belongsToMany(Apartment::class);
    }
}

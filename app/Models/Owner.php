<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    //Relazione one to one con modello User -  Owners tab. dipendente
    public function user(){
        return $this->belongsTo(User::class);
    }
}

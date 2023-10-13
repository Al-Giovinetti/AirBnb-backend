<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'age',
        'image',
        'bio',
    ];

    //Relazione one to one con modello User -  Owners tab. dipendente
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relazione one to many con modello Apartment -  Owners tab. principale
    public function apartments(){
        return $this->hasMany(Apartment::class);
    }

    //Relazione one to many con modello Message -  Owners tab. principale
    public function message(){
        return $this->hasMany(Message::class);
    }
}

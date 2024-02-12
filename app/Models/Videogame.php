<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Videogame extends Model
{
    use HasFactory;


    protected $fillable = ['title','description','year','author','img'];


//funzione di relazione tra la classe modello Videogame e la classe modello User inversa di una 1-N Ovvero una 1-1 one to one

public function user(): BelongsTo
{
    return $this-> belongsTo(User::class);
}

}

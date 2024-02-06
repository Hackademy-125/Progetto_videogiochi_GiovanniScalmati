<?php

namespace App\Http\Controllers;

use App\Models\Videogame;

use Illuminate\Http\Request;
use App\Http\Requests\VideogameRequest;

class VideogameController extends Controller
{
    // Funzione per la vista di indice dei videogiochi in piattaforma presi dal db 
public function videogameIndex(){
    $videogames = Videogame::all();
    return view ("vg.videogame_index", compact('videogames'));
}


    //funzione per l'inserimento del form per inserire videogioco

    public function videogameForm (){
        return view ("vg.videogame_form");
    }

// Funzione per la creazione della risorsa del videogioco 

public function videogameSubmit(VideogameRequest $request) {


$videogame = Videogame::create(
    [
    'title'=> $request->input('title'),
    'author'=> $request->input('author'),
    'year'=> $request->input('year'),
    'description'=> $request->input('description'),
    ]


);

return redirect(route('welcome'));
}
   
public function videogameDetail(Videogame $videogame){

    return view("vg.videogame_detail", compact("videogame"));


}



}



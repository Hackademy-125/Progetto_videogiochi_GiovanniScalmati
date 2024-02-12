<?php

namespace App\Http\Controllers;

use App\Models\Videogame;

use Illuminate\Http\Request;
use App\Http\Requests\VideogameRequest;
use PhpParser\Node\Stmt\Return_;

class VideogameController extends Controller
{

    // Inserimento del middlewar per la risorsa videogioco
   public function __construct()
   {
    $this->middleware("auth")->except("videogameIndex", "videogameDetail");
   }
   

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
    'img'=> $request->file('img')->store('public/img'),

    ]


);

return redirect(route('welcome'));
}
   
public function videogameDetail(Videogame $videogame){

    return view("vg.videogame_detail", compact("videogame"));


}

public function videogameEdit(Videogame $videogame){
return view("vg.videogame_edit", compact ("videogame"));

}

public function videogameUpdate(Videogame $videogame, Request $request){

$videogame->update(
    [
       $videogame->title = $request->title, 
       $videogame->author = $request->author, 
       $videogame->year = $request->year, 
       $videogame->description = $request->description, 

    ]
);
if($request->img){
    $videogame->update(
        [
            "img" => $request->file('img')->store('public/img')

        ]

    );

}
    return redirect(route("videogame.index"));
}

public function videogameDestroy (Videogame $videogame){
   $videogame->delete();
   return redirect(route("videogame.index")); 

}

}



<x-layout>
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <h1 class="display-1">Lista Videogiochi in Piattaforma</h1>
                <div class="row">
                    
                        @foreach ($videogames as $videogame)
                        <div class="col-md-4">
                        <div class="card my-3"  >
                            <img src="{{Storage::url($videogame->img)}}" class="card-img-top" alt="immagine-casuale">
                            <div class="card-body">
                              <h5 class="card-title">Title: {{$videogame->title}}</h5>
                              <h5 class="card-title">Author: {{$videogame->author}}</h5>
                              <a href="{{route("videogame.detail", compact("videogame"))}}" class="btn btn-primary">Vai al dettaglio</a>
                            </div>
                          </div>
                        </div>

                        @endforeach

                </div>
                
              
            </div>
        </div>
    </div>
</x-layout>
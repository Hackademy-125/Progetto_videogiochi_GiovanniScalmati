<x-layout>
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-12 col-md-3">
            <div class="card my-5"  >
                <img src="{{Storage::url($videogame->img)}}" class="card-img-top" alt="immagine-casuale">
                <div class="card-body">
                  <h5 class="card-title">Title: {{$videogame->title}}</h5>
                  <h5 class="card-title">Author: {{$videogame->author}}</h5>
                  <h5 class="card-title">Anno di pubblicazione: {{$videogame->year}}</h5>
                  <p>{{$videogame->description}}</p>
                  <a href="{{route("videogame.edit", compact("videogame"))}}" class="btn btn-warning">Modifica</a>
                  <form action="{{route("videogame.destroy", compact("videogame"))}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger my-3">Elimina il gioco</button>
                  </form>
                  {{-- <a href="{{route("videogame.detail", compact("videogame"))}}" class="btn btn-primary">Vai al dettaglio</a> --}}
                </div>
              </div>
        </div>
    </div>
</div>
</x-layout>
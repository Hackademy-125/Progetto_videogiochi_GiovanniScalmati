<x-layout>
<div class="container">
    <div class="rol">
        <div class="col-12">
            <div class="card "  >
                <img src="https://picsum.photos/200" class="card-img-top" alt="immagine-casuale">
                <div class="card-body">
                  <h5 class="card-title">Title: {{$videogame->title}}</h5>
                  <h5 class="card-title">Author: {{$videogame->author}}</h5>
                  <h5 class="card-title">Anno di pubblicazione: {{$videogame->year}}</h5>
                  <p>{{$videogame->description}}</p>
                  {{-- <a href="{{route("videogame.detail", compact("videogame"))}}" class="btn btn-primary">Vai al dettaglio</a> --}}
                </div>
              </div>
        </div>
    </div>
</div>
</x-layout>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route("welcome")}}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

          <a class="nav-link" href="{{route("videogame.index")}}">Indice Videogiochi</a>
          @guest

            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>                        
            <a class="nav-link" href="{{route("register")}}">Registrati</a>
            <a class="nav-link" href="{{route("login")}}">Accedi</a>     
                         
            @else
            <a class="nav-link" href="{{route('videogame.form')}}">Inserisci il tuo videogioco</a>        
             <a class="nav-link" href="">Benvenuto: {{Auth::user()->name}}</a>
              {{-- Form logout  --}}

            <form action="{{route("logout")}}" method="POST">
              @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
            </form>
            
            {{--Fine Form logout  --}}

            @endguest

        </ul>
      </div>
    </div>
  </nav>
<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="display-1 my-5 text-warning">
                    Modifica i dati del tuo videogioco
                </div>

                {{-- Errori di validazione  --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Inizio del form --}}
                <form method="POST" action="{{route("videogame.update", compact("videogame"))}}" enctype="multipart/form-data">
                    
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                      <label  class="form-label">Titolo</label>
                      <input type="text" class="form-control" name="title" value="{{$videogame->title}}" >
                      </div>
                      <div class="mb-3">
                        <label  class="form-label">Autore</label>
                        <input type="text" class="form-control" name="author" >
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Anno di pubblicazione</label>
                            <input type="number" class="form-control" name="year" >
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Scrivi la tua descrizione qui" id="floatingTextarea2" style="height: 100px" name='description'></textarea>
                                <label for="floatingTextarea2">Descrizione Videogioco</label>
                              </div>
                             
                              
                              <div class="input-group my-5">
                                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="img">
                              </div>
                    <button type="submit" class="btn btn-warning">Aggiorna</button>
                  </form>

                {{-- Fine del form  --}}
            </div>
        </div>
    </div> 
</x-layout>
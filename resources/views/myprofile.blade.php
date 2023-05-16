<x-layout>

  <div class="card_2">
    <h3>Nome Completo : <h6>{{Auth::user()->detail->nomecompleto}} </h6></h3>
    <h3>Città : <h6>{{Auth::user()->detail->citta}} </h6></h3>
    <h3>Username : <h6>{{Auth::user()->name}} </h6></h3>
    <h3>Email : <h6>{{Auth::user()->email}} </h6></h3>
  </div>
    
    
    <div class="container">
        <div class="row">
          @foreach (Auth::user()->articles as $article)
          <div class="card col-4 m-3" style="width: 10rem;">
            @if (!$article->foto)
            <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
            @else
            <img src="{{Storage::url($article->foto)}}" class="card-img-top" alt="...">
            @endif
              <div class="card-body">
                <h5 class="card-title">{{$article->nome}}</h5>
                <p class="card-title">{{$article->marca}}</p>
                <p class="card-title">{{$article->costo}} €</p>
                <p class="card-text">Inserito da: 
                  <a href="{{route('author.articles', $article->user_id)}}">{{$article->user->detail->nomecompleto}}</a>
                </p>
              </div>
          </div>
          @endforeach
        </div>
      </div>
</x-layout>
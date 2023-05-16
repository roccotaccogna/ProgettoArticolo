<x-layout>

    <h1> Benvenuto nel nostro blog articoli </h1>

    <div class="container">
        <div class="row">
          @foreach ($articles as $article)
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
                <p class="card-title">Inserito da: 
                  <a href="{{route('author.articles', $article->user)}}">{{$article->user->detail->nomecompleto}}</a>
                </p>
              </div>
          </div>
          @endforeach
          {{$articles->links('pagination::bootstrap-5')}}
        </div>
      </div>
</x-layout>
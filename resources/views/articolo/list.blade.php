<x-layout>
    <div class="container">
        <div class="row">
          @foreach ($article as $articles)
          <div class="card col-4 m-3" style="width: 10rem;">
            @if (!$articles->foto)
            <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
            @else
            <img src="{{Storage::url($articles->foto)}}" class="card-img-top" alt="...">
            @endif
              <div class="card-body">
                <h5 class="card-title">{{$articles->nome}}</h5>
                <p class="card-title">{{$articles->marca}}</p>
                <p class="card-title">{{$articles->costo}} €</p>
                <p class="card-title">Inserito da: 
                  <a href="{{route('author.articles', $articles->user_id)}}">{{$articles->user->detail->nomecompleto}}</a>
                </p>
              </div>
          </div>
          @endforeach
        </div>
      </div>
</x-layout>
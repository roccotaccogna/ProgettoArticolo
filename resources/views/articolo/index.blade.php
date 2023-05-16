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
                <a href="{{route('articolo.show',compact('articles'))}}" class="btn btn-success"> <i class="bi bi-eye"></i> Mostra </a>
                <a href="{{route('articolo.edit', compact('articles'))}}" class="btn btn-primary m-2"> <i class="bi bi-pencil-square"></i> Modifica </a>
                <form action="{{route('articolo.delete', compact('articles'))}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"> <i class="bi bi-trash3"></i> Elimina </button>
                </form>
              </div>
          </div>
          @endforeach
        </div>
      </div>

</x-layout>
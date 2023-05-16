<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 10rem;">
                    @if (!$articles->foto)
                    <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                    @else
                    <img src="{{Storage::url($articles->foto)}}" class="card-img-top" alt="...">
                    @endif
                      <div class="card-body">
                        <h5 class="card-title">{{$articles->nome}} </h5>
                        <p class="card-title">{{$articles->marca}} </p>
                        <p class="card-title">{{$articles->costo}} €</p>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</x-layout>
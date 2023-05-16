<x-layout>
    <form method="POST" action="{{route('articolo.update',compact('articles'))}}" enctype="multipart/form-data" class="login-form">
        @csrf
        @method('PUT')
        <div class="m-3 input-group">
          <input type="text" name="nome" class="form-control input" id="exampleInputNome1" placeholder=" " value="{{$articles->nome}}">
          <label for="exampleInputNome1" class="form-label placeholder"> Nome prodotto </label>
        </div>
    
        <div class="m-3 input-group">
          <input type="text" name="marca" class="form-control input" id="exampleInputMarca1" placeholder=" " value="{{$articles->marca}}">
          <label for="exampleInputMarca1" class="form-label placeholder"> Marca prodotto </label>
        </div>
    
        <div class="m-3 input-group">
            <input type="number" name="costo" class="form-control input" id="exampleInputCosto1" placeholder=" " value="{{$articles->costo}}">
            <label for="exampleInputCosto1" class="form-label placeholder"> Costo prodotto in € </label>
        </div>
    
        <div class="m-3">
            <label for="foto" class="form-label"> Foto prodotto:  </label>
            @if($articles->foto)
                <img src="{{Storage::url($articles->foto)}}" style="width:70px;" >
            
            @endif
            <input type="file" name="foto" class="form-control" id="foto">

            <button type="submit" class="btn btn-success m-3 butt"> Inserisci </button>
        </div> 
    
    </form>
</x-layout>
<h1> Inserisci Nuovo Articolo </h1>

<form method="POST" action="{{route('articolo.store')}}" enctype="multipart/form-data" class="login-form">
    @csrf
    <div class="m-3 input-group mt-5">
      <input type="text" name="nome" class="form-control input" id="exampleInputNome1" placeholder=" " value="{{old('nome')}}">
      <label for="exampleInputNome1" class="form-label placeholder"> Nome prodotto </label>
    </div>
    @error ('nome')
    <div class="alert alert-danger m-3" role="alert">
      {{$message}}
    </div>
    @enderror

    <div class="m-3 input-group">
      <input type="text" name="marca" class="form-control input" id="exampleInputMarca1" placeholder=" " value="{{old('marca')}}">
      <label for="exampleInputMarca1" class="form-label placeholder"> Marca prodotto </label>
    </div>
    @error ('marca')
    <div class="alert alert-danger m-3" role="alert">
      {{$message}}
    </div>
    @enderror

    <div class="m-3 input-group">
        <input type="number" name="costo" class="form-control input" id="exampleInputCosto1" placeholder=" " value="{{old('costo')}}">
        <label for="exampleInputCosto1" class="form-label placeholder"> Costo prodotto in € </label>
    </div>
    @error ('costo')
    <div class="alert alert-danger m-3" role="alert">
      {{$message}}
    </div>
    @enderror

    <div class="m-3">
        <label for="foto" class="form-label"> Foto prodotto </label>
        <input type="file" name="foto" class="form-control control" id="foto">

        <button type="submit" class="btn btn-success m-3 butt"> Inserisci </button>
    </div> 



</form>
<x-layout>

  <h1> Registrati </h1>

    <form action="{{route('register')}}" method="POST" class="login-form">
        @csrf
        <div class="mb-3 input-group">
          <input type="text" class="form-control input" id="exampleInputName2" aria-describedby="nameHelp" placeholder=" " name="nomecompleto">
          <label for="exampleInputName2" class="form-label placeholder"> Nome Completo </label>
        </div>

        <div class="mb-3 input-group">
            <input type="text" class="form-control input" id="exampleInputName1" aria-describedby="nameHelp" placeholder=" " name="name">
            <label for="exampleInputName1" class="form-label placeholder"> Username </label>
          </div>

          @error ('name')
          <div class="alert alert-danger m-2" role="alert">
            {{$message}}
          </div>
          @enderror

          <div class="mb-3 input-group">
            <input type="text" class="form-control input" id="exampleInputCity1" aria-describedby="cityHelp" placeholder=" " name="citta">
            <label for="exampleInputCity1" class="form-label placeholder"> Citta </label>
          </div>

        <div class="mb-3 input-group">
          <input type="email" class="form-control input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" " name="email">
          <label for="exampleInputEmail1" class="form-label placeholder"> Indirizzo Email </label>
        </div>

        <div class="mb-3 input-group">
          <input type="password" class="form-control input" id="exampleInputPassword1" placeholder=" " name="password">
          <label for="exampleInputPassword1" class="form-label placeholder"> Password </label>
        </div>

        <div class="mb-3 input-group">
            <input type="password" class="form-control input" id="exampleInputPassword1" placeholder=" " name="password_confirmation">
            <label for="exampleInputPassword1" class="form-label placeholder"> Conferma Password </label>
          </div>

        <button type="submit" class="btn btn-dark butt"> Registrati </button>
      </form>

</x-layout>
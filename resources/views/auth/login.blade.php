<x-layout>

  <h1>Login</h1>

    <form action="{{route('login')}}" method="POST" class="login-form">
        @csrf

        <div class="mb-3 input-group mt-5">
          <input type="email" class="form-control input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" " name="email">
          <label for="exampleInputEmail1" class="form-label placeholder"> Indirizzo Email </label>
        </div>

        <div class="mb-3 input-group">
          <input type="password" class="form-control input" id="exampleInputPassword1" placeholder=" " name="password">
          <label for="exampleInputPassword1" class="form-label placeholder"> Password </label>
        </div>

        <button type="submit" class="btn  butt"> Login </button>
      </form>
</x-layout>
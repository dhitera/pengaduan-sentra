<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@extends('layouts.main')

@section('container')
    
<main class="form-signin">
    <form action="{{ route('login') }}" method="POST">
        @csrf
      <h1 class="h3 mb-3 fw-normal">Login</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" autofocus required>
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
        <label for="floatingPassword">Sandi</label>
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" id="remember" name="remember"> Ingat Saya!
        </label>
      </div>
      <p class="mt-3 mb-3 text-muted">Belum punya akun? <a href="{{ route("register") }}">Registrasi disini!</a></p>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
  </main>

@endsection

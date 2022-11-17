<link rel="stylesheet" href="{{ asset('css/auth.css') }}">    
<style>
    .form-signin{
        max-width: 600px;
    }
</style>
@extends('layouts.main')

@section('container')
<main class="form-signin">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Registrasi Akun</h1>
        
        <div class="form-floating">
            <input type="text" class="form-control" id="nik" placeholder="name@example.com" name="nik">
            <label for="nik">Nomor Induk Kependudukan</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="nama" placeholder="name@example.com" name="name">
            <label for="nama">Nama Lengkap</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="telepon" placeholder="name@example.com" name="telepon">
            <label for="telepon">Nomor Telepon</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Sandi</label>
        </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Registrasi</button>
    </form>
</main>

@endsection
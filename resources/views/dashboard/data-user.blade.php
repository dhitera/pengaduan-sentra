@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data User</h1>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nomor Induk Kependudukan</th>
            <th scope="col">Nama</th>
            <th scope="col">Telepon</th>
            <th scope="col">Email</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->nik }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->telepon }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="deleteUser/{{ $user->id }}" class="btn btn-danger btn-sm"><i class="bi bi-x-circle-fill"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection
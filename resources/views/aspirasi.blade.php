@extends('layouts.main')

@section('container')
    <h1>Halaman Aspirasi</h1>
    @foreach ($aspiration as $aspirasi)
        <div class="mb-3" style="background-color: lightgray; border-radius: 8px;">
            <div class="ms-3 pt-2">
                <h5 class="float-end me-3">Status : 
                    @if ($aspirasi->status == 0)
                    <i class="text-danger">Belum Tuntas</i>
                    @elseif($aspirasi->status == 1)
                    <i class="text-success">Tuntas</i>
                    @endif
                </h5>
                <h3>| {{ $aspirasi->header }}</h3>
                <p><small>{{ substr($aspirasi->created_at,0,10) }}</small></p>
                <p>Dibuat oleh: <mark>{{ $aspirasi->user->name }}</mark> | Kategori: <mark>{{ $aspirasi->kategori->name }}</mark></p>
                <p class="pb-3 h4">{{ $aspirasi->body }}</p>
            </div>
        </div>
    @endforeach
@endsection
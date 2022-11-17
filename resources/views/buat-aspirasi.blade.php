@extends('layouts.main')

@section('container')
<h1>Buat Aspirasi</h1>

<div class="form-container" style="background-color: lightgray; border-radius: 8px;">
    <form action="{{ route('buat-aspirasi') }}" method="POST">
        @csrf
        <div class="form-contents ms-3 me-3">
            <div class="mb-3 pt-2">
                <label for="header" class="form-label h4">Judul</label>
                <input type="text" class="form-control" id="header" name="header">
            </div>
            <div class="mb-3">
                <label class="form-label h4">Kategori</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label h4">Isi Aspirasi</label>
                <textarea class="form-control" id="" rows="6" oninput="this.style.height = ''; this.style.height = this.scrollHeight +'px'" name="body"></textarea>
            </div>
            <button type="submit" class="btn btn-lg btn-primary mb-2 w-100">Kirim Apirasi</button>
        </div>
    </form>
</div>
@endsection
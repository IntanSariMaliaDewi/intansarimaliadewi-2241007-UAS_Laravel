@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Kategori</h1>
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection

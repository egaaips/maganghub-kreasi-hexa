@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Tambah Cast Baru</h2>
    
    <form action="/cast" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Umur</label>
            <input type="number" name="umur" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Bio</label>
            <textarea name="bio" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/cast" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
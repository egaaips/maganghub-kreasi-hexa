@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Detail Cast</h2>
    
    <div class="card">
        <div class="card-body">
            <h5>{{ $cast->nama }}</h5>
            <p><strong>Umur:</strong> {{ $cast->umur }} tahun</p>
            <p><strong>Bio:</strong></p>
            <p>{{ $cast->bio }}</p>
        </div>
    </div>
    
    <a href="/cast" class="btn btn-secondary mt-3">Kembali</a>
    <a href="/cast/{{ $cast->id }}/edit" class="btn btn-warning mt-3">Edit</a>
</div>
@endsection
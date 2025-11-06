@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Data Cast</h2>
    <a href="/cast/create" class="btn btn-primary mb-3">Tambah Cast</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Bio</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($casts as $key => $cast)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $cast->nama }}</td>
                <td>{{ $cast->umur }}</td>
                <td>{{ Str::limit($cast->bio, 50) }}</td>
                <td>
                    <a href="/cast/{{ $cast->id }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/cast/{{ $cast->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/cast/{{ $cast->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" 
                                onclick="return confirm('Yakin hapus data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
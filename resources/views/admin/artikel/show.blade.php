@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <h2>Detail Artikel</h2>

    <div class="card">
        <div class="card-header">
            <h3>{{ $artikel->title }}</h3> 
            <p>Kategori: {{ $artikel->category }}</p> 
        </div>
        <div class="card-body">
            @if ($artikel->image)
                <img src="{{ asset('storage/public/images/'.$artikel->image) }}" alt="Gambar" width="200" class="mb-3">
            @endif
            <p>{{ $artikel->content }}</p> 
        </div>
        {{-- <div class="card-footer">
            Status: <span class="badge {{ $artikel->status == 'Draft' ? 'bg-secondary' : 'bg-success' }}">{{ $artikel->status }}</span> 
        </div> --}}
    </div>

    <a href="{{ route('admin.artikel.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar Artikel</a>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <h2>{{ isset($artikel) ? 'Edit' : 'Buat' }} Artikel</h2>

    <form action="{{ isset($artikel) ? route('admin.artikel.update', $artikel->id) : route('admin.artikel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (isset($artikel))
            @method('PUT')
        @endif

        <div class="form-group mb-3">
            <label for="title">Judul Artikel</label>
            <input type="text" name="title" class="form-control" value="{{ $artikel->title ?? '' }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="category">Kategori</label>
            <select name="category" class="form-control" required>
                <option value="anjing" {{ (isset($artikel) && $artikel->category == 'anjing') ? 'selected' : '' }}>Anjing</option>
                <option value="kucing" {{ (isset($artikel) && $artikel->category == 'kucing') ? 'selected' : '' }}>Kucing</option>
                <option value="burung" {{ (isset($artikel) && $artikel->category == 'burung') ? 'selected' : '' }}>Burung</option>
                <option value="hamster" {{ (isset($artikel) && $artikel->category == 'hamster') ? 'selected' : '' }}>Hamster</option>
                <option value="kelinci" {{ (isset($artikel) && $artikel->category == 'kelinci') ? 'selected' : '' }}>Kelinci</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="content">Konten</label>
            <textarea name="content" rows="5" class="form-control" required>{{ $artikel->content ?? '' }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="image">Upload Gambar</label>
            <input type="file" name="image" class="form-control">
            @if (isset($artikel) && $artikel->image)
                <img src="{{ asset('storage/public/images/'.$artikel->image) }}" alt="Gambar" width="100">
            @endif
        </div>

        <div class="d-flex justify-content-between">
            {{-- <button type="submit" name="save_as" value="draft" class="btn btn-secondary">Save as Draft</button>? --}}
                <button type="submit" class="btn btn-primary btn-sm">Publish</button>
            
        </div>
        
    </form>
</div>
@endsection

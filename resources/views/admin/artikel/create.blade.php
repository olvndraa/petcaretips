@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <h2>{{ isset($artikel)}} Artikel</h2>

    <form action=" {{ route('admin.artikel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (isset($artikel))
            @method('PUT')
        @endif

        <div class="form-group mb-3">
            <label for="title">Judul Artikel</label>
            <input type="text" name="title" class="form-control" value="" required>
        </div>

        <div class="form-group mb-3">
            <label for="category">Kategori</label>
            <select name="category" class="form-control" required>
                <option value="anjing">Anjing</option>
                <option value="kucing">Kucing</option>
                <option value="burung">Burung</option>
                <option value="hamster">Hamster</option>
                <option value="kelinci">Kelinci</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="content">Konten</label>
            <textarea name="content" rows="5" class="form-control" required></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="image">Upload Gambar</label>
            <input type="file" name="image" class="form-control">
            @if (isset($artikel) && $artikel->image)
                <img src="{{ asset('storage/public/images/'.$artikel->image) }}" alt="Gambar" width="100">
            @endif
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" name="save_as" value="draft" class="btn btn-secondary">Save as Draft</button>
                <button type="submit" class="btn btn-primary btn-sm">Publish</button>
            
        </div>
        
    </form>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <h2>List Artikel</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary mb-3">+ Tulis Artikel</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Title</th>
                <th>Kategori</th>
                {{-- <th>Status</th> --}}
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artikels as $index => $artikel)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    @if($artikel->image)
                        <img src="{{ asset('storage/public/images/'.$artikel->image) }}" alt="Gambar" width="100">
                    @else
                        <small class="text-muted">No Image</small>
                    @endif
                </td>
                <td>
                    {{ $artikel->title }} <br>
                    <small>{{ $artikel->created_at->format('d M Y') }}</small>
                </td>
                <td>{{ ucfirst($artikel->category) }}</td>
                {{-- <td>
                    <span class="badge {{ $artikel->status == 'Draft' ? 'bg-secondary' : 'bg-success' }}">
                        {{ $artikel->status }}
                    </span>
                </td> --}}
                <td>
                    <a href="{{ route('admin.artikel.show', $artikel->id) }}" class="btn btn-secondary btn-sm">View</a>
                    <a href="{{ route('admin.artikel.edit', $artikel->id) }}" class="btn btn-success btn-sm">Edit</a>
                    <form action="{{ route('admin.artikel.destroy', $artikel->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artikel;

class ArtikelController extends Controller
{
    // public function search(Request $request)
    // {
    //     $query = $request->input('query');

    //     // Mencari artikel berdasarkan title atau content yang mengandung query
    //     $artikels = Artikel::where('title', 'LIKE', "%{$query}%")
    //                 ->orWhere('content', 'LIKE', "%{$query}%")
    //                 ->get();

    //     // Menampilkan hasil pencarian
    //     return view('search.results', ['artikels' => $artikels]);

    public function index()
    {
        $artikels = Artikel::all();
        return view('admin.dashboard', compact('artikels'));
    }
    public function indexx()
    {
        $artikels = Artikel::all();
        return view('artikelkucing', compact('artikels'));
    }
    // public function publish(Request $request, $id)
    // {
    //     // Temukan artikel berdasarkan ID
    //     $artikel = Artikel::findOrFail($id);

    //     $artikel->status = 'Published';
    //     $artikel->save();

    //     return redirect()->route('artikel.show', $artikel->id)->with('success', 'Artikel berhasil diterbitkan');
    // }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.show', compact('artikel')); // Kirim data artikel ke view
    }
    
    public function showPublished($id)
    {
        $artikel = Artikel::where('status', 'Published')->findOrFail($id); 
        return view('artikel', compact('artikel')); // Kirim data artikel ke view artikel.blade.php
    }


    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $file_name = $request->title . '.' . $request->file('image')->getClientOriginalExtension();
        $imagePath = $request->file('image')->storeAs('public/images', $file_name);

        // if ($request->input('save_as') == 'publish') {
        //     $status = 'Published';
        // } else {
        //     $status = 'Draft';
        // }

        $artikel = Artikel::create([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
            'image' => $file_name,
            // 'status' => $request->input('save_as') == 'publish' ? 'Published' : 'Draft',
            // 'status' => $status,
        ]);
        // dd($request->all());
        // if ($artikel->status == 'Published') {
        //     return redirect()->route('artikel.show', $artikel->id)->with('success', 'Artikel berhasil diterbitkan');
        // } else {
        //     return redirect()->route('admin.dashboard')->with('success', 'Artikel disimpan sebagai draft');
        // }
        return redirect()->route('admin.dashboard')->with('success', 'Artikel berhasil ditambahkan');
    }

    public function edit($id)
    {
        $artikel = Artikel::find($id);
        return view('admin.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'status' => $request->input('save_as') == 'publish' ? 'Published' : 'Draft',
        ]);

        $artikel = Artikel::find($id);

        if ($request->hasFile('image')) {
            if ($artikel->image && file_exists(storage_path('app/public/images/' . $artikel->image))) {
                unlink(storage_path('app/public/images/' . $artikel->image));
            }

            $file_name = $request->title . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('public/images', $file_name);

            $artikel->image = $file_name;
        }

        $artikel->title = $request->title;
        $artikel->content = $request->content;
        $artikel->category = $request->category;

        $artikel->save();

        return redirect()->route('admin.dashboard')->with('success', 'Artikel berhasil diupdate.');
    }
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        if ($artikel->image && file_exists(public_path('images/' . $artikel->image))) {
            unlink(public_path('images/' . $artikel->image));
        }
        $artikel->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Artikel berhasil dihapus.');
    }
}

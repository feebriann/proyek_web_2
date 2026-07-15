<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }

    public function create()
    {
        return view('albums.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'genre' => 'required',
            'cover_image' => 'required|url',
            'spotify_link' => 'required|url'
        ]);

        Album::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'genre' => $request->genre,
            'cover_image' => $request->cover_image,
            'spotify_link' => $request->spotify_link
        ]);
        return redirect()->route('albums.index');
    }

    public function show($id)
    {
        // Menambahkan with('reviews.user') untuk memuat data review dan user
        $album = Album::with('reviews.user')->findOrFail($id);
        return view('albums.show', compact('album'));
    }

    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        $album->delete();
        return redirect()->route('albums.index');
    }

    public function edit($id) {
        $album = Album::findOrFail($id);
        return view('albums.edit', compact('album')); // Anda harus membuat file edit.blade.php nanti
    }

    // FUNGSI UPDATE DITAMBAHKAN DI SINI UNTUK MEMPERBAIKI ERROR
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'genre' => 'required',
            'cover_image' => 'required|url',
            'spotify_link' => 'required|url'
        ]);

        $album = Album::findOrFail($id);
        
        $album->update([
            'title' => $request->title,
            'artist' => $request->artist,
            'genre' => $request->genre,
            'cover_image' => $request->cover_image,
            'spotify_link' => $request->spotify_link
        ]);

        return redirect()->route('albums.index');
    }
}
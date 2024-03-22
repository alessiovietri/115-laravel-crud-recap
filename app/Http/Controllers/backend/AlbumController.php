<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();

        return view('pages.albumsView.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.albumsView.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:128',
            'artist' => 'required|max:128',
            'genre' => 'required|max:32',
            'cover' => 'nullable|max:1024',
            'release_date' => 'nullable|date',
            'only_digital' => 'nullable|boolean',
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo non può essere più lungo di 128 caratteri',
        ]);

        $album = new Album();
        $album->fill($validatedData);
        $album->save();
        /* OPPURE */
        // $album = Album::create($validatedData);

        return redirect()->route('albums.index');
        // return redirect()->route('albums.show', ['album' => $album->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        //
    }
}

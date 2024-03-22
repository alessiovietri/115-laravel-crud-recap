<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Album;

// Requests
use App\Http\Requests\StoreAlbumRequest;

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
    public function store(StoreAlbumRequest $request)
    {
        $validatedData = $request->validated();

        /*
            Task 2 di store: inserimento nuovo album
        */
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

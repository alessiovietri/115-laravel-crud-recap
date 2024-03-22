<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Pasta;
use Illuminate\Http\Request;

class PastaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pastas = Pasta::All();

        return view('pages.pastasView.index', compact('pastas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.pastasView.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->all();


        $newPasta = new Pasta();
        $newPasta->fill($formData);


        // $newPasta->title = $formData['title'];
        // $newPasta->description = $formData['description'];
        // $newPasta->type = $formData['type'];
        // $newPasta->image = $formData['image'];
        // $newPasta->cooking_time = $formData['cooking_time'];
        // $newPasta->weight = $formData['weight'];

        $newPasta->save();

        return redirect()->route('pastas.show', ['pasta' => $newPasta->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasta $pasta)
    {
        // $pasta = Pasta::find($id);

        return view('pages.pastasView.show', compact('pasta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

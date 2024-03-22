@extends('layouts.app')

@section('title', 'La Molisana | Create Create')

@section('main')
    <main>
        <h2>Crea un nuovo prodotto</h2>

        <div class="container">
            <form action="{{ route('pastas.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">titolo</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        id="title"
                    />
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>


                <div class="mb-3">
                    <label for="type" class="form-label">tipo</label>
                    <input
                        type="text"
                        class="form-control"
                        name="type"
                        id="type"
                    />
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">immagine</label>
                    <input
                        type="text"
                        class="form-control"
                        name="image"
                        id="image"
                    />
                </div>

                <div class="mb-3">
                    <label for="cooking_time" class="form-label">Cottura</label>
                    <input
                        type="text"
                        class="form-control"
                        name="cooking_time"
                        id="cooking_time"
                    />
                </div>

                <div class="mb-3">
                    <label for="weight" class="form-label">Peso</label>
                    <input
                        type="text"
                        class="form-control"
                        name="weight"
                        id="weight"
                    />
                </div>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Crea
                </button>


            </form>
        </div>
    </main>
@endsection

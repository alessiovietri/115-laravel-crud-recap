@extends('layouts.app')

@section('title', 'Aggiungi album')

@section('main')
    <main>
        <h2>Crea un nuovo album</h2>

        <div class="container">
            <form action="{{ route('albums.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">
                        Titolo
                        <span class="text-danger">*</span>
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        id="title"
                        required
                        maxlength="128"
                    />
                </div>

                <div class="mb-3">
                    <label for="artist" class="form-label">
                        Artista
                        <span class="text-danger">*</span>
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        name="artist"
                        id="artist"
                        required
                        maxlength="128"
                    />
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label">
                        Genere
                        <span class="text-danger">*</span>
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        name="genre"
                        id="genre"
                        required
                        maxlength="32"
                    />
                </div>

                <div class="mb-3">
                    <label for="cover" class="form-label">
                        Copertina
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        name="cover"
                        id="cover"
                        maxlength="1024"
                    />
                </div>

                <div class="mb-3">
                    <label for="release_date" class="form-label">Data di rilascio</label>
                    <input
                        type="date"
                        class="form-control"
                        name="release_date"
                        id="release_date"
                    />
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            value="0" id="only_digital" name="only_digital">
                        <label class="form-check-label" for="only_digital">
                            Sia fisico che digitale
                        </label>
                    </div>
                </div>

                <button
                    type="submit"
                    class="btn btn-success w-100"
                >
                    Aggiungi
                </button>

            </form>
        </div>
    </main>
@endsection

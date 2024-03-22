@extends('layouts.app')

@section('title', 'Aggiungi album')

@section('main')
    <main>
        <h2>Crea un nuovo album</h2>

        <div class="container">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('albums.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">
                        Titolo
                        <span class="text-danger">*</span>
                    </label>
                    <input
                        type="text"
                        class="form-control @error ('title') is-invalid @enderror"
                        name="title"
                        id="title"
                        required
                        maxlength="128"
                        value="{{ old('title') }}"
                    />

                    @error('title')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="artist" class="form-label">
                        Artista
                        <span class="text-danger">*</span>
                    </label>
                    <input
                        type="text"
                        class="form-control @error ('artist') is-invalid @enderror"
                        name="artist"
                        id="artist"
                        required
                        maxlength="128"
                        value="{{ old('artist') }}"
                    />

                    @error('artist')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label">
                        Genere
                        <span class="text-danger">*</span>
                    </label>
                    <input
                        type="text"
                        class="form-control @error ('genre') is-invalid @enderror"
                        name="genre"
                        id="genre"
                        required
                        maxlength="32"
                        value="{{ old('genre') }}"
                    />

                    @error('genre')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="cover" class="form-label">
                        Copertina
                    </label>
                    <input
                        type="text"
                        class="form-control @error ('cover') is-invalid @enderror"
                        name="cover"
                        id="cover"
                        maxlength="1024"
                        value="{{ old('cover') }}"
                    />

                    @error('cover')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="release_date" class="form-label">Data di rilascio</label>
                    <input
                        type="date"
                        class="form-control @error ('release_date') is-invalid @enderror"
                        name="release_date"
                        id="release_date"
                        value="{{ old('release_date') }}"
                    />

                    @error('release_date')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            value="0"
                            id="only_digital"
                            name="only_digital"
                            @if (old('only_digital') != null)
                                checked
                            @endif
                            >
                        <label class="form-check-label" for="only_digital">
                            Sia fisico che digitale
                        </label>
                    </div>

                    @error('only_digital')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
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

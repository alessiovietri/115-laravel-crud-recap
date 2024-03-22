@extends('layouts.app')

@section('title', 'Tutti gli album')

@section('main')
    <main>
        <h2>Index di Album</h2>

        <div class="mb-3">
            <a href="{{ route('albums.create') }}" class="btn btn-success w-100">
                + Aggiungi
            </a>
        </div>

        <div class="table-responsive">

            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Artista</th>
                        <th scope="col">Genere</th>
                        <th scope="col">Data rilascio</th>
                        <th scope="col">Solo digitale?</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($albums as $item)
                        <tr>
                            <td>
                                {{ $item->id}}
                            </td>
                            <td>
                                {{ $item->title }}
                            </td>
                            <td>
                                {{ $item->artist }}
                            </td>
                            <td>
                                {{ $item->genre }}
                            </td>
                            <td>
                                {{ $item->release_date != null ? $item->release_date : '-'  }}
                            </td>
                            <td>
                                {{ $item->only_digital == true ? 'SI' : 'NO' }}
                            </td>
                            <td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </main>
@endsection

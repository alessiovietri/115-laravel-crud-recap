@extends('layouts.app')

@section('title', 'La Molisana | Read Index')

@section('main')
    <main>
        <h2>Index di Pastas</h2>

        <div class="table-responsive">

            <a
                class="btn btn-primary"
                href="{{ route('pastas.create') }}"
                >Crea prodotto</a
            >


            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Src</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Cottura</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Azioni</th>
                        {{-- <th scope="col">Descrizione</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pastas as $item)
                        <tr class="">
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->image }}</td>
                            <td>
                                <a href="{{ route('pastas.show', ['pasta' => $item['id'] ] ) }}">
                                    {{ $item->title }}
                                </a>
                            </td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->cooking_time }}</td>
                            <td>{{ $item->weight }}</td>
                            <td>
                                <button class="btn btn-primary">
                                    edit
                                </button>
                                <button class="btn btn-primary">
                                    delete
                                </button>
                            </td>
                            {{-- <td>{{ $item['descrizione'] }}</td> --}}
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


    </main>
@endsection

@extends('layouts.app')

@section('title', 'DC Comics | Read Index')

@section('main')
    <main>

        <h1>Tutti i fumetti</h1>


        <div class="table-responsive">

            <a href="{{ route('comics.create') }}" class="btn btn-primary">Crea fumetto</a>


            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">title</th>
                        {{-- <th scope="col">description</th> --}}
                        <th scope="col">thumb</th>
                        <th scope="col">price</th>
                        <th scope="col">series</th>
                        <th scope="col">sale_date</th>
                        <th scope="col">type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($comics as $item)
                        <tr class="">
                            <td>{{ $item->id }}</td>
                            <td scope="row">
                                <a href="{{ route('comics.show', $item->id) }}">
                                    {{ $item->title }}</a>
                            </td>
                            {{-- <td>{{ $item->description }}</td> --}}
                            <td>{{ $item->thumb }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->series }}</td>
                            <td>{{ $item->sale_date }}</td>
                            <td>{{ $item->type }}</td>
                            <td>
                                <form action="{{ route('comics.destroy', $item->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit">
                                        Elimina
                                    </button>

                                </form>

                                <a
                                 class="btn btn-primary"
                                 href="{{ route('comics.edit', $item->id) }}">
                                    Modifica
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>



    </main>
@endsection

@extends('layouts.app')

@section('title', 'La Molisana | Read Show')

@section('main')
    <main>
        <h2>{{ $pasta->title }}</h2>

        <p>
            {{ $pasta->description }}
        </p>



    </main>
@endsection

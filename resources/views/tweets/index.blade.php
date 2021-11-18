@extends('layouts.main')

@section('main')

    <h1>Tweets</h1>
    <main>
        @foreach ($tweets as $tweet)
            <section>
                <hr>
                <header>{{ $tweet->name }}</header>
                <div><a href="/tweets/{{ $tweet->id }}">{{ $tweet->text }}</div></a>
                <hr>
            </section>
        @endforeach
    </main>

@endsection

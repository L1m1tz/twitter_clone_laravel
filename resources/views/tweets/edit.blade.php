@extends('layouts.main')

@section('main')
    <h1>Edit Tweet</h1>

    <form action="/tweets/{{ $tweet->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="tweet-text">What do you want to change the tweet to? (25 Characters max)</label>
        </div>
        <div>
            <input name="text" maxlength="25" id="tweet-text" type="text" value="{{ $tweet->text }}">
            @if ($errors->has('text'))
                @foreach ($errors->get('text') as $message)
                    <pre>{{ $message }}</pre>
                @endforeach

            @endif
        </div>
        <div>
            <button>Edit Tweet</button>
        </div>
    </form>

@endsection

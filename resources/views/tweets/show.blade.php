@extends('layouts.main')



@section('main')
    <h1>{{ $tweet->name }}</h1>

    <form action="/comments?tweetid={{ $tweet->id }}" method="POST">
        @csrf
        <label for="comment">Add Comment</label>
        <input type="text" maxlength="25" name="text" id="comment">
        <button>Add Comment</button>
        @if ($errors->has('text'))
            @foreach ($errors->get('text') as $message)
                <pre>{{ $message }}</pre>
            @endforeach
        @endif
    </form>

    @foreach ($tweet->comments as $comment)
        <div>
            <hr>
            <p>{{ $comment->user->name }}</p>
            <p>{{ $comment->text }}</p>
            <hr>
        </div>
    @endforeach

@endsection

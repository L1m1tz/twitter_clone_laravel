<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Twitter Clone</title>
</head>

<body>
    <h1>Laravel </h1>
    <h2>Nav</h2>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
        @if (Auth::check())
            <li><a href="/tweets/create">Write a tweet</a></li>
        @endif
    </ul>
    @section('main')

    @show


</body>

</html>

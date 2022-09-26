<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="antialiased">
        <form action="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="text" placeholder="title" class="form-title">
            <input type="textarea" placeholder="description" class="form-description">
            <button class="form-button">Send</button>
        </form>

    </body>
</html>

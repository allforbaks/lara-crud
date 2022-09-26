<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Post list</h1>
    @if($message = Session::get('success'))

    <div class="alert alert-success">
        {{ $message }}
    </div>

    @endif
@foreach($posts as $post)

<tr>
    <td>{{ $post->title }}</td>
    <td>{{ $post->description }}</td>
</tr>
<br>
@endforeach

<a href="/create">create</a>
</body>
</html>
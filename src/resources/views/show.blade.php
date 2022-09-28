@extends('template')

@section('content')

<tr>
    <td>{{ $post->title }}</td>
    <td>{{ $post->description }}</td>
</tr>

<br>

<a href="{{ route('posts.index') }}">Home</a><br>

<a href="{{ route('posts.edit', $post->id) }}">Edit</a>

@endsection
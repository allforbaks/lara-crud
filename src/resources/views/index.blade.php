@extends('template')

@section('content')

    <h1>Post list</h1>
    @if($message = Session::get('success'))

    <div class="alert alert-success">
        {{ $message }}
    </div>

    @endif
@foreach($posts as $post)

<tr>
    <td>{{ $post->title }}</td><br>
    <td>{{ $post->description }}</td>
    <td>
        <form method="post" action="{{ route('posts.destroy', $post->id) }}">
            @csrf
            @method('DELETE')
            <a href="{{ route('posts.show', $post->id) }}">View</a>
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <input type="submit" value="Delete" />
        </form>
    </td>
</tr>
<br>
@endforeach

<a href="{{ route('posts.create') }}">create</a><br>

<div>
    {{ $posts->links() }}
</div>
@endsection
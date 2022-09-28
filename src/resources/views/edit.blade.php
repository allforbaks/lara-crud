@extends('template')

@section('content')
<form method="post" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>Post title</label>
    <input type="text" name="title" class="form-control" value="{{ $post->title }}" />
    <label>Post description</label>
    <input type="text" name="description" class="form-control" value="{{ $post->description }}" />
    <input type="hidden" name="hidden_id" value="{{ $post->id }}" />
    <button class="form-button">Send</button>
</form>
<br>
<a href="{{ route('posts.index') }}">Home</a>
@endsection
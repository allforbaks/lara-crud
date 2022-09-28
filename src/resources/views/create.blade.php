@extends('template')

@section('content')

<form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf
    <input type="text" name='title' placeholder="title" class="form-title">
    <input type="textarea" name='description' placeholder="description" class="form-description">
    <button class="form-button">Send</button>
</form>

@endsection

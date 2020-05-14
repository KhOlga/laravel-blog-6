@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>

        <img src="/images/{{ $post->image }}" alt="post_image" />
    </div>
@endsection

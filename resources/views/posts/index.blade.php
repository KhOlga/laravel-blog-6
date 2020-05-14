@extends('layouts.app')

@section('content')
    <div class="container">

        <a class="btn btn-secondary" href="{{ route('post.create') }}">Create new post</a>

        <br><br>

        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Status</th>
                <th>Operations</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            @if (count($posts))
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>
                            <a class="btn btn-link" href="{{ route('post.show', ['post'=> $post->id]) }}">
                                {{ $post->title }}
                            </a>
                        </td>
                        <td>
                            @if ($post->published_at)
                                <p class="text-success">Published</p>
                            @else
                                <p class="text-danger">Unpublished</p>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-secondary" href="{{ route('post.edit', ['post' => $post->id]) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('post.destroy', ['post' => $post->id]) }}">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection

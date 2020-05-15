@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Create new post</h3>

        <div class="row">
            <div class="col-md-offset-4 col-md-4">

                <form method="post" action="{{ route('post.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" />

                        @error('title')
                            <p class=" text-danger">{{ $errors->first('title') }}</p>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" />

                        @error('slug')
                            <p class=" text-danger">{{ $errors->first('slug') }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content"></textarea>

                        @error('content')
                            <p class=" text-danger">{{ $errors->first('content') }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" />

                        @error('image')
                            <p class=" text-danger">{{ $errors->first('image') }}</p>
                        @enderror
                    </div>

                    <input type="submit" value="Submit" class="btn btn-success" />
                </form>

            </div>
        </div>
    </div>
@endsection

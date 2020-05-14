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
                        <input type="text" class="form-control" id="title" name="title" />
                    </div>

                    <div class="form-group">
                        <label for="title">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" />
                    </div>

                    <div class="form-group">
                        <label for="body">Content</label>
                        <textarea class="form-control" id="content" name="content"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="title">Image</label>
                        <input type="text" class="form-control" id="image" name="image" />
                    </div>

                    <input type="submit" value="Submit" class="btn btn-success" />
                </form>

            </div>
        </div>
    </div>
@endsection

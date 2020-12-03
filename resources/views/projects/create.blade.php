@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('projects.store') }}" @submit="onSubmit">
            @method('POST')
            @csrf

            <div class="control">
                <label for="name" class="label">Project Name</label>
                <input type="text" id="name" name="name" class="input" v-model="name">
            </div>

            <div class="control">
                <label for="description" class="label">Project Description</label>
                <input type="text" id="description" name="description" class="input" v-model="description">
            </div>

            <div class="control">
                <button class="button is-primary">Create</button>
            </div>

        </form>
        <hr style="margin-top: 30px; margin-bottom: 30px; padding-top: 1em; background: #c0e3de;">
        @include('projects.list')
    </div>
@endsection





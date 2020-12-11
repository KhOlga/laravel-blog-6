@extends('layouts.app')

@section('content')
    <div class="container">

        <form method="POST" action="{{ route('projects.store') }}" @submit="onSubmit" @keydown="form.errors.clear($event.target.name)">
            @method('POST')
            @csrf

            <div class="control">
                <label for="name" class="label">Project Name</label>
                <input type="text" id="name" name="name" class="input" v-model="form.name">

                <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
            </div>

            <div class="control">
                <label for="description" class="label">Project Description</label>
                <input type="text" id="description" name="description" class="input" v-model="form.description">

                <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
            </div>
            {{--TODO: add class="is-loading" --}}
            <div class="control">
                <button class="button is-primary" :disabled="form.errors.any()">Create</button>
            </div>

        </form>
        <hr style="margin-top: 30px; margin-bottom: 30px; padding-top: 1em; background: #c0e3de;">
        @include('projects.list')
    </div>
@endsection

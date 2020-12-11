@extends('layouts.app')

@section('content')
    <div class="container">

        <form method="POST" action="{{ route('projects.store') }}" @submit="onSubmit" @keydown="form.errors.clear($event.target.name)">
            @method('POST')
            @csrf

            <div class="control">
                <label for="name" class="label">Your coupon</label>
                <coupon v-model="coupon" id="coupon" name="coupon" class="input"></coupon>

                <span class="help is-danger" v-if="form.errors.has('coupon')" v-text="form.errors.get('coupon')"></span>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>Basic laravel application to show CVs</p>
                <br>
                <a href="/cv" class="btn btn-outline-primary">Show Curriculums</a>
            </div>
        </div>
    </div>
@endsection

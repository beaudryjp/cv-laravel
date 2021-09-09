@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/cv/{{ $curriculum->id }}" class="btn btn-outline-primary btn-sm">Go back</a>
                <a href="/cv/{{ $curriculum->id }}/data/edit/{{ $data->id }}" class="btn btn-outline-primary btn-sm">Edit</a>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger" style="margin-top:-30px; float: right">Delete</button>
                </form>
                <br>
                <h1 class="display-one">Personal data #{{ ucfirst($data->id) }}</h1>
                <p><b>{!! $data->address !!}</b> <br> {!! $data->postal_code !!} <br> {!! $data->country !!}</p>
                <hr>

                <br><br>

            </div>
        </div>
    </div>
@endsection

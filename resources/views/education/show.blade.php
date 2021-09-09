@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/cv/{{ $curriculum->id }}" class="btn btn-outline-primary btn-sm">Go back</a>
                <a href="/cv/{{ $curriculum->id }}/education/edit/{{ $education->id }}" class="btn btn-outline-primary btn-sm">Edit Study</a>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger" style="margin-top:-30px; float: right">Delete Study</button>
                </form>
                <br>
                <h1 class="display-one">Study #{{ ucfirst($education->id) }}</h1>
                <p><b>{!! $education->course !!}</b> / <i>{!! $education->location !!}</i></p>
                <p>{!! $education->date_start !!} - {!! $education->date_finish !!}</p>
                <p>{!! $education->description !!}</p>
                <p>Grade average: {!! $education->grade !!}</p>
                <hr>

                <br><br>

            </div>
        </div>
    </div>
@endsection

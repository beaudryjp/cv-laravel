@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/cv/{{ $curriculum->id }}/skill" class="btn btn-outline-primary btn-sm">Go back</a>
                <a href="/cv/{{ $curriculum->id }}/skill/edit/{{ $skill->id }}" class="btn btn-outline-primary btn-sm">Edit Skill</a>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger" style="margin-top:-30px; float: right">Delete Skill</button>
                </form>
                <br>
                <h1 class="display-one">Skill #{{ ucfirst($skill->id) }}</h1>
                <h3>{!! $skill->type_id !!}</h3>
                <p><b>{!! $skill->field !!}</b> / <i>{!! $skill->level !!}</i></p>
                <hr>

                <br><br>

            </div>
        </div>
    </div>
@endsection

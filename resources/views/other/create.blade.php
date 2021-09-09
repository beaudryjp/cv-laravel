@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/cv/{{ $curriculum->id }}" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit</h1>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <input type="text" id="cv_id" class="form-control" name="cv_id" hidden value="{{ $curriculum->id }}">
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Field</label>
                                <input type="text" id="field" class="form-control" name="field" placeholder="Enter the field" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Value</label>
                                <textarea id="value" class="form-control" name="value" placeholder="Enter the value" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

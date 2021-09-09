@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/cv/{{ $curriculum->id }}/work/{{ $work->id }}" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit</h1>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <input type="text" id="cv_id" class="form-control" name="cv_id" hidden value="{{ $curriculum->id }}">
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Position</label>
                                <input type="text" id="position" class="form-control" name="position" placeholder="Enter the position" required value="{{ $work->course }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Company</label>
                                <input type="text" id="company" class="form-control" name="company" placeholder="Enter the company" required value="{{ $work->company }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Date start</label>
                                <input type="text" id="date_start" class="form-control" name="date_start" placeholder="Enter the start date" required value="{{ $work->date_start }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Date finish</label>
                                <input type="text" id="date_finish" class="form-control" name="date_finish" placeholder="Enter the end date" required value="{{ $work->date_finish }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Description</label>
                                <textarea id="description" name="description" class="form-control" placeholder="Enter description" required>{{ $work->description  }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

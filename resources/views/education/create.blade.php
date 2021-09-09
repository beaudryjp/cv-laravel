@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/cv/{{ $curriculum->id }}" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit a Study</h1>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <input type="text" id="cv_id" class="form-control" name="cv_id" hidden value="{{ $curriculum->id }}">
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Course</label>
                                <input type="text" id="course" class="form-control" name="course" placeholder="Enter the course" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Location</label>
                                <input type="text" id="location" class="form-control" name="location" placeholder="Enter location" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Date start</label>
                                <input type="text" id="date_start" class="form-control" name="date_start" placeholder="Enter date_start" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Date finish</label>
                                <input type="text" id="date_finish" class="form-control" name="date_finish" placeholder="Enter date end" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Grade</label>
                                <input type="text" id="grade" class="form-control" name="grade" placeholder="Enter grade" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Description</label>
                                <textarea id="description" name="description" class="form-control" placeholder="Enter description"></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Create Study
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

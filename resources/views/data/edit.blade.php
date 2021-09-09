@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/cv/{{ $curriculum->id }}/education/{{ $education->id }}" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit a Study</h1>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <input type="text" id="cv_id" class="form-control" name="cv_id" hidden value="{{ $curriculum->id }}">
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Address</label>
                                <input type="text" id="address" class="form-control" name="address" placeholder="Enter the address" required value="{{ $data->address }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Postal Code</label>
                                <input type="text" id="postal_code" class="form-control" name="postal_code" placeholder="Enter a postal code" required value="{{ $data->postal_code }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Country</label>
                                <input type="text" id="country" class="form-control" name="country" placeholder="Enter a country" required value="{{ $data->country }}">
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

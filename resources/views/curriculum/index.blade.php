@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Curriculum Vitae</h1>
                    </div>
                    <div class="col-4">
                        <p>Create new a CV</p>
                        <a href="/cv/create/new" class="btn btn-primary btn-sm">Add CV</a>
                    </div>
                </div>
                @forelse($curriculums as $curriculum)
                    @foreach($curriculum as $item)
                        <b>{{ \App\Models\User::find($item->user_id)->name }}</b>
                    @endforeach
                    <ul>
                        <li><a href="/cv/{{ $item->id }}">{{ ucfirst($item->name) }}</a> </li>
                    </ul>
                @empty
                    <p class="text-warning">No CVs available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection

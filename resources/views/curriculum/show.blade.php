@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/cv" class="btn btn-outline-primary btn-sm">Go back</a>
                @if(Auth::id() == $curriculum->user_id)
                    <a href="/cv/edit/{{ $curriculum->id }}" class="btn btn-outline-primary btn-sm">Edit</a>
                    <form id="delete-frm" class="" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-sm btn-danger" style="margin-top:-30px; float: right">Delete</button>
                    </form>
                @endif

                <br>

                <h1 class="display-one">CV #{{ ucfirst($curriculum->id) }} - {{ ucfirst($curriculum->name) }}</h1>
                <hr>

                <h2 class="display-one">Personal Data</h2>
                @if(Auth::id() == $curriculum->user_id)
                    <a href="/cv/{{ $curriculum->id }}/other/create/new" class="btn btn-primary btn-sm"
                       style="float: right">Add some other data</a>
                @endif
                @forelse($data as $item)
                    <p style="tab-size: 4"><a
                            href="/cv/{{ $curriculum->id }}/data/{{ $item->id }}"><b>{{ ucfirst($item->address) }}</b><br> {{ $item->postal_code }}
                            <br> {{ $item->country }}</a></p>

                @empty
                    @if(Auth::id() == $curriculum->user_id)
                        <a href="/cv/{{ $curriculum->id }}/data/create/new" class="btn btn-primary btn-sm"
                           style="float: right">Add some personal data</a>
                    @endif
                    <p class="text-warning">No personal data available</p>
                @endforelse

                @foreach($other as $item)
                    <p style="tab-size: 4"><a
                            href="/cv/{{ $curriculum->id }}/other/{{ $item->id }}"><b>{{ ucfirst($item->field) }}</b><br> {{ $item->value }}
                        </a><br></p>
                @endforeach

                <h2 class="display-one">Education</h2>
                @if(Auth::id() == $curriculum->user_id)
                    <a href="/cv/{{ $curriculum->id }}/education/create/new" class="btn btn-primary btn-sm"
                       style="float: right">Add a new study</a>
                @endif
                @forelse($studies as $study)
                    <ul>
                        <li>
                            <a href="/cv/{{ $curriculum->id }}/education/{{ $study->id }}"><b>{{ ucfirst($study->course) }}</b>,
                                <i>{{ ucfirst($study->date_start) }} - {{ ucfirst($study->date_finish) }}</i></a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Studies available</p>
                @endforelse

                <h2 class="display-one">Work</h2>
                @if(Auth::id() == $curriculum->user_id)
                    <a href="/cv/{{ $curriculum->id }}/work/create/new" class="btn btn-primary btn-sm"
                       style="float: right">Add a new experience</a>
                @endif
                @forelse($jobs as $job)
                    <ul>
                        <li><a href="/cv/{{ $curriculum->id }}/work/{{ $job->id }}"><b>{{ ucfirst($job->position) }}</b>,
                                <i>{{ ucfirst($job->date_start) }} - {{ ucfirst($job->date_finish) }}</i></a></li>
                    </ul>
                @empty
                    <p class="text-warning">No jobs available</p>
                @endforelse

                <h2 class="display-one">Skills</h2>
                @if(Auth::id() == $curriculum->user_id)
                    <a href="/cv/{{ $curriculum->id }}/skill/create/new" class="btn btn-primary btn-sm"
                       style="float: right">Add a new skill</a>
                @endif
                @forelse($skills as $skill)
                    @foreach($skill as $item)
                        <b>{{ ucfirst($item->type_id) }}</b>
                        <ul>
                            <li>
                                <a href="/cv/{{ $curriculum->id }}/skill/{{ $item->id }}"><b>{{ ucfirst($item->field) }}</b>,<i>{{ ucfirst($item->level) }}</i></a>
                            </li>
                        </ul>
                    @endforeach
                @empty
                    <p class="text-warning">No skills available</p>
                @endforelse

                <h2 class="display-one">References</h2>
                @if(Auth::id() == $curriculum->user_id)
                    <a href="/cv/{{ $curriculum->id }}/reference/create/new" class="btn btn-primary btn-sm"
                       style="float: right">Add a new reference</a>
                @endif
                @forelse($references as $reference)
                    <ul>
                        <li>
                            <a href="/cv/{{ $curriculum->id }}/reference/{{ $reference->id }}"><b>{{ ucfirst($reference->description) }}</b><br><i>{{ $reference->link }}</i></a>
                        </li>
                    </ul>
                @empty
                    <p class="text-warning">No references available</p>
                @endforelse

                <h2 class="display-one">Interests</h2>
                @if(Auth::id() == $curriculum->user_id)
                    <a href="/cv/{{ $curriculum->id }}/interest/create/new" class="btn btn-primary btn-sm"
                       style="float: right">Add a new interest</a>
                @endif
                @forelse($interests as $interest)
                    <ul>
                        <li>
                            <a href="/cv/{{ $curriculum->id }}/interest/{{ $interest->id }}"><b>{{ ucfirst($interest->name) }}</b></a>
                        </li>
                    </ul>
                @empty
                    <p class="text-warning">No interests available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection

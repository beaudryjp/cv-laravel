<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Curriculum $curriculum)
    {
        return view('work.index', [
            'curriculum' => $curriculum,
            'jobs' => Work::all()->sortBy("date_finish")
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Curriculum $curriculum)
    {
        return view('work.create', [
            'curriculum' => $curriculum,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Curriculum $curriculum)
    {
        $work = Work::create([
            'cv_id' => $request->cv_id,
            'position' => $request->position,
            'company' => $request->company,
            'date_start' => $request->date_start,
            'date_finish' => $request->date_finish,
            'description' => $request->description
        ]);

        return redirect('cv/' . $curriculum->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Curriculum $curriculum, Work $work)
    {
        return view('work.show', [
            'curriculum' => $curriculum,
            'work' => $work
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Curriculum $curriculum, Work $work)
    {
        return view('work.edit', [
            'curriculum' => $curriculum,
            'work' => $work
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curriculum $curriculum, Work $work)
    {
        $work->update([
            'position' => $request->position,
            'company' => $request->company,
            'date_start' => $request->date_start,
            'date_finish' => $request->date_finish,
            'description' => $request->description
        ]);

        return redirect('cv/' . $curriculum->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculum $curriculum, Work $work)
    {
        $work->delete();
        return redirect('cv/' . $curriculum->id);
    }
}

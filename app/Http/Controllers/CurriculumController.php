<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Models\Education;
use App\Models\Interest;
use App\Models\Other;
use App\Models\PersonalData;
use App\Models\Reference;
use App\Models\Skill;
use App\Models\Work;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('curriculum.index', [
            'curriculums' => Curriculum::all()->groupBy('user_id'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curriculum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cv = Curriculum::create([
            'name' => $request->name,
            'user_id' => 1
        ]);

        //return $this->index();
        return redirect('cv/' . $cv->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function show(Curriculum $curriculum)
    {
        return view('curriculum.show', [
            'curriculum' => $curriculum,
            'data' => PersonalData::all(),
            'other' => Other::all(),
            'studies' => Education::all()->sortBy("date_finish"),
            'jobs' => Work::all()->sortBy("date_finish"),
            'skills' =>  Skill::all()->groupBy('type_id'),
            'references' => Reference::all(),
            'interests' => Interest::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function edit(Curriculum $curriculum)
    {
        return view('curriculum.edit', [
            'curriculum' => $curriculum
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curriculum $curriculum)
    {
        $curriculum->update([
            'name' => $request->name
        ]);
        //return $this->index();
        return redirect('cv/' . $curriculum->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculum $curriculum)
    {
        $curriculum->delete();
        return $this->index();
    }
}

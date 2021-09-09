<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Curriculum $curriculum)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Curriculum $curriculum)
    {
        return view('skill.create', [
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
        $skill = Skill::create([
            'cv_id' => $request->cv_id,
            'type_id' => $request->type_id,
            'field' => $request->field,
            'level' => $request->level
        ]);

        return redirect('cv/' . $curriculum->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Curriculum $curriculum, Skill $skill)
    {
        return view('skill.show', [
            'curriculum' => $curriculum,
            'work' => $skill
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Curriculum $curriculum, Skill $skill)
    {
        return view('skill.edit', [
            'curriculum' => $curriculum,
            'skill' => $skill
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curriculum $curriculum, Skill $skill)
    {
        $skill->update([
            'type_id' => $request->type_id,
            'field' => $request->field,
            'level' => $request->level
        ]);

        return redirect('cv/' . $curriculum->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculum $curriculum, Skill $skill)
    {
        $skill->delete();
        return redirect('cv/' . $curriculum->id);
    }
}

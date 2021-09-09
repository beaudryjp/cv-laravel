<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Curriculum $curriculum)
    {
        return view('education.index', [
            'curriculum' => $curriculum,
            'studies' => Education::all()->sortBy("date_finish")
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Curriculum $curriculum)
    {
        return view('education.create', [
            'curriculum' => $curriculum,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $education = Education::create([
            'cv_id' => $request->cv_id,
            'course' => $request->course,
            'location' => $request->location,
            'date_start' => $request->date_start,
            'date_finish' => $request->date_finish,
            'description' => $request->description,
            'grade' => $request->grade
        ]);

        return redirect('cv/' . $education->cv_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Curriculum $curriculum, Education $education)
    {
        return view('education.show', [
            'curriculum' => $curriculum,
            'education' => $education
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Curriculum $curriculum, Education $education)
    {
        return view('education.edit', [
            'curriculum' => $curriculum,
            'education' => $education
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        $education->update([
            'course' => $request->course,
            'location' => $request->location,
            'date_start' => $request->date_start,
            'date_finish' => $request->date_finish,
            'description' => $request->description,
            'grade' => $request->grade
        ]);

        return redirect('cv/' . $education->cv_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculum $curriculum, Education $education)
    {
        $education->delete();
        return redirect('cv/' . $curriculum->id);
    }
}

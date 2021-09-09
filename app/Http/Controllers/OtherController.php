<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Models\Other;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        return view('other.create', [
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
        Other::create([
            'cv_id' => $request->cv_id,
            'field' => $request->field,
            'value' => $request->value
        ]);

        return redirect('cv/' . $curriculum->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function show(Curriculum $curriculum, Other $other)
    {
        return view('other.show', [
            'curriculum' => $curriculum,
            'other' => $other
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function edit(Curriculum $curriculum, Other $other)
    {
        return view('other.edit', [
            'curriculum' => $curriculum,
            'other' => $other
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curriculum $curriculum, Other $other)
    {
        $other->update([
            'type_id' => $request->type_id,
            'field' => $request->field,
            'value' => $request->value
        ]);

        return redirect('cv/' . $curriculum->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculum $curriculum, Other $other)
    {
        $other->delete();
        return redirect('cv/' . $curriculum->id);
    }
}

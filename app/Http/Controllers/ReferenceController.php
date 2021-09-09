<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Models\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
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
        return view('reference.create', [
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
        Reference::create([
            'cv_id' => $request->cv_id,
            'description' => $request->description,
            'link' => $request->link
        ]);

        return redirect('cv/' . $curriculum->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function show(Curriculum $curriculum, Reference $reference)
    {
        return view('reference.show', [
            'curriculum' => $curriculum,
            'reference' => $reference
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function edit(Curriculum $curriculum, Reference $reference)
    {
        return view('reference.edit', [
            'curriculum' => $curriculum,
            'reference' => $reference
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curriculum $curriculum, Reference $reference)
    {
        $reference->update([
            'description' => $request->description,
            'link' => $request->link
        ]);

        return redirect('cv/' . $curriculum->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculum $curriculum, Reference $reference)
    {
        $reference->delete();
        return redirect('cv/' . $curriculum->id);
    }
}

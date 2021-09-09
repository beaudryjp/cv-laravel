<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
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
        return view('interest.create', [
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
        Interest::create([
            'cv_id' => $request->cv_id,
            'name' => $request->name
        ]);

        return redirect('cv/' . $curriculum->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function show(Curriculum $curriculum, Interest $interest)
    {
        return view('interest.show', [
            'curriculum' => $curriculum,
            'interest' => $interest
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function edit(Curriculum $curriculum, Interest $interest)
    {
        return view('interest.edit', [
            'curriculum' => $curriculum,
            'interest' => $interest
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curriculum $curriculum, Interest $interest)
    {
        $interest->update([
            'name' => $request->name
        ]);

        return redirect('cv/' . $curriculum->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculum $curriculum, Interest $interest)
    {
        $interest->delete();
        return redirect('cv/' . $curriculum->id);
    }
}

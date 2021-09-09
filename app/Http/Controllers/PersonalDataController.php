<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Models\PersonalData;
use Illuminate\Http\Request;

class PersonalDataController extends Controller
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
        return view('data.create', [
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
        PersonalData::create([
            'cv_id' => $request->cv_id,
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'country' => $request->country
        ]);

        return redirect('cv/' . $curriculum->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalData  $personalData
     * @return \Illuminate\Http\Response
     */
    public function show(Curriculum $curriculum, PersonalData $personalData)
    {
        return view('data.show', [
            'curriculum' => $curriculum,
            'data' => $personalData
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalData  $personalData
     * @return \Illuminate\Http\Response
     */
    public function edit(Curriculum $curriculum, PersonalData $personalData)
    {
        return view('data.edit', [
            'curriculum' => $curriculum,
            'data' => $personalData
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonalData  $personalData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curriculum $curriculum, PersonalData $personalData)
    {
        $personalData->update([
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'country' => $request->country
        ]);

        return redirect('cv/' . $curriculum->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalData  $personalData
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculum $curriculum, PersonalData $personalData)
    {
        $personalData->delete();
        return redirect('cv/' . $curriculum->id);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.experience.experience_index',[
            'experiences' => Experience::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.experience.experience_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $experience = new Experience;
        $experience->experience = $request->experience;
        $experience->work = $request->work;
        $experience->year = $request->year;
        $experience->icon = $request->icon;
        $experience->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        return view('backend.experience.experience_edit',[
            'experience' => $experience,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'experience'=> 'required',
            'work'=> 'required',
            'year'=> 'required',
            'icon'=> 'required'
        ]);

        $experience->experience = $request->experience;
        $experience->work = $request->work;
        $experience->year = $request->year;
        $experience->icon = $request->icon;
        $experience->save();

        $experience -> update($request->all());
        $notification = array(
            'message' => 'Experience Update Successfully.',
            'alert-type' => 'success',
        );
        return redirect()->route('experience.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        //
    }
}

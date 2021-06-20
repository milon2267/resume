<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $last_value = collect(request()->segments())->last();
        $last = Str::of($last_value)->replace('-', ' ');
        return view('backend.project.project_index',[
            'projects'=> Project::get(),
            'last' => $last
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.project.project_create',[
            'categories' => Category::orderBy('category_name', 'asc')->get()
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
        $project = new Project;
        $project->category_id = $request->category_id;
        $project->live_link = $request->live_link;
        $project->git_link = $request->git_link;
        $project->save();

        if($request->hasFile('project_file')){
            $image = $request->file('project_file');
            $ext = Str::slug($request->category_id).'-'.Str::random(3).'.'.
            $image->getClientOriginalExtension();
            $my_image = Project::findOrFail($project->id);
            $location = public_path('frontend_image/'.$project->created_at->format('Y/m/').$project->id.'/');
            File::makeDirectory($location,$mode=0777,true,true);
            Image::make($image)->save($location.$ext);
            $my_image->project_file = $ext;
            $my_image->save();
        }

        $notification = array(
            'message' => 'Project Add Successfully.',
            'alert-type' => 'success',
        );
        return back()->with($notification);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('backend.project.project_edit',[
            'project' => $project,
            'categories' => Category::orderBy('category_name', 'asc')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'category_id'=> 'required',
            'project_file' => 'required',
            'live_link' => 'required',
            'git_link' => 'required'
        ]);

        $project->category_id = $request->category_id;
        $project->live_link = $request->live_link;
        $project->git_link = $request->git_link;
        $project->save();

        if($request->hasFile('project_file')){
            $image = $request->file('project_file');
            $ext = Str::slug($request->category_id).'-'.Str::random(3).'.'.
            $image->getClientOriginalExtension();
            $my_image = Project::findOrFail($project->id);
            $location = public_path('frontend_image/'.$project->created_at->format('Y/m/').$project->id.'/'.$project->project_file);
            if(file_exists($location)){
                unlink($location);
            };
            $new_location = public_path('frontend_image/'.$project->created_at->format('Y/m/').$project->id.'/');
            File::makeDirectory($new_location,$mode=0777,true,true);
            Image::make($image)->save($new_location.$ext);
            $my_image->project_file = $ext;
            $my_image->save();
        }

        $notification = array(
            'message' => 'Project Update Successfully.',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        $notification = array(
            'message' => 'Project Delete Successfully.',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }
}

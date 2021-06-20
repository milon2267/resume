<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.about.about_index',[
            'abouts' => about::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.about_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = new About;
        $about->title = $request->title;
        $about->download_link = $request->download_link;
        $about->description = $request->description;
        $about->save();

        if($request->hasFile('image')){
            $image = $request->file('image');
            $ext = Str::slug($request->title).'-'.Str::random(3).'.'.
            $image->getClientOriginalExtension();
            $my_image = About::findOrFail($about->id);
            $location = public_path('frontend_image/'.$about->created_at->format('Y/m/').$about->id.'/'.$about->image);
            File::makeDirectory($location,$mode=0777,true,true);
            Image::make($image)->save($location.$ext);
            $my_image->image = $ext;
            $my_image->save();
        }

        $notification = array(
            'message' => 'About Add Successfully.',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('backend.about.about_edit',[
            'about' => $about,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title'=> 'required',
            'download_link' => 'required',
            'description' => 'required'
        ]);

        $about->title = $request->title;
        $about->download_link = $request->download_link;
        $about->description = $request->description;
        $about->save();

        if($request->hasFile('image')){
            $image = $request->file('image');
            $ext = Str::slug($request->title).'-'.Str::random(3).'.'.
            $image->getClientOriginalExtension();
            $my_image = About::findOrFail($about->id);
            $location = public_path('frontend_image/'.$about->created_at->format('Y/m/').$about->id.'/');
            if(file_exists($location)){
                unlink($location);
            };
            $new_location = public_path('frontend_image/'.$about->created_at->format('Y/m/').$about->id.'/');
            File::makeDirectory($new_location,$mode=0777,true,true);
            Image::make($image)->save($new_location.$ext);
            $my_image->image = $ext;
            $my_image->save();
        }

        $notification = array(
            'message' => 'About Update Successfully.',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}

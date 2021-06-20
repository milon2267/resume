<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.banner.banner',[

            'banners' => Banner::orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.banner_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bannerCount = Banner::count();
        if($bannerCount >0){
            Banner::where('status', 1 )->update([
                'status' => 2,
            ]);

            $request->validate([
                'title'=> 'required',
                'sub_title' => 'required',
            ]);
    
            $banner = new Banner;
            $banner->title = $request->title;
            $banner->sub_title = $request->sub_title;
            $banner->description = $request->description;
            $banner->button_1 = $request->button_1;
            $banner->button_2 = $request->button_2;
            $banner->save();
    
    
            if($request->hasFile('main_image')){
                $main_image = $request->file('main_image');
                $ext = Str::slug($request->title).'-'.Str::random(3).'.'.$main_image->getClientOriginalExtension();
    
                $my_image = Banner::findOrFail($banner->id);
                $location = public_path('frontend_image/'.$banner->created_at->format('Y/m/').$banner->id.'/');
    
                File::makeDirectory($location,$mode=0777,true,true);
    
                Image::make($main_image)->save($location.$ext);
                $my_image->main_image = $ext;
                $my_image->save();
            }
    
            if($request->hasFile('bg_image')){
                $bg_image = $request->file('bg_image');
                $ext = Str::slug($request->title).'-'.Str::random(3).'.'.$bg_image->getClientOriginalExtension();
    
                $my_image2 = Banner::findOrFail($banner->id);
                $location = public_path('frontend_image/'.$banner->created_at->format('Y/m/').$banner->id.'/');
    
                File::makeDirectory($location,$mode=0777,true,true);
    
                Image::make($bg_image)->save($location.$ext);
                $my_image2->bg_image = $ext;
                $my_image2->save();
            }
    
            return back();

            $notification = array(
                'message' => 'Banner Add Successfully.',
                'alert-type' => 'success',
            );
            return back()->with($notification);
        }
        else{
            $request->validate([
                'title'=> 'required',
                'sub_title' => 'required',
            ]);
    
            $banner = new Banner;
            $banner->title = $request->title;
            $banner->sub_title = $request->sub_title;
            $banner->description = $request->description;
            $banner->button_1 = $request->button_1;
            $banner->button_2 = $request->button_2;
            $banner->save();
    
    
            if($request->hasFile('main_image')){
                $main_image = $request->file('main_image');
                $ext = Str::slug($request->title).'-'.Str::random(3).'.'.$main_image->getClientOriginalExtension();
    
                $my_image = Banner::findOrFail($banner->id);
                $location = public_path('frontend_image/'.$banner->created_at->format('Y/m/').$banner->id.'/');
    
                File::makeDirectory($location,$mode=0777,true,true);
    
                Image::make($main_image)->save($location.$ext);
                $my_image->main_image = $ext;
                $my_image->save();
            }
    
            if($request->hasFile('bg_image')){
                $bg_image = $request->file('bg_image');
                $ext = Str::slug($request->title).'-'.Str::random(3).'.'.$bg_image->getClientOriginalExtension();
    
                $my_image2 = Banner::findOrFail($banner->id);
                $location = public_path('frontend_image/'.$banner->created_at->format('Y/m/').$banner->id.'/');
    
                File::makeDirectory($location,$mode=0777,true,true);
    
                Image::make($bg_image)->save($location.$ext);
                $my_image2->bg_image = $ext;
                $my_image2->save();
            }
    
            return back();

            $notification = array(
                'message' => 'Banner Add Successfully.',
                'alert-type' => 'success',
            );
            return back()->with($notification);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('backend.banner.banner_edit',[
            'banner' => $banner,
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        
        $banner->title = $request->title;
        $banner->sub_title = $request->sub_title;
        $banner->description = $request->description;
        $banner->button_1 = $request->button_1;
        $banner->button_2 = $request->button_2;
        $banner->save();

        if($request->hasFile('main_image')){
            $main_image = $request->file('main_image');
            $ext = Str::slug($request->title).'-'.Str::random(3).'.'.$main_image->getClientOriginalExtension();

            $my_image = Banner::findOrFail($banner->id);
            $location = public_path('frontend_image/'.$banner->created_at->format('Y/m/').$banner->id.'/'.$banner->main_image);

            if(file_exists($location)){
                unlink($location);
            };

            $new_location = public_path('frontend_image/'.$banner->created_at->format('Y/m/').$banner->id.'/');

            File::makeDirectory($new_location,$mode=0777,true,true);

            Image::make($main_image)->save($new_location.$ext);
            $my_image->main_image = $ext;
            $my_image->save();
        }

        if($request->hasFile('bg_image')){
            $bg_image = $request->file('bg_image');
            $ext = Str::slug($request->title).'-'.Str::random(3).'.'.$bg_image->getClientOriginalExtension();

            $my_image2 = Banner::findOrFail($banner->id);
            $location = public_path('frontend_image/'.$banner->created_at->format('Y/m/').$banner->id.'/'.$banner->bg_image);

            if(file_exists($location)){
                unlink($location);
            };

            $new_location_2 =  public_path('frontend_image/'.$banner->created_at->format('Y/m/').$banner->id.'/');

            File::makeDirectory($new_location_2,$mode=0777,true,true);

            Image::make($bg_image)->save($new_location_2.$ext);
            $my_image2->bg_image = $ext;
            $my_image2->save();
        }

        return back();

        $notification = array(
            'message' => 'Banner Add Successfully.',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        return back();

        $notification = array(
            'message' => 'Banner Update Successfully.',
            'alert-type' => 'success',
        );
        return redirect()->route('Banner.index')->with($notification);

        // return view('backend.banner.banner_destroy', [
        //     'trashes' => Banner::onlyTrashed()->latest()->simplePaginate(3),
        // ]);
    }

    public function TrashList(){
        return view('backend.banner.trash-list', [
            'trashed' => Banner::onlyTrashed()->get(),
        ]);
    }

    public function BannerRestore($id){
        Banner::onlyTrashed()->findOrFail($id)->restore();
        return back();

        $notification = array(
            'message' => 'Banner Update Successfully.',
            'alert-type' => 'success',
        );
        return redirect()->route('banner.index')->with($notification);
    }
    
    public function BannerDelete($id){
        Banner::onlyTrashed()->findOrFail($id)->forceDelete();
        return back();

        $notification = array(
            'message' => 'Banner Update Successfully.',
            'alert-type' => 'success',
        );
        return redirect()->route('banner.index')->with($notification);
    }

    public function ActiveStatus($id){
       Banner::where('status', 2)->update([
           'status' => 1,
       ]);

       Banner::where('id', $id)->update([
           'status' => 1,
       ]);

       return back();
    }
    public function DeactiveStatus($id){
       Banner::where('status', 1)->update([
           'status' => 2,
       ]);

       Banner::where('id', $id)->update([
           'status' => 1,
       ]);

       return back();
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.review.review_index',[
            'reviews' => Review::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.review.review_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = new Review;
        $review->name = $request->name;
        $review->country = $request->country;
        $review->summary = $request->summary;
        $review->star = $request->star;
        $review->save();

        if($request->hasFile('image')){
            $image = $request->file('image');
            $ext = Str::slug($request->name).'-'.Str::random(3).'.'.
            $image->getClientOriginalExtension();
            $my_image = Review::findOrFail($review->id);
            $location = public_path('frontend_image/review/'.$review->created_at->format('Y/m/').$review->id.'/');
            File::makeDirectory($location,$mode=0777,true,true);
            Image::make($image)->save($location.$ext);
            $my_image->image = $ext;
            $my_image->save();
        }

        $notification = array(
            'message' => 'Review Add Successfully.',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        return view('backend.review.review_edit',[
            'review' => $review
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        

        $review->name = $request->name;
        $review->country = $request->country;
        $review->summary = $request->summary;
        $review->star = $request->star;
        $review->save();

        if($request->hasFile('image')){
            $image = $request->file('image');
            $ext = Str::slug($request->name).'-'.Str::random(3).'.'.
            $image->getClientOriginalExtension();
            $my_image = Review::findOrFail($review->id);
            $location = public_path('frontend_image/review/'.$review->created_at->format('Y/m/').$review->id.'/'.$review->image);
            if(file_exists($location)){
                unlink($location);
            };
            $new_location = public_path('frontend_image/review/'.$review->created_at->format('Y/m/').$review->id.'/');
            File::makeDirectory($new_location,$mode=0777,true,true);
            Image::make($image)->save($new_location.$ext);
            $my_image->image = $ext;
            $my_image->save();
        }

        $notification = array(
            'message' => 'Review Update Successfully.',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();

        $notification = array(
            'message' => 'review Delete Successfully.',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }
}

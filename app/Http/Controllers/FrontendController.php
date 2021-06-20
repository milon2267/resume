<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\About;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Review;
use App\Models\Category;
use App\Models\Project;
use App\Models\Social;
use App\Models\Footer;
use App\Models\Contact;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function frontend(){

        $banner = Banner::where('status', 1)->first();
        $about = About::orderBy('id', 'desc')->first();
        $education = Education::orderBy('id', 'asc')->get();
        $experience = Experience::orderBy('id', 'asc')->get();
        $skill = Skill::orderBy('id', 'asc')->get();
        $service = Service::orderBy('id', 'asc')->get();
        $review = Review::orderBy('id', 'asc')->get();
        $category = Category::orderBy('id', 'desc')->get();
        $project = Project::with('category')->latest();
        $contact = Contact::orderBy('id', 'desc')->get();
        $social = Social::orderBy('id', 'desc')->first();
        $footer = Footer::first();

       return view('frontend.main',[
           'banners' => $banner,
           'abouts' => $about,
           'educations' => $education,
           'experiences' => $experience,
           'skills' => $skill,
           'services' => $service,
           'reviews' => $review,
           'categories'=> $category,
           'projects'=> $project,
           'contacts' => $contact,
           'socials' => $social,
           'footers' => $footer,
       ]);
   }

}

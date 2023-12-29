<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Content;
use App\Models\Social;
use App\Models\StoreOne;

class AboutUsController extends Controller
{
    public function index(){
        $contents = collect(Content::all());
        $basic = Content::where('type', 'basic')?->first();
        $socials = Social::where('type', 'socials')?->first();
        $about_img = StoreOne::select('image_two')->first();
        $mission_img = StoreOne::select('image_four')->first();
        $vission_img = StoreOne::select('image_five')->first();
        return view('aboutus', compact('contents', 'socials', 'about_img', 'mission_img', 'vission_img', 'basic'));
    }
}

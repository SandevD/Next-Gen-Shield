<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Social;
use App\Models\StoreOne;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $contents = collect(Content::all());
        $basic = Content::where('type', 'basic')?->first();
        $socials = Social::where('type', 'socials')?->first();
        $main_img = Storeone::select('image_one')->first();
        $about_img = Storeone::select('image_two')->first();
        $ww_img = Storeone::select('image_three')->first();
        return view('index', compact('contents', 'basic', 'socials', 'main_img', 'about_img', 'ww_img'));
    }
}

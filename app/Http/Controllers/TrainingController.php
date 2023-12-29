<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Social;
use App\Models\StoreOne;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index(){
        $contents = collect(Content::all());
        $basic = Content::where('type', 'basic')?->first();
        $socials = Social::where('type', 'socials')?->first();
        $training_img = StoreOne::select('image_seven')->first();
        return view('training', compact('training_img', 'contents', 'basic', 'socials'));
    }
}

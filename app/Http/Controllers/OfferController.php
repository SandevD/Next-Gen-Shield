<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Offer;
use App\Models\Social;
use App\Models\StoreOne;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(){
        $contents = collect(Content::all());
        $basic = Content::where('type', 'basic')?->first();
        $socials = Social::where('type', 'socials')?->first();
        $service_img = StoreOne::select('image_six')->first();
        $service = collect(Offer::all());
        return view('offer', compact('service_img', 'service', 'contents', 'basic', 'socials'));
    }
}

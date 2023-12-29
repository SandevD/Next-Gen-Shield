<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $basic = Content::where('type', 'basic')?->first();
        return view('dashboard.index', compact('basic'));
    }
}

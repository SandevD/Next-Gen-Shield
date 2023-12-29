<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Social;
use Exception;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index(){
        $socials = Social::where('type', 'socials')?->first();
        $basic = Content::where('type', 'basic')?->first();
        return view('dashboard.social', compact('socials', 'basic'));
    }

    public function update(Request $req){
        $req->validate([
            'facebook'=>'required',
            'instagram'=>'required',
            'flink'=>'required',
            'ilink'=>'required',
        ]);
        $socials = Social::where('type', 'socials')?->first();

        if ($socials == null) {
            $socials = new Social();
        }

        $data = array(
            'facebook' => $req->facebook,
            'instagram' => $req->instagram,
            'flink' => $req->flink,
            'ilink' => $req->ilink
        );

        $socials->value = $data;
        try {
            $socials->save();
        } catch (Exception $validated){
            $notify[] = ['error', $validated->getMessage()];
            return back()->withNotify($notify);
        } catch (Exception $e) {
            $notify[] = ['error', $e->getMessage()];
            return back()->withNotify($notify);
        }
        $notify[] = ['success', 'Socials Updated'];
        return back()->withNotify($notify);
    }
}

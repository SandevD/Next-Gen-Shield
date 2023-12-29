<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Content;
use App\Models\Social;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index(){
        $socials = Social::where('type', 'socials')?->first();
        $basic = Content::where('type', 'basic')?->first();
        $contents = collect(Content::all());
        return view('contactus', compact('socials', 'contents', 'basic'));
    }

    public function sendEmail(Request $req){
        $validated = $req->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required|email',
            'phone'=> 'required|min:9|max:10',
            'address'=> 'required|max:100',
            'company'=> 'max:50',
            'subject'=> 'required|max:50',
            'message'=> 'required|max:250'
        ]);
        $data=[
            'first_name'=>$req->first_name,
            'last_name'=>$req->last_name,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'address'=>$req->address,
            'company'=>$req->company,
            'subject'=>$req->subject,
            'message'=>$req->message
        ];

        try {
            Mail::to('sandev.net2@gmail.com')->send(new ContactMail($data));
        } catch (Exception $validated){
            $notify[] = ['error', $validated->getMessage()];
            return back()->withNotify($notify);
        } catch (Exception $e) {
            $notify[] = ['error', $e->getMessage()];
            return back()->withNotify($notify);
        }
        $notify[] = ['success', 'Thank You For Reaching Out'];
        return back()->withNotify($notify);
    }

}

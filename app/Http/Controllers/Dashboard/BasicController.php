<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Exception;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index(){
        $basic = Content::where('type', 'basic')?->first();
        return view('dashboard.basic', compact('basic'));
    }

    public function update(Request $req){
        $req->validate([
            'colour'=>'required',
            'colour'=>'required',
            'email'=>'required | email',
            'phone'=>'required | max:10 | min:9',
            'address'=>'required',
            'company'=>'required',
            'about_one'=>'required | max:500',
            'about_two'=>'max:500',
            'about_third'=>'max:500',
            'vission'=>'required | max:500',
            'mission'=>'required | max:500',
            'training_one' => 'required',
            'training_two' => 'required',
            'training_three' => 'required',
        ]);
        $basic = Content::where('type', 'basic')?->first();

        if ($basic == null) {
            $basic = new Content();
        }

        $data = array(
            'colour' => $req->colour,
            'colour' => $req->colour,
            'email' => $req->email,
            'phone' => $req->phone,
            'address' => $req->address,
            'company' => $req->company,
            'about_one' => $req->about_one,
            'about_two' => $req->about_two,
            'about_third' => $req->about_third,
            'vission' => $req->vission,
            'mission' => $req->mission,
            'training_one' => $req->training_one,
            'training_two' => $req->training_two,
            'training_three' => $req->training_three,
        );

        $basic->value = $data;
        try {
            $basic->save();
        } catch (Exception $validated){
            $notify[] = ['error', $validated->getMessage()];
            return back()->withNotify($notify);
        } catch (Exception $e) {
            $notify[] = ['error', $e->getMessage()];
            return back()->withNotify($notify);
        }
        $notify[] = ['success', 'Basic Content Updated'];
        return back()->withNotify($notify);
    }
}

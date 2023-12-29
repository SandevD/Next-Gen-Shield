<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Offer;
use Exception;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $basic = Content::where('type', 'basic')?->first();
        return view('dashboard.services.add', compact('basic'));
    }

    public function add(Request $req)
    {
        $req->validate([
            'one' => 'required',
            'desc_one' => 'required',
            'icon' => 'required',
        ]);

        $service = new Offer();

        $data = array(
            'one' => $req->one,
            'desc_one' => $req->desc_one,
            'icon' => $req->icon,
        );
        $service->value = $data;
        try {
            $service->save();
        } catch (Exception $validated) {
            $notify[] = ['error', $validated->getMessage()];
            return back()->withNotify($notify);
        } catch (Exception $e) {
            $notify[] = ['error', $e->getMessage()];
            return back()->withNotify($notify);
        }
        $notify[] = ['success', 'Services Updated'];
        return back()->withNotify($notify);
    }

    public function view()
    {
        $service = collect(Offer::all());
        $basic = Content::where('type', 'basic')?->first();
        return view('dashboard.services.view', compact('service', 'basic'));
    }

    public function edit($id)
    {
        $data = Offer::find($id);
        $basic = Content::where('type', 'basic')?->first();
        return view('dashboard.services.edit', compact('data', 'basic'));
    }

    public function update(Request $req)
    {
        $req->validate([
            'one' => 'required',
            'desc_one' => 'required',
            'icon' => 'required',
        ]);

        $service = Offer::find($req->id);

        if ($service == null) {
            $service = new Offer();
        }

        $data = array(
            'one' => $req->one,
            'desc_one' => $req->desc_one,
            'icon' => $req->icon,
        );
        $service->value = $data;
        try {
            $service->save();
        } catch (Exception $validated) {
            $notify[] = ['error', $validated->getMessage()];
            return back()->withNotify($notify);
        } catch (Exception $e) {
            $notify[] = ['error', $e->getMessage()];
            return back()->withNotify($notify);
        }
        $notify[] = ['success', 'Services Updated'];
        return back()->withNotify($notify);
    }

    public function delete($id)
    {
        $data = Offer::find($id);
        try {
            $data->delete();
        } catch (Exception $validated){
            $notify[] = ['error', $validated->getMessage()];
            return back()->withNotify($notify);
        } catch (Exception $e) {
            $notify[] = ['error', $e->getMessage()];
            return back()->withNotify($notify);
        }
        $notify[] = ['success', 'Product Deleted'];
        return back()->withNotify($notify);
      
    }
}

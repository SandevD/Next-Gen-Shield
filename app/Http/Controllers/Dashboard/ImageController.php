<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Image;
use App\Models\StoreOne;
use Exception;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $addimage = StoreOne::all()->first();
        $basic = Content::where('type', 'basic')?->first();
        return view('dashboard.image', compact('addimage', 'basic'));
    }

    public function storeOne(Request $request)
    {
        if ($request->hasfile('image_one')) {
            $request->validate([
                'image_one' => 'required|image|mimes:jpeg,png,jpg,',
            ]);
            $imageName = time() . '.' . $request->image_one->extension();
            $request->image_one->move(public_path('/assets/img'), $imageName);

            $addimage = StoreOne::find(1);
            $addimage->image_one = $imageName;
            $addimage->save();
        }
        if ($request->hasfile('image_two')) {
            $request->validate([
                'image_two' => 'required|image|mimes:jpeg,png,jpg,',
            ]);
            $imageName = time() . '.' . $request->image_two->extension();
            $request->image_two->move(public_path('/assets/img'), $imageName);

            $addimage = StoreOne::find(1);
            $addimage->image_two = $imageName;
            $addimage->save();
        }
        if ($request->hasfile('image_three')) {
            $request->validate([
                'image_three' => 'required|image|mimes:jpeg,png,jpg,',
            ]);
            $imageName = time() . '.' . $request->image_three->extension();
            $request->image_three->move(public_path('/assets/img'), $imageName);

            $addimage = StoreOne::find(1);
            $addimage->image_three = $imageName;
            $addimage->save();
        }
        if ($request->hasfile('image_four')) {
            $request->validate([
                'image_four' => 'required|image|mimes:jpeg,png,jpg,',
            ]);
            $imageName = time() . '.' . $request->image_four->extension();
            $request->image_four->move(public_path('/assets/img'), $imageName);

            $addimage = StoreOne::find(1);
            $addimage->image_four = $imageName;
            $addimage->save();
        }
        if ($request->hasfile('image_five')) {
            $request->validate([
                'image_five' => 'required|image|mimes:jpeg,png,jpg,',
            ]);
            $imageName = time() . '.' . $request->image_five->extension();
            $request->image_five->move(public_path('/assets/img'), $imageName);

            $addimage = StoreOne::find(1);
            $addimage->image_five = $imageName;
            $addimage->save();
        }
        if ($request->hasfile('image_six')) {
            $request->validate([
                'image_six' => 'required|image|mimes:jpeg,png,jpg,',
            ]);
            $imageName = time() . '.' . $request->image_six->extension();
            $request->image_six->move(public_path('/assets/img'), $imageName);

            $addimage = StoreOne::find(1);
            $addimage->image_six = $imageName;
            $addimage->save();
        }
        if ($request->hasfile('image_seven')) {
            $request->validate([
                'image_seven' => 'required|image|mimes:jpeg,png,jpg,',
            ]);
            $imageName = time() . '.' . $request->image_seven->extension();
            $request->image_seven->move(public_path('/assets/img'), $imageName);

            $addimage = StoreOne::find(1);
            $addimage->image_seven = $imageName;
            $addimage->save();
        }
        return back();
    }
}

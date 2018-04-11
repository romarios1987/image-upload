<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;


class ImageController extends Controller
{
    public function upload(ImageRequest $request)
    {

//        if ($request->hasFile('image')) {
////            $image_name = $request->image->getClientOriginalName();
////            $request->image->storeAs('public', $image_name);
////
////        }

        $request->user()->update(['avatar' => $request->image]);
//        $request->user()->avatar = $request->image;
//        $request->user()->save();
        //return back();


        return response(null, 202);
    }
}

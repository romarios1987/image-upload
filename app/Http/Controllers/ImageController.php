<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;


class ImageController extends Controller
{
    public function upload(ImageRequest $request)
    {

        if ($request->hasFile('image')) {
            $image_name = $request->image->getClientOriginalName();
            $request->image->storeAs('public', $image_name);

        }

        $request->user()->avatar = $image_name;
        $request->user()->save();

        return back();
    }
}

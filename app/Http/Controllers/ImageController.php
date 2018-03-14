<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

class ImageController extends Controller
{
    
    public function getResizeImage()
    {
        return view('resizeimage');
    }
    public function postResizeImage(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1536',
        ]);
        $photo = $request->file('photo');
        $imagename = time().'.'.$photo->getClientOriginalExtension(); 


        // icon for android 

        $destinationPath = public_path('upload/android/mipmap-hdpi/');
        $thumb_img = Image::make($photo->getRealPath())->resize(72, 72);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/android/mipmap-ldpi/');
        $thumb_img = Image::make($photo->getRealPath())->resize(36, 36);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/android/mipmap-mdpi/');
        $thumb_img = Image::make($photo->getRealPath())->resize(48, 48);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/android/mipmap-xhdpi/');
        $thumb_img = Image::make($photo->getRealPath())->resize(96, 96);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/android/mipmap-xxhdpi/');
        $thumb_img = Image::make($photo->getRealPath())->resize(144, 144);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/android/mipmap-xxxhdpi/');
        $thumb_img = Image::make($photo->getRealPath())->resize(192, 192);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/android/');
        $thumb_img = Image::make($photo->getRealPath())->resize(256, 256);
        $thumb_img->save($destinationPath.'/'.$imagename);
        

        $destinationPath = public_path('upload/');
        $photo->move($destinationPath, $imagename);
        return back()
            ->with('success','Image Upload successful')
            ->with('imagename',$imagename);
    }



}

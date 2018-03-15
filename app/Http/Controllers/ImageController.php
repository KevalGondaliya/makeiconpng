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


        // iphone
        // i20 --------------------------------------------

        $destinationPath = public_path('upload/iphone/i20/Icon-App-20x20@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(100, 100);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/iphone/i20/Icon-App-20x20@3x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(60, 60);
        $thumb_img->save($destinationPath.'/'.$imagename);

         $destinationPath = public_path('upload/iphone/i29/Icon-App-29x29@1x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(29, 29);
        $thumb_img->save($destinationPath.'/'.$imagename);

        // i29-------------------------------------------

         $destinationPath = public_path('upload/iphone/i29/Icon-App-29x29@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(58, 58);
        $thumb_img->save($destinationPath.'/'.$imagename);

         $destinationPath = public_path('upload/iphone/i29/Icon-App-29x29@3x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(87, 87);
        $thumb_img->save($destinationPath.'/'.$imagename);
        
        // i40-----------------------------------------

         $destinationPath = public_path('upload/iphone/i40/Icon-App-40x40@1x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(40, 40);
        $thumb_img->save($destinationPath.'/'.$imagename);

         $destinationPath = public_path('upload/iphone/i40/Icon-App-40x40@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(80, 80);
        $thumb_img->save($destinationPath.'/'.$imagename);


         $destinationPath = public_path('upload/iphone/i40/Icon-App-40x40@3x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(120, 120);
        $thumb_img->save($destinationPath.'/'.$imagename);
    

        // i57-----------------------------------------

           $destinationPath = public_path('upload/iphone/i57/Icon-App-57x57@1x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(57, 57);
        $thumb_img->save($destinationPath.'/'.$imagename);

           $destinationPath = public_path('upload/iphone/i57/Icon-App-57x57@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(114, 114);
        $thumb_img->save($destinationPath.'/'.$imagename);



        // i60-----------------------------------------    

          $destinationPath = public_path('upload/iphone/i60/Icon-App-60x60@1x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(60, 60);
        $thumb_img->save($destinationPath.'/'.$imagename);

          $destinationPath = public_path('upload/iphone/i60/Icon-App-60x60@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(120, 120);
        $thumb_img->save($destinationPath.'/'.$imagename);

          $destinationPath = public_path('upload/iphone/i60/Icon-App-60x60@3x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(180, 180);
        $thumb_img->save($destinationPath.'/'.$imagename);


        // i72----------------------------------------- 


          $destinationPath = public_path('upload/iphone/i72/Icon-App-72x72@1x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(72, 72);
        $thumb_img->save($destinationPath.'/'.$imagename);

          $destinationPath = public_path('upload/iphone/i72/Icon-App-72x72@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(144, 144);
        $thumb_img->save($destinationPath.'/'.$imagename);


        // i76----------------------------------------- 

         $destinationPath = public_path('upload/iphone/i76/Icon-App-76x76@1x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(76, 76);
        $thumb_img->save($destinationPath.'/'.$imagename);

         $destinationPath = public_path('upload/iphone/i76/Icon-App-76x76@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(152, 152);
        $thumb_img->save($destinationPath.'/'.$imagename);

         $destinationPath = public_path('upload/iphone/i76/Icon-App-76x76@3x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(228, 228);
        $thumb_img->save($destinationPath.'/'.$imagename);


        // i83.5----------------------------------------- 

        $destinationPath = public_path('upload/iphone/i83.5/Icon-App-83.5x83.5@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(167, 167);
        $thumb_img->save($destinationPath.'/'.$imagename);


        // ismall50----------------------------------------- 

        $destinationPath = public_path('upload/iphone/ismall50/Icon-Small-50x50@1x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(50, 50);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/iphone/ismall50/Icon-Small-50x50@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(100, 100);
        $thumb_img->save($destinationPath.'/'.$imagename);

         // iphone----------------------------------------- 

        $destinationPath = public_path('upload/iphone/istore/');
        $thumb_img = Image::make($photo->getRealPath())->resize(1024, 1024);
        $thumb_img->save($destinationPath.'/'.$imagename);


        $destinationPath = public_path('upload/');
        $photo->move($destinationPath, $imagename);
        return back()
            ->with('success','Image Upload successful')
            ->with('imagename',$imagename);
    }



}

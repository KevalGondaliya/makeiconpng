<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

use Image;
use ZipArchive;
use Zipper;

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

        $this->existDirectory();

        $destinationPath = public_path('upload/android/mipmap-xxhdpi/');
        $thumb_img = Image::make($photo->getRealPath())->resize(72, 72);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/android/mipmap-xxxhdpi/');
        $thumb_img = Image::make($photo->getRealPath())->resize(36, 36);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/android/mipmap-hdpi/');
        $thumb_img = Image::make($photo->getRealPath())->resize(48, 48);
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


         $destinationPath = public_path('upload/android/playstore-icon/');
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

        // // i29-------------------------------------------

         $destinationPath = public_path('upload/iphone/i29/Icon-App-29x29@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(58, 58);
        $thumb_img->save($destinationPath.'/'.$imagename);

         $destinationPath = public_path('upload/iphone/i29/Icon-App-29x29@3x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(87, 87);
        $thumb_img->save($destinationPath.'/'.$imagename);
        
        // // i40-----------------------------------------

         $destinationPath = public_path('upload/iphone/i40/Icon-App-40x40@1x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(40, 40);
        $thumb_img->save($destinationPath.'/'.$imagename);

         $destinationPath = public_path('upload/iphone/i40/Icon-App-40x40@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(80, 80);
        $thumb_img->save($destinationPath.'/'.$imagename);


         $destinationPath = public_path('upload/iphone/i40/Icon-App-40x40@3x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(120, 120);
        $thumb_img->save($destinationPath.'/'.$imagename);
    

        // // i57-----------------------------------------

           $destinationPath = public_path('upload/iphone/i57/Icon-App-57x57@1x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(57, 57);
        $thumb_img->save($destinationPath.'/'.$imagename);

           $destinationPath = public_path('upload/iphone/i57/Icon-App-57x57@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(114, 114);
        $thumb_img->save($destinationPath.'/'.$imagename);



        // // i60-----------------------------------------    

          $destinationPath = public_path('upload/iphone/i60/Icon-App-60x60@1x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(60, 60);
        $thumb_img->save($destinationPath.'/'.$imagename);

          $destinationPath = public_path('upload/iphone/i60/Icon-App-60x60@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(120, 120);
        $thumb_img->save($destinationPath.'/'.$imagename);

          $destinationPath = public_path('upload/iphone/i60/Icon-App-60x60@3x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(180, 180);
        $thumb_img->save($destinationPath.'/'.$imagename);


        // // i72----------------------------------------- 


          $destinationPath = public_path('upload/iphone/i72/Icon-App-72x72@1x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(72, 72);
        $thumb_img->save($destinationPath.'/'.$imagename);

          $destinationPath = public_path('upload/iphone/i72/Icon-App-72x72@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(144, 144);
        $thumb_img->save($destinationPath.'/'.$imagename);


        // // i76----------------------------------------- 

         $destinationPath = public_path('upload/iphone/i76/Icon-App-76x76@1x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(76, 76);
        $thumb_img->save($destinationPath.'/'.$imagename);

         $destinationPath = public_path('upload/iphone/i76/Icon-App-76x76@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(152, 152);
        $thumb_img->save($destinationPath.'/'.$imagename);

         $destinationPath = public_path('upload/iphone/i76/Icon-App-76x76@3x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(228, 228);
        $thumb_img->save($destinationPath.'/'.$imagename);


        // // i83.5----------------------------------------- 

        $destinationPath = public_path('upload/iphone/i83.5/Icon-App-83.5x83.5@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(167, 167);
        $thumb_img->save($destinationPath.'/'.$imagename);


        // // ismall50----------------------------------------- 

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

        // imessenger

        $destinationPath = public_path('upload/imessenger/icon-messages-app-27x20@1x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(27, 20);
        $thumb_img->save($destinationPath.'/'.$imagename);
        
        $destinationPath = public_path('upload/imessenger/icon-messages-app-27x20@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(54, 40);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/imessenger/icon-messages-app-27x20@3x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(81, 60);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/imessenger/icon-messages-app-iPadAir-67x50@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(134, 100);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/imessenger/icon-messages-app-iPadAir-74x55@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(148, 110);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/imessenger/icon-messages-app-iPhone-60x45@1x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(60, 45);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/imessenger/icon-messages-app-iPhone-60x45@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(120, 90);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/imessenger/icon-messages-app-iPhone-60x45@3x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(180, 135);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/imessenger/icon-messages-app-store-1024x768/');
        $thumb_img = Image::make($photo->getRealPath())->resize(1024, 768);
        $thumb_img->save($destinationPath.'/'.$imagename);
        
         $destinationPath = public_path('upload/imessenger/icon-messages-transcript-32x24@1x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(32, 24);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/imessenger/icon-messages-transcript-32x24@2x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(64, 48);
        $thumb_img->save($destinationPath.'/'.$imagename);

        $destinationPath = public_path('upload/imessenger/icon-messages-transcript-32x24@3x/');
        $thumb_img = Image::make($photo->getRealPath())->resize(96, 72);
        $thumb_img->save($destinationPath.'/'.$imagename);







        $destinationPath = public_path('upload/');
        $photo->move($destinationPath, $imagename);

//        $this->zipConvert();

        return back()
            ->with('success','Image Upload successful')
            ->with('imagename',$imagename);

         }

     public function zipConvert()
    {
        $files = glob(public_path('upload/'));

            $time=date('now');
            $filename='temp'.'.zip';

            Zipper::make(public_path().'/upload/'.$filename)->add($files);

            $file = storage_path().'/'.$filename;

            if(file_exists(public_path().'/upload/'.$filename)){
            $this->do_download_zip($filename);
            }
    }

    public function do_download_zip($filename){
          
         $img = public_path().'/upload/'.$filename;
            header("Content-Type: application/zip");
            header("Content-Length: ");

            echo file_get_contents($img);
            die();
            }   

    public function clearDir($dir){
        
         $structure = glob(rtrim($dir, "/").'/*');

        if (is_array($structure)) {

            foreach($structure as $file) {

            unlink($file);

            }
        }
        rmdir($dir);

     }

    public function existDirectory(){

         // for android

        if (file_exists(public_path('upload/android/mipmap-xxhdpi/'))) {
            $res=$this->clearDir(public_path('upload/android/mipmap-xxhdpi/'));
        }
        if (file_exists(public_path('upload/android/mipmap-xxxhdpi/'))) {
            $res=$this->clearDir(public_path('upload/android/mipmap-xxxhdpi/'));
        }
        if (file_exists(public_path('upload/android/mipmap-hdpi/'))) {
            $res=$this->clearDir(public_path('upload/android/mipmap-hdpi/'));
        }
        if (file_exists(public_path('upload/android/mipmap-ldpi/'))) {
            $res=$this->clearDir(public_path('upload/android/mipmap-ldpi/'));
        }
        if (file_exists(public_path('upload/android/mipmap-mdpi/'))) {
            $res=$this->clearDir(public_path('upload/android/mipmap-mdpi/'));
        }
        if (file_exists(public_path('upload/android/mipmap-xhdpi/'))) {
            $res=$this->clearDir(public_path('upload/android/mipmap-xhdpi/'));
        }
        if (file_exists(public_path('upload/android/playstore-icon/'))) {
            $res=$this->clearDir(public_path('upload/android/playstore-icon/'));
        }

        // for iphone
        // 20*20

         if (file_exists(public_path('upload/iphone/i20/Icon-App-20x20@2x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i20/Icon-App-20x20@2x/'));
        }
           if (file_exists(public_path('upload/iphone/i20/Icon-App-20x20@3x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i20/Icon-App-20x20@3x/'));
        }
        // 30*30

        if (file_exists(public_path('upload/iphone/i29/Icon-App-29x29@1x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i29/Icon-App-29x29@1x/'));
        }
          if (file_exists(public_path('upload/iphone/i29/Icon-App-29x29@2x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i29/Icon-App-29x29@2x/'));
        }
          if (file_exists(public_path('upload/iphone/i29/Icon-App-29x29@3x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i29/Icon-App-29x29@3x/'));
        }

        // 40*40
          if (file_exists(public_path('upload/iphone/i40/Icon-App-40x40@1x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i40/Icon-App-40x40@1x/'));
        }
          if (file_exists(public_path('upload/iphone/i40/Icon-App-40x40@2x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i40/Icon-App-40x40@2x/'));
        }
          if (file_exists(public_path('upload/iphone/i40/Icon-App-40x40@3x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i40/Icon-App-40x40@3x/'));
        }

        // 57*57

         if (file_exists(public_path('upload/iphone/i57/Icon-App-57x57@1x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i57/Icon-App-57x57@1x/'));
        }
          if (file_exists(public_path('upload/iphone/i57/Icon-App-57x57@2x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i57/Icon-App-57x57@2x/'));
        }
        // 60*60

            if (file_exists(public_path('upload/iphone/i60/Icon-App-60x60@1x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i60/Icon-App-60x60@1x/'));
        }
          if (file_exists(public_path('upload/iphone/i60/Icon-App-60x60@2x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i60/Icon-App-60x60@2x/'));
        }
          if (file_exists(public_path('upload/iphone/i60/Icon-App-60x60@3x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i60/Icon-App-60x60@3x/'));
        }

          // 72*72

         if (file_exists(public_path('upload/iphone/i72/Icon-App-72x72@1x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i72/Icon-App-72x72@1x/'));
        }
          if (file_exists(public_path('upload/iphone/i72/Icon-App-72x72@2x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i72/Icon-App-72x72@2x/'));
        }
        // 76*76

            if (file_exists(public_path('upload/iphone/i76/Icon-App-76x76@1x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i76/Icon-App-76x76@1x/'));
        }
          if (file_exists(public_path('upload/iphone/i76/Icon-App-76x76@2x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i76/Icon-App-76x76@2x/'));
        }
          if (file_exists(public_path('upload/iphone/i76/Icon-App-76x76@3x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i76/Icon-App-76x76@3x/'));
        }

        // 83.5

          if (file_exists(public_path('upload/iphone/i83.5/Icon-App-83.5x83.5@2x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/i83.5/Icon-App-83.5x83.5@2x/'));
        }
        // ismall50

            if (file_exists(public_path('upload/iphone/ismall50/Icon-Small-50x50@1x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/ismall50/Icon-Small-50x50@1x/'));
        }
          if (file_exists(public_path('upload/iphone/ismall50/Icon-Small-50x50@2x/'))) {
            $res=$this->clearDir(public_path('upload/iphone/ismall50/Icon-Small-50x50@2x/'));
        }
        // istore

          if (file_exists(public_path('upload/iphone/istore/'))) {
            $res=$this->clearDir(public_path('upload/iphone/istore/'));
        }

        // imessanger
      if (file_exists(public_path('upload/imessenger/icon-messages-app-27x20@1x/'))) {
            $res=$this->clearDir(public_path('upload/imessenger/icon-messages-app-27x20@1x/'));
        }
         if (file_exists(public_path('upload/imessenger/icon-messages-app-27x20@2x/'))) {
            $res=$this->clearDir(public_path('upload/imessenger/icon-messages-app-27x20@2x/'));
        }
          if (file_exists(public_path('upload/imessenger/icon-messages-app-27x20@3x/'))) {
            $res=$this->clearDir(public_path('upload/imessenger/icon-messages-app-27x20@3x/'));
        }
          if (file_exists(public_path('upload/imessenger/icon-messages-app-iPadAir-67x50@2x/'))) {
            $res=$this->clearDir(public_path('upload/imessenger/icon-messages-app-iPadAir-67x50@2x/'));
        }
          if (file_exists(public_path('upload/imessenger/icon-messages-app-iPadAir-74x55@2x/'))) {
            $res=$this->clearDir(public_path('upload/imessenger/icon-messages-app-iPadAir-74x55@2x/'));
        }
         if (file_exists(public_path('upload/imessenger/icon-messages-app-iPhone-60x45@1x/'))) {
            $res=$this->clearDir(public_path('upload/imessenger/icon-messages-app-iPhone-60x45@1x/'));
        }
          if (file_exists(public_path('upload/imessenger/icon-messages-app-iPhone-60x45@2x/'))) {
            $res=$this->clearDir(public_path('upload/imessenger/icon-messages-app-iPhone-60x45@2x/'));
        }
         if (file_exists(public_path('upload/imessenger/icon-messages-app-iPhone-60x45@3x/'))) {
            $res=$this->clearDir(public_path('upload/imessenger/icon-messages-app-iPhone-60x45@3x/'));
        }
        //  if (file_exists(public_path('upload/imessenger/icon-messages-app-store-1024x768/'))) {
        //     $res=$this->clearDir(public_path('upload/imessenger/icon-messages-app-store-1024x768/'));
        // }
        if (file_exists(public_path('upload/imessenger/icon-messages-transcript-32x24@1x/'))) {
            $res=$this->clearDir(public_path('upload/imessenger/icon-messages-transcript-32x24@1x/'));
        }
        if (file_exists(public_path('upload/imessenger/icon-messages-transcript-32x24@2x/'))) {
            $res=$this->clearDir(public_path('upload/imessenger/icon-messages-transcript-32x24@2x/'));
        }
         if (file_exists(public_path('upload/imessenger/icon-messages-transcript-32x24@3x/'))) {
            $res=$this->clearDir(public_path('upload/imessenger/icon-messages-transcript-32x24@3x/'));
        }


        // android make directory

        mkdir(public_path('upload/android/mipmap-xxhdpi/'), 0777, true);
        mkdir(public_path('upload/android/mipmap-xxxhdpi/'), 0777, true);
        mkdir(public_path('upload/android/mipmap-hdpi/'), 0777, true);
        mkdir(public_path('upload/android/mipmap-ldpi/'), 0777, true);
        mkdir(public_path('upload/android/mipmap-mdpi/'), 0777, true);
        mkdir(public_path('upload/android/mipmap-xhdpi/'), 0777, true);
        mkdir(public_path('upload/android/playstore-icon/'), 0777, true);

        //  iphone make directory
        // 20*20
        mkdir(public_path('upload/iphone/i20/Icon-App-20x20@2x/'), 0777, true);
        mkdir(public_path('upload/iphone/i20/Icon-App-20x20@3x/'), 0777, true);
        // 29*29
        mkdir(public_path('upload/iphone/i29/Icon-App-29x29@1x/'), 0777, true);
        mkdir(public_path('upload/iphone/i29/Icon-App-29x29@2x/'), 0777, true);
        mkdir(public_path('upload/iphone/i29/Icon-App-29x29@3x/'), 0777, true);
        // 40*40
        mkdir(public_path('upload/iphone/i40/Icon-App-40x40@1x/'), 0777, true);
        mkdir(public_path('upload/iphone/i40/Icon-App-40x40@2x/'), 0777, true);
        mkdir(public_path('upload/iphone/i40/Icon-App-40x40@3x/'), 0777, true);
        // 57*57
        mkdir(public_path('upload/iphone/i57/Icon-App-57x57@1x/'), 0777, true);
        mkdir(public_path('upload/iphone/i57/Icon-App-57x57@2x/'), 0777, true);
        // 60*60
        mkdir(public_path('upload/iphone/i60/Icon-App-60x60@1x/'), 0777, true);
        mkdir(public_path('upload/iphone/i60/Icon-App-60x60@2x/'), 0777, true);
        mkdir(public_path('upload/iphone/i60/Icon-App-60x60@3x/'), 0777, true);
        // 72*72
        mkdir(public_path('upload/iphone/i72/Icon-App-72x72@1x/'), 0777, true);
        mkdir(public_path('upload/iphone/i72/Icon-App-72x72@2x/'), 0777, true);
        // 76*76
        mkdir(public_path('upload/iphone/i76/Icon-App-76x76@1x/'), 0777, true);
        mkdir(public_path('upload/iphone/i76/Icon-App-76x76@2x/'), 0777, true);
        mkdir(public_path('upload/iphone/i76/Icon-App-76x76@3x/'), 0777, true);
        // 83.5
         mkdir(public_path('upload/iphone/i83.5/Icon-App-83.5x83.5@2x/'), 0777, true);
        // ismall50
        mkdir(public_path('upload/iphone/ismall50/Icon-Small-50x50@1x/'), 0777, true);
        mkdir(public_path('upload/iphone/ismall50/Icon-Small-50x50@2x/'), 0777, true);
        // istore
        mkdir(public_path('upload/iphone/istore/'), 0777, true);

        // imessenger
        
        mkdir(public_path('upload/imessenger/icon-messages-app-27x20@1x/'), 0777, true);
        mkdir(public_path('upload/imessenger/icon-messages-app-27x20@2x/'), 0777, true);
        mkdir(public_path('upload/imessenger/icon-messages-app-27x20@3x/'), 0777, true);
        mkdir(public_path('upload/imessenger/icon-messages-app-iPadAir-67x50@2x/'), 0777, true);
        mkdir(public_path('upload/imessenger/icon-messages-app-iPadAir-74x55@2x/'), 0777, true);
        mkdir(public_path('upload/imessenger/icon-messages-app-iPhone-60x45@1x/'), 0777, true);
        mkdir(public_path('upload/imessenger/icon-messages-app-iPhone-60x45@2x/'), 0777, true);
        mkdir(public_path('upload/imessenger/icon-messages-app-iPhone-60x45@3x/'), 0777, true);
        // mkdir(public_path('upload/imessenger/icon-messages-app-store-1024x768/'), 0777, true);
        mkdir(public_path('upload/imessenger/icon-messages-transcript-32x24@1x/'), 0777, true);
        mkdir(public_path('upload/imessenger/icon-messages-transcript-32x24@2x/'), 0777, true);
        mkdir(public_path('upload/imessenger/icon-messages-transcript-32x24@3x/'), 0777, true);
    }

}

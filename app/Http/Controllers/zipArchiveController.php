<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use Zipper;

class zipArchiveController extends Controller
{
   public function zipConvert(Request $request)
    {

       
        $files = glob(public_path('upload/'));

            Zipper::make('upload/mytest3.zip')->add($files);
           
            return response()->download(public_path('upload/mytest3.zip'));
    }
}



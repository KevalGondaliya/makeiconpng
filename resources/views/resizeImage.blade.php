@extends('layouts.header')


    <!--=== PRELOADER ===-->
    <div class="preloader" style="display: none;">
        <div class="loder-content">
            <img src="images/preloader.gif" alt="">
        </div>
    </div>
    <!--=== TOP AREA ===-->
    <section id="intro" class="ripple jquery-ripples" style="background-image: none;">
        <div class="container-fluid">
            <div class="template-info" >
                <a class="logo"><img src="images/logo.png" alt=""></a>
                <div class="page-headline">
                    <h1 class="white">Best icon resizer for mobile app developers</h1>
                    <h5 class="white">you choose image and get resized image</h5>
                </div>
                {!! Form::open(array('route' => 'intervention.postresizeimage','files'=>true)) !!}
			        <div class="row">
			            <div class="col-md-4 col-md-push-4">
			                <br/>
			                {!! Form::file('photo', array('class' => 'form-control')) !!}
			            </div>
			            <div class="col-md-12">
			                <br/>
			                <button type="submit" class="btn btn-primary">Upload Image</button>
			            </div>
			        </div>
   				{!! Form::close() !!}
            </div>
        </div>
    </section>
    <!--=== TOP AREA END ===-->

    <!--=== MAIN DEMO ===-->
    <section id="demos">
         @if (Session::get('success'))
    
    <div class="row">
    
        <!-- android icon -->
        <div class="col-md-6">
        	<h3>android</h3>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">ic_launcher</p>
		            <img src="{{asset('upload/android/mipmap-hdpi/'.Session::get('imagename')) }}" />
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">ic_launcher</p>
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">ic_launcher</p>
		            <img src="{{asset('upload/android/mipmap-mdpi/'.Session::get('imagename')) }}" />
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">ic_launcher</p>
		            <img src="{{asset('upload/android/mipmap-xhdpi/'.Session::get('imagename')) }}" />
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">ic_launcher</p>
		            <img src="{{asset('upload/android/mipmap-xxhdpi/'.Session::get('imagename')) }}" />
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">ic_launcher</p>
		            <img src="{{asset('upload/android/mipmap-xxxhdpi/'.Session::get('imagename')) }}" />
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">playstore-icon</p>
		            <img src="{{asset('upload/android/'.Session::get('imagename')) }}" />
	        </div>
        </div>
        

        <!-- iphone icon -->

        <!--  i20 icon-->

        <div class="col-md-6">
        	<h3>iphone</h3>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-20x20@2x</p>
		            <img src="{{asset('upload/iphone/i20/Icon-App-20x20@2x/'.Session::get('imagename')) }}" />
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-20x20@3x</p>
		            <img src="{{asset('upload/iphone/i20/Icon-App-20x20@3x/'.Session::get('imagename')) }}" />
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-29x29@1x</p>
		            <img src="{{asset('upload/iphone/i29/Icon-App-29x29@1x/'.Session::get('imagename')) }}" />
	        </div>

	        <!--  i40 icon-->

	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-40x40@1x</p>
		            <img src="{{asset('upload/iphone/i40/Icon-App-40x40@1x/'.Session::get('imagename')) }}" />
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-40x40@2x</p>
		            <img src="{{asset('upload/iphone/i40/Icon-App-40x40@2x/'.Session::get('imagename')) }}" />
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-40x40@3x</p>
		            <img src="{{asset('upload/iphone/i40/Icon-App-40x40@3x/'.Session::get('imagename')) }}" />
	        </div>

	        <!--  i57 icon-->

	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-57x57@1x</p>
		            <img src="{{asset('upload/iphone/i57/Icon-App-57x57@1x/'.Session::get('imagename')) }}" />
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-57x57@2x</p>
		            <img src="{{asset('upload/iphone/i57/Icon-App-57x57@2x/'.Session::get('imagename')) }}" />
	        </div>
	         <!--  i60 icon-->
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-60x60@1x</p>
		            <img src="{{asset('upload/iphone/i60/Icon-App-60x60@1x/'.Session::get('imagename')) }}" />
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-60x60@2x</p>
		            <img src="{{asset('upload/iphone/i60/Icon-App-60x60@2x/'.Session::get('imagename')) }}" />
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-60x60@3x</p>
		            <img src="{{asset('upload/iphone/i60/Icon-App-60x60@3x/'.Session::get('imagename')) }}" />
	        </div>

	          <!--  i72 icon-->

	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-72x72@1x</p>
		            <img src="{{asset('upload/iphone/i72/Icon-App-72x72@1x/'.Session::get('imagename')) }}" />
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-72x72@2x</p>
		            <img src="{{asset('upload/iphone/i72/Icon-App-72x72@2x/'.Session::get('imagename')) }}" />
	        </div>

	         <!--  i76 icon-->

	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-76x76@1x</p>
		            <img src="{{asset('upload/iphone/i76/Icon-App-76x76@1x/'.Session::get('imagename')) }}" />
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-76x76@2x</p>
		            <img src="{{asset('upload/iphone/i76/Icon-App-76x76@2x/'.Session::get('imagename')) }}" />
	        </div>
	       <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-76x76@3x</p>
		            <img src="{{asset('upload/iphone/i76/Icon-App-76x76@3x/'.Session::get('imagename')) }}" />
	        </div>

	           <!--  i83.5 icon-->

	        <div class="col-md-12" style="margin-top:10px;">
		            <p style="margin-left: 15px;">Icon-App-83.5x83</p>
		            <img src="{{asset('upload/iphone/i83.5/Icon-App-83.5x83.5@2x/'.Session::get('imagename')) }}" />
	        </div>

	          <!--  ismall50 icon-->

	        <div class="col-md-12" style="margin-top:10px;">
		        <!-- <div class="col-md-4"> -->
		            <p style="margin-left: 15px;">Icon-Small-50x50@1x</p>
		        <!-- </div> -->
		        <!-- <div class="col-md-8">     -->
		            <img src="{{asset('upload/iphone/ismall50/Icon-Small-50x50@1x/'.Session::get('imagename')) }}" />
		        <!-- </div> -->
	        </div>
	        <div class="col-md-12" style="margin-top:10px;">
		        <!-- <div class="col-md-4"> -->
		            <p style="margin-left: 15px;">Icon-Small-50x50@2x</p>
		        <!-- </div> -->
		        <!-- <div class="col-md-8">     -->
		            <img src="{{asset('upload/iphone/ismall50/Icon-Small-50x50@2x/'.Session::get('imagename')) }}" />
		        <!-- </div> -->
	        </div>

	          <!--  iphone icon-->
	        <div class="col-md-12" style="margin-top:10px;">
		        <!-- <div class="col-md-4">
		            <p style="margin-left: 15px;">ItunesArtwork@2x</p>
		        </div>
		        <div class="col-md-8">    
		            <img src="{{asset('upload/iphone/istore/'.Session::get('imagename')) }}" />
		        </div> -->
	        </div>
	    </div> 
    </div>
    
    @endif
    </section>

       <!-- <footer class="row"> -->
        @include('layouts.footer')
    <!-- </footer> -->
    <!--=== MAIN DEMO END-->

    <!--=== FOOTER AREA ====-->
  
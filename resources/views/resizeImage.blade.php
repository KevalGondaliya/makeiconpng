
<div class="panel panel-primary">
 <div class="panel-heading">Best icon resizer for mobile app developers.</div>
  <div class="panel-body"> 
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
          <p class="error_item">{{ $error }}</p>
        @endforeach
    </div>
    @endif
    @if (Session::get('success'))
    
    <div class="row">
    <!--     <div class="col-md-12">
	        <div class="col-md-4">
	            <strong>Image Before Resize:</strong>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/small/'.Session::get('imagename')) }}" />
	        </div>
        </div> -->

        <!-- android icon -->

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px; display: inline-flex;">ic_launcher</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/android/mipmap-hdpi/'.Session::get('imagename')) }}" />
	        </div>
	        
        </div>
        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">ic_launcher</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/android/mipmap-ldpi/'.Session::get('imagename')) }}" />
	        </div>
        </div>
        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">ic_launcher</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/android/mipmap-mdpi/'.Session::get('imagename')) }}" />
	        </div>
        </div>
        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">ic_launcher</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/android/mipmap-xhdpi/'.Session::get('imagename')) }}" />
	        </div>
        </div>
        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">ic_launcher</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/android/mipmap-xxhdpi/'.Session::get('imagename')) }}" />
	        </div>
        </div>
         <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">ic_launcher</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/android/mipmap-xxxhdpi/'.Session::get('imagename')) }}" />
	        </div>
        </div>
         <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">playstore-icon</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/android/'.Session::get('imagename')) }}" />
	        </div>
        </div>



        <!-- iphone icon -->


        <!--  i20 icon-->

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-20x20@2x</p>
	        </div>
	        <div class="col-md-8">    	
	            <img src="{{asset('upload/iphone/i20/Icon-App-20x20@2x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-20x20@3x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i20/Icon-App-20x20@3x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-29x29@1x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i29/Icon-App-29x29@1x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

        <!--  i40 icon-->

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-40x40@1x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i40/Icon-App-40x40@1x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-40x40@2x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i40/Icon-App-40x40@2x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-40x40@3x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i40/Icon-App-40x40@3x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

        <!--  i57 icon-->

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-57x57@1x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i57/Icon-App-57x57@1x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-57x57@2x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i57/Icon-App-57x57@2x/'.Session::get('imagename')) }}" />
	        </div>
        </div>
         <!--  i60 icon-->

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-60x60@1x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i60/Icon-App-60x60@1x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-60x60@2x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i60/Icon-App-60x60@2x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

          <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-60x60@3x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i60/Icon-App-60x60@3x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

          <!--  i72 icon-->

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-72x72@1x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i72/Icon-App-72x72@1x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-72x72@2x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i72/Icon-App-72x72@2x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

         <!--  i76 icon-->

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-76x76@1x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i76/Icon-App-76x76@1x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-76x76@2x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i76/Icon-App-76x76@2x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

       <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-76x76@3x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i76/Icon-App-76x76@3x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

           <!--  i83.5 icon-->

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-App-83.5x83</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/i83.5/Icon-App-83.5x83.5@2x/'.Session::get('imagename')) }}" />
	        </div>
        </div>

          <!--  ismall50 icon-->

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-Small-50x50@1x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/ismall50/Icon-Small-50x50@1x/'.Session::get('imagename')) }}" />
	        </div>
        </div>


        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">Icon-Small-50x50@2x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/ismall50/Icon-Small-50x50@2x/'.Session::get('imagename')) }}" />
	        </div>
        </div>


          <!--  iphone icon-->

        <div class="col-md-12" style="margin-top:10px;">
	        <div class="col-md-4">
	            <p style="margin-left: 15px;">ItunesArtwork@2x</p>
	        </div>
	        <div class="col-md-8">    
	            <img src="{{asset('upload/iphone/istore/'.Session::get('imagename')) }}" />
	        </div>
        </div>

        
        
    </div>
    @endif
    {!! Form::open(array('route' => 'intervention.postresizeimage','files'=>true)) !!}
        <div class="row">
        
            <div class="col-md-6">
                <br/>
                {!! Form::file('photo', array('class' => 'form-control')) !!}
            </div>
            <div class="col-md-6">
                <br/>
                <button type="submit" class="btn btn-primary">Upload Image</button>
            </div>
        </div>
    {!! Form::close() !!}
 </div>
</div>

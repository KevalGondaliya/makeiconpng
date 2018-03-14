
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

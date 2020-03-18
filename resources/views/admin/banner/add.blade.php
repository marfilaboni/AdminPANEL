@extends('layouts.admin')
@section('content')

<div class="container">
<div class="row">
  <div class="col-md-12">
  	<form method="post" action="{{url('admin/banner/submit')}}" enctype="multipart/form-data">
  	 @csrf
  	<div class="card">
		<div class="card-header bg-info">
	     <div class="row">		
		  <div class="col-md-8 card_hd_text">
		  	<h4><i class="fa fa-gg-circle">Upload Banner Information</i></h4>
		  </div>
		  <div class="col-md-4 card_hd_i text-right">
		  	<a href="{{url('admin/banner')}}" class="btn btn-xs btn-secondary"><i class="fa fa-plus-circle">all banner</i></a>
		  </div>
		  <div class="clr"></div>
		 </div>
		</div>
		<div class="card-body">
		  @if(Session::has('success'))	
		    <script>
		    	swal({ title: "success!", text: "Banner Upload Succesfully.", time:5000, icon: "success", });
		    </script>
		  @endif

		  @if(Session::has('error'))
		     <script>
		     	swal({ title: "Opps!", text: "Banner Upload Fail", time:5000, icon: "warning", });
		     </script>
		  @endif
		 <div class="form-group row custom_form {{$errors->has('title')? ' has-error':''}}">
		    <label for="inputPassword" class="col-sm-3 col-form-label">Banner Title:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="title" value="{{old('title')}}">
		      @if($errors->has('title'))
                 <span class="invalid-feedback" role="alert">
                 	<strong>{{$errors->first('title')}}</strong>
                 </span>
		      @endif
		    </div>
		 </div>
		 <div class="form-group row custom_form">
		    <label for="inputPassword" class="col-sm-3 col-form-label">Banner Subtitle:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="subtitle" value="{{old('subtitle')}}">
		    </div>
		 </div>
		 <div class="form-group row custom_form {{$errors->has('btn')? ' has-error':''}}">
		    <label for="inputPassword" class="col-sm-3 col-form-label">Banner Button:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="btn" value="{{old('btn')}}">
		      @if($errors->has('btn'))
               <span class="invalid-feedback" role="alert">
               	  <strong>{{$errors->first('btn')}}</strong>
               </span>
		      @endif
		    </div>
		 </div>
		 <div class="form-group row custom_form">
		    <label for="inputPassword" class="col-sm-3 col-form-label">Banner URL:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="url" value="{{old('url')}}">
		    </div>
		 </div>
		 <div class="form-group row custom_form">
		    <label for="inputPassword" class="col-sm-3 col-form-label">Photo:</label>
		    <div class="col-sm-4">
		      <input type="file" name="pic">
		    </div>
		 </div>
	   </div>
	   <div class="card-footer text-center">
	   	 <button type="submit" class="btn btn-info btn-xs">UPLOAD</button>
	   </div>
    </div>
   </form> 	
  </div>
 </div>
</div>

@endsection
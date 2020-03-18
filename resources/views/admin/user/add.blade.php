@extends('layouts.admin')
@section('content')

<div class="container">
<div class="row">
  <div class="col-md-12">
  	<form>
  	<div class="card">
		<div class="card-header bg-info">
	     <div class="row">		
		  <div class="col-md-8 card_hd_text">
		  	<h4><i class="fa fa-gg-circle">Add User Information</i></h4>
		  </div>
		  <div class="col-md-4 card_hd_i text-right">
		  	<a href="{{url('admin/user')}}" class="btn btn-xs btn-secondary"><i class="fa fa-plus-circle">all user</i></a>
		  </div>
		  <div class="clr"></div>
		 </div>
		</div>
		<div class="card-body">
		 <div class="form-group row custom_form">
		    <label for="inputPassword" class="col-sm-3 col-form-label">Name:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="" placeholder="">
		    </div>
		 </div>
		 <div class="form-group row custom_form">
		    <label for="inputPassword" class="col-sm-3 col-form-label">Phone:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="" placeholder="">
		    </div>
		 </div>
		 <div class="form-group row custom_form">
		    <label for="inputPassword" class="col-sm-3 col-form-label">Email:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="" placeholder="">
		    </div>
		 </div>
		 <div class="form-group row custom_form">
		    <label for="inputPassword" class="col-sm-3 col-form-label">Password:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="" placeholder="">
		    </div>
		 </div>
		 <div class="form-group row custom_form">
		    <label for="inputPassword" class="col-sm-3 col-form-label">Confirm Password:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" name="" placeholder="">
		    </div>
		 </div>
		 <div class="form-group row custom_form">
		    <label for="inputPassword" class="col-sm-3 col-form-label">User Role:</label>
		      <div class="col-md-4">
			      <select class="form-control" name="">
				    <option value="">Select User Role</option>
				    <option value="">Admin</option>
				  </select>
			  </div>
		 </div>
		 <div class="form-group row custom_form">
		    <label for="inputPassword" class="col-sm-3 col-form-label">Photo:</label>
		    <div class="col-sm-4">
		      <input type="file" name="">
		    </div>
		 </div>
	   </div>
	   <div class="card-footer text-center">
	   	 <button type="submit" class="btn btn-info btn-xs">REGISTRATION</button>
	   </div>
    </div>
   </form> 	
  </div>
 </div>
</div>

@endsection
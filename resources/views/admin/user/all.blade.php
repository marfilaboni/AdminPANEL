@extends('layouts.admin')
@section('content')

<div class="container">
<div class="row">
  <div class="col-md-12">
  	<div class="card">
		<div class="card-header bg-info">
	     <div class="row">		
		  <div class="col-md-8 card_hd_text">
		  	<h4><i class="fa fa-gg-circle">All User Information</i></h4>
		  </div>
		  <div class="col-md-4 card_hd_i text-right">
		  	<a href="{{url('admin/user/add')}}" class="btn btn-xs btn-secondary"><i class="fa fa-th">add user</i></a>
		  </div>
		  <div class="clr"></div>
		 </div>
		</div>
		<div class="card-body">
		 <table class="table table-bordered table-striped custom_table">
		   <thead>
		   	 <tr>
		   	  <th>Name</th>
		   	  <th>Phone</th>
		   	  <th>Email</th>
		   	  <th>User Role</th>
		   	  <th>Time</th>
		   	  <th>Manage</th>	
		   	 </tr>	
		   </thead>
		   <tbody>

		   	@foreach ($allUser as $data)
		   	  <tr>
		   	  	<td>{{$data->name}}</td>
		   	  	<td>...</td>
		   	  	<td>{{$data->email}}</td>
		   	  	<td>...</td>
		   	  	<td>{{$data->created_at->format('d M, Y | h:i:s')}}</td>
		   	  	<td>
		   	  		<a href="{{url('admin/user/view'.$data->id)}}" title="view"><i class="fa fa-plus-square fa-lg"></i></a>
		   	  		<a href="#" title="edit"><i class="fa fa-pencil-square fa-lg"></i></a>
		   	  		<a href="#" title="delete"><i class="fa fa-trash fa-lg"></i></a>
		   	  	</td>
		   	  </tr>
		   	@endforeach 

		   </tbody>
		 </table>
	   </div>
	   <div class="card-footer">
	   	 <a class="btn btn-info btn-xs">PDF</a>
	   	 <a class="btn btn-warning btn-xs">Excel</a>
	   	 <a class="btn btn-danger btn-xs">CVS</a>
	   	 <a class="btn btn-success btn-xs">Print</a>
	   </div>
    </div>	
  </div>
 </div>
</div>

@endsection
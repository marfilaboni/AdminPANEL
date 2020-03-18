@extends('layouts.admin')
@section('content')

<div class="container">
<div class="row">
  <div class="col-md-12">
  	<div class="card">
		<div class="card-header bg-info">
	     <div class="row">		
		  <div class="col-md-8 card_hd_text">
		  	<h4><i class="fa fa-gg-circle">All Banner Information</i></h4>
		  </div>
		  <div class="col-md-4 card_hd_i text-right">
		  	<a href="{{url('admin/banner/add')}}" class="btn btn-xs btn-secondary"><i class="fa fa-th">add banner</i></a>
		  </div>
		  <div class="clr"></div>
		 </div>
		</div>
		<div class="card-body">
		 <table class="table table-bordered table-striped custom_table">
		   <thead>
		   	 <tr>
		   	  <th>Title</th>
		   	  <th>Subtitle</th>
		   	  <th>Button</th>
		   	  <th>Creator</th>
		   	  <th>Photo</th>
		   	  <th>Manage</th>	
		   	 </tr>	
		   </thead>
		   <tbody>
		   	 @foreach($allBanner as $data)
		   	  <tr>
		   	  	<td>{{str_limit($data->ban_title,20)}}</td>
		   	  	<td>{{str_limit($data->ban_subtitle,20)}}</td>
		   	  	<td>{{$data->ban_button}}</td>
		   	  	<td>...</td>
		   	  	<td>
		   	  	  @if($data->ban_photo!='')
		   	  	    <img width="50" src="{{asset('uploads/'.$data->ban_photo)}}" alt="ban"/>
		   	  	  @else
		   	  	    <img width="50" src="{{asset('uploads/avatar.png')}}" alt="ban"/>
		   	  	  @endif	
		   	  	</td>
		   	  	<td>
		   	  		<a href="{{url('admin/banner/view'.$data->ban_slug)}}" title="view"><i class="fa fa-plus-square fa-lg"></i></a>
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
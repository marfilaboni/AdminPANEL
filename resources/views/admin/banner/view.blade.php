@extends('layouts.admin')
@section('content')

<div class="container">
<div class="row">
  <div class="col-md-12">
  	<div class="card">
		<div class="card-header bg-info">
	     <div class="row">		
		  <div class="col-md-8 card_hd_text">
		  	<h4><i class="fa fa-gg-circle">View Banner Information</i></h4>
		  </div>
		  <div class="col-md-4 card_hd_i text-right">
		  	<a href="{{url('admin/banner/add')}}" class="btn btn-xs btn-secondary"><i class="fa fa-th">add banner</i></a>
		  </div>
		  <div class="clr"></div>
		 </div>
		</div>
		<div class="card-body">
         <div class="row">
           <div class="col-md-1"></div>
              <div class="col-md-10">
				 <table class="table table-bordered table-hover table-striped custom_view">
				   <thead>
				   	 <tr>
				   	  <td>Banner title</td>
				   	  <td>:</td>
				   	  <td>{{$data->ban_title}}</td>	
				   	 </tr>
				   	 <tr>
				   	  <td>Banner subtitle</td>
				   	  <td>:</td>
				   	  <td>{{$data->ban_subtitle}}</td>	
				   	 </tr>	
				   	 <tr>
				   	  <td>Banner button</td>
				   	  <td>:</td>
				   	  <td>{{$data->ban_button}}</td>	
				   	 </tr>
				   	 <tr>
				   	  <td>Banner URL</td>
				   	  <td>:</td>
				   	  <td>{{$data->ban_url}}</td>	
				   	 </tr>			
				   </thead>
				 </table>
			  </div>	 
			<div class="col-md-1"></div> 
		 </div>	 
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
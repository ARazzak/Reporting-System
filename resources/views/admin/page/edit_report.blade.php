@extends('admin_layout')

@section('content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-right: 0;padding-left: 0;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default card card-primary">
		<form action="{{URL::to('/report/update/{$id}')}}" method="post">

			 @csrf

			 <!-- <hr> -->
             <h4 style="color:green">{{ Session::get('message')}}</h4>

          <div class="card-header">
            <h3 class="card-title ">Edit Report</h3>


            <!--<div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>-->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Organization Name</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" value="{{$report->org_Name}}" name="organizationName" > 
                </div>

                <div class="form-group">
                  <label>Org. Total Student</label>
                   <input type="number" class="form-control" id="exampleInputEmail1" value="{{$report->total_Stu}}" name="orgTotalStu" > 
                </div>		
				
                <input type="hidden" name="id" value="{{ $report->id}}">
				 
				
				

              </div>
              <!-- /.col -->
              
			         <div class="col-md-4">
                  <div class="form-group">
                      <label>Org. Head Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$report->org_Head}}" name="orgHeadName" > 
                  </div>

                  <div class="form-group">
                  <label>Org. Class Room</label>
                   <input type="number" class="form-control" id="exampleInputEmail1" value="{{$report->class_room}}" name="orgClassRoom" > 
                  </div>


               
               </div><!-- /.col -->
			     
				
           

           

			         <div class="col-md-4">
               		 
               <div class="form-group">
                  <label>Org. Head Mobile</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" value="{{$report->head_Mobile}}" name="orgHeadMobile" > 
                </div> 

                

                  
               </div><!-- /.col -->
				
				
                 
             
			  
            </div><!-- /.row-->

        </div> <!-- /.card-header-->
		
		<!--Submit-->
		<div class="card-footer">
		 <button class="btn btn-primary btn-lg">Submit</button>

		</div>
       </from>
       </div>
    </div><!-- /.container-fluid -->
   </section> <!-- /.section end -->
   
	
</div>	


@endsection
@extends('admin_layout')

@section('content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-right: 0;padding-left: 0;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employee Attendance</h1>
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
		<form action="{{URL::to('/save')}}" method="post">

			 @csrf

			 <!-- <hr> -->
             <h4 style="color:green">{{ Session::get('message')}}</h4>

          <div class="card-header">
            <h3 class="card-title ">Add Employee</h3>


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
                  <label>Employee Name</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Employee Name" name="employeeName"> 
                </div>	
				
				
				  <div class="bootstrap-timepicker">
                  <div class="form-group">
                    <label>Out Time :</label>

                    <div class="input-group">
                      <input type="time" name="out_time" class="form-control timepicker">

                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                      </div>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </div>
				
				<div class="form-group">
                  <label>Status</label>
                   <input type="text"  name="status" class="form-control" id="exampleInputEmail1" placeholder="Status"> 
                </div>

              </div>
              <!-- /.col -->
              
			   <div class="col-md-4">
			     
				 <div class="form-group">
                  <label>Data</label>
                   <input type="text" name="date" class="form-control" id="exampleInputEmail1"> 
                </div>

              <!-- Working Hours-->
			  <div class="form-group">
                  <label>Working Hours</label>
                   <input type="time" name="work_Hour" class="form-control" id="exampleInputEmail1"> 
                </div>

              </div>
              <!-- /.col -->

			   <div class="col-md-4">
               		 <!-- time Picker -->
                <div class="bootstrap-timepicker">
                  <div class="form-group">
                    <label>In Time :</label>

                    <div class="input-group">
                      <input type="time" name="in_time" class="form-control timepicker">

                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                      </div>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </div>
				
				<div class="form-group">
                  <label>Remarks</label>
                   <input type="text"  name="remarks" class="form-control" id="exampleInputEmail1" placeholder="Remarks"> 
                </div>
                 
              </div>
              <!-- /.col -->
			  
              </div>

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
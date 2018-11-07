@extends('admin_layout')


<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default card card-primary">
		<form action="" method="post">
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
                   <input type="text" name="employeeName" class="form-control" id="exampleInputEmail1" placeholder="Working Hours" > 
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



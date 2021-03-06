@extends('admin_layout')

@section('content')


  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Table With Full Features</h3>
            </div>
            <!-- /.card-header -->

            <h4 style="color:green">{{ Session::get('message')}}</h4>
            <div class="card-body">
              <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl. No.</th>
                  <th>Employee Name</th>
                  <th>Date</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Work Hours</th>
                  <th>Remarks</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                 @php $i=0 @endphp
                @foreach($att as $attens )
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $attens->emp_Name }}</td>
                  <td>{{ $attens->current_Date }}</td>
                  <td>{{ $attens->start_Time }}</td>
                  <td>{{ $attens->end_Time }}</td>
                  <td>{{ $attens->working_Hours }}</td>
                  <td>{{ $attens->remarks }}</td>
                  <td><a href="{{url('/attendance/edit/'.$attens->id) }}" class="btn btn-success btn-sm"><i class="fa fa-pencil mr-1"></i></a>
                  <a href="{{url('/attendance/delete/'.$attens->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> </a>
                      
                  </td>
                </tr>
                
                @endforeach


                  <!-- <tr>
                   <td>1</td>
                   <td>Abu</td>
                   <td>2018-11-06</td>
                   <td>10:00 AM</td>
                   <td>07:00 PM</td>
                   <td>09</td>
                   <td>good</td>
                   <td>1</td>
                   <td>edit</td>
                
                  </tr> -->
                </tbody>
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


@endsection
@extends('admin_layout')

@section('content')


  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         

          <div class="card">
            <div class="card-header card-primary">
              <h3 class="card-title">Data Table With Full Features</h3>
            </div>
            <!-- /.card-header -->

            <h4 style="color:green">{{ Session::get('message')}}</h4>
            <div class="card-body">
              <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl. No.</th>
                  <th>Organization Name</th>
                  <th>Org. Head Name</th>
                  <th>Org. Head Mobile</th>
                  <th>Org. Total Student</th>
                  <th>Org. Class Room</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                 @php $i=0 @endphp
                @foreach($rep as $reps )
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $reps->org_Name }}</td>
                  <td>{{ $reps->org_Head }}</td>
                  <td>{{ $reps->head_Mobile }}</td>
                  <td>{{ $reps->total_Stu }}</td>
                  <td>{{ $reps->class_room }}</td>
                  <td><a href="{{url('/report/edit/'.$reps->id) }}" class="btn btn-success btn-sm"><i class="fa fa-pencil mr-1"></i></a>
                  <a href="{{url('/report/delete/'.$reps->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> </a>
                      
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
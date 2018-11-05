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
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl. No.</th>
                  <th>Employee Name</th>
                  <th>Date</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Work Hours</th>
                  <th>Remarks</th>
                  <th>Status</th>
                </tr>
                </thead>
                @php $atten @endphp

                @foreach($atten as $attens )
                <tbody>
                <tr>
                  <td>{{ $attens->id }}</td>
                  <td>{{ $attens->emp_Name }}</td>
                  <td>{{ $attens->current_Date }}</td>
                  <td>{{ $attens->start_Time }}</td>
                  <td>{{ $attens->end_Time }}</td>
                  <td>{{ $attens->working_Hours }}</td>
                  <td>{{ $attens->remarks }}</td>
                  <td>{{ $attens->status }}</td>
                </tr>
                

                </tbody>
                @endforeach
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
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
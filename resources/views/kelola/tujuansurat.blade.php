@extends('/main/main')
@section('head')
<link rel="stylesheet" href="{{url('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">


@section('conten')
<div class="container">
  <section class="content">
    <div class="row">
      <div class="col-12">

        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="text-center">DATA TUJUAN SURAT</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <a href='/tambahtujuansurat' class="btn btn-primary mb-2">Tambah Tujuan Surat</a>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tingkat Biaya</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($tujuansurat as $ts)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$ts->tujuansurat}}</td>
                  <td>X</td>
                </tr>
                @endforeach
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
</div>
@endsection
@section('foot')
<script src="{{url('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
  $(function() {
    $("#example1").DataTable({

    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
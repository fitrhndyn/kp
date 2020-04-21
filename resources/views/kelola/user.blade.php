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
            <h3 class="text-center">DATA PENGGUNA</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <a href='/tambahuser' class="btn btn-primary mb-2">Tambah Pengguna</a>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pengguna</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($user as $us)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$us->username}}</td>
                  <td>{{$us->name}}</td>
                  <td>{{$us->address}}</td>
                  <td>{{$us->level}}</td>
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
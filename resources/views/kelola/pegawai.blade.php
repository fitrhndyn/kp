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
            <h3 class="text-center">DATA PEGAWAI</h3>
           
            
          </div>
  
          <!-- /.card-header -->
          <div class="card-body">
            <a href='/tambahpegawai' class="btn btn-primary mb-2">Tambah Pegawai</a>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIP</th>
                  <th>NAMA</th>
                  <th>Pangkat</th>
                  <th>Jabatan</th>
                  <th>No.HP</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pegawai as $pg)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$pg->nip}}</td>
                  <td>{{$pg->nama}}</td>
                  <td>{{$pg->golongan['pangkat']}}</td>
                  <td>{{$pg->jabatan}}</td>
                  <td>{{$pg->phone}}</td>
                  <td>{{$pg->alamat}}</td>
                  <td> <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">
                      Ubah</button>
                        <a href="" onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger btn-xs">
                                    Hapus
                                </a></td>
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

<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
@extends('/main/main')
@section('head')
<link rel="stylesheet" href="{{url('/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{url('/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@section('conten')
<div class="container">
  <section class="content">
    <div class="row">
      <div class="col-12">

        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tambah Pengguna</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
            <div class="col-md-6">
         
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
   
        <!-- /.modal-dialog -->
      </div>
@endsection
@section('foot')
<script src="{{url('/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
<script src="{{url('/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

//Datemask dd/mm/yyyy
$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
  })
</script>
@endsection
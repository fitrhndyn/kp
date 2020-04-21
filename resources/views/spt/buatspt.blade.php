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
            <h3 class="card-title">Tambah SPT</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                    <label for="nospt">No. SPT</label> <small>(Misal: 800/ST/37/2020)</small>
                    <input type="text" class="form-control" id="nospt" placeholder="Optional">
              </div>
              <div class="form-group">
                  <label>Dasar Surat*</label>
                  <select class="select2" multiple="multiple" 
                  data-placeholder="Pilih Dasar Surat" style="width: 100%;">                 
                  @foreach($dasarsurat as $dasarsurat)                    
                    <option>{{$dasarsurat->dasarsurat}}</option>
                    @endforeach 
                  </select>
                </div>
                <div class="form-group">
                  <label>Pegawai Yang Ditugaskan*</label>
                  <select class="select2" multiple="multiple" 
                  data-placeholder="Pilih Pegawai" style="width: 100%;">                 
                  @foreach($ttd as $pegawai)                    
                    <option>{{$pegawai->nama}}</option>
                    @endforeach 
                  </select>
                </div>
                <label>Tanggal Tugas*</label>
                <div class="input-group">                
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control"  style="width: 100%;" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  </div>
                </div>

                <div class="col-md-6">                
                <div class="form-group">
                  <label>Tanggal SPT*</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  </div>
                  <!-- /.input group -->
                </div>
                
                <div class="form-group">
                  <label>Tempat Tugas*</label>
                  <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Pilih Tempat</option>
                  @foreach($tempat as $tempat)
                    <option>{{$tempat->kecamatan}}</option>
                    @endforeach
                  </select></div>
                  <div class="form-group">
                  <label>Tujuan Tugas*</label>
                  <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Pilih Tujuan</option>
                  @foreach($tujuan as $tujuan)                    
                    <option>{{$tujuan->tujuansurat}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Yang Menandatangani SPT*</label>
                  <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Pilih Yang Menandatangani SPT</option>
                  @foreach($ttd as $ttd)                    
                    <option>{{$ttd->nama}}</option>
                    @endforeach
                  </select>
                <!-- /.form-group -->
                
              </div>
            </div>
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
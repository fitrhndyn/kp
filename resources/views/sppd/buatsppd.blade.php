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
            <h3 class="card-title">Tambah SPPD</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                    <label for="lembar">Lembar Ke</label> 
                    <input type="text" class="form-control" id="lembar" placeholder="Optional">
              </div>
              <div class="form-group">
                    <label for="kode">Kode No.</label> <small>(Misal: 5.2.2.01)</small>
                    <input type="text" class="form-control" id="kode" placeholder="Optional">
              </div>
              <div class="form-group">
                    <label for="nosppd">Nomor SPPD</label> <small>(Misal: 028/38/SPPD/1/2020)</small>
                    <input type="text" class="form-control" id="nosppd" placeholder="Optional">
              </div>
              <div class="form-group">
                  <label>Pengguna Anggaran*</label>
                  <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Pilih Pengguna Anggaran</option>
                  @foreach($penggunaanggaran as $penggunaanggaran)
                    <option>{{$penggunaanggaran->jabatan}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Pegawai yang Melaksanakan Perjalanan Dinas*</label>
                  <select class="form-control select2"style="width: 100%;">
                    <option selected="selected">Pilih Pegawai</option>
                    @foreach($pelaksana as $pelaksana)
                    <option> {{$pelaksana->nama}}</option>
                    @endforeach 
                  </select>
                </div>
                <div class="form-group">
                  <label>Tingkat Biaya Perjalanan Dinas*</label>
                  <select class="form-control select2"style="width: 100%;">
                    <option selected="selected">Pilih Tingkat Biaya</option>
                    @foreach($biaya as $biaya)
                    <option> {{$biaya->tingkatbiaya}}</option>
                    @endforeach 
                  </select>
                </div>
                <div class="form-group">
                  <label>Maksud Perjalanan*</label>
                  <select class="form-control select2"style="width: 100%;">
                    <option selected="selected">Pilih Maksud Perjalanan</option>
                    @foreach($maksud as $maksud)
                    <option> {{$maksud->tujuansurat}}</option>
                    @endforeach 
                  </select>
                </div>
                <div class="form-group">
                  <label>Kendaraan*</label>
                  <select class="form-control select2"style="width: 100%;">
                    <option selected="selected">Pilih Kendaraan</option>
                    @foreach($kendaraan as $kendaraan)
                    <option> {{$kendaraan->alatangkut}}</option>
                    @endforeach 
                  </select>
                </div>
                <div class="form-group">
                  <label>Tempat Berangkat*</label>
                  <select class="form-control select2"style="width: 100%;">
                    <option selected="selected">Pilih Tempat</option>
                    @foreach($tempat as $tempat)
                    <option> {{$tempat->kecamatan}}</option>
                    @endforeach 
                  </select>
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                  <label>Tempat Tujuan</label>
                  <select class="form-control select2"style="width: 100%;">
                    <option selected="selected">Pilih Tempat</option>
                    @foreach($tempattujuan as $tempattujuan)
                    <option> {{$tempattujuan->kecamatan}}</option>
                    @endforeach 
                  </select>
                </div>
                <div class="form-group">
                    <label for="lama">Lama Perjalanan</label> <small>(Hari)</small>
                    <input type="text" class="form-control" id="lama" placeholder="">
              </div>     
                  <div class="form-group">
                  <label>Tanggal Berangkat*</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control"  style="width: 100%;" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  </div>
                  </div>
                <div class="form-group">
                  <label>Tanggal Kembali*</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  </div>
                </div>
                <div class="form-group">
                  <label>Pengikut*</label>
                  <select class="select2" multiple="multiple" data-placeholder="Pilih Pengikut" style="width: 100%;">
                  @foreach($pengikut as $pengikut)
                   <option>{{$pengikut->nama}}</option>
                   @endforeach 
                 </select>
                </div>
                <div class="form-group">
                    <label for="pa_instansi">Pengguna Anggaran Instansi</label> 
                    <input type="text" class="form-control" id="pa_instansi" placeholder="Optional">
              </div>
              <div class="form-group">
                    <label for="pa_akun">Pengguna Anggaran Akun</label> 
                    <input type="text" class="form-control" id="pa_akun" placeholder="Optional">
              </div>
                <div class="form-group">
                  <label>Tanggal SPPD*</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  </div>
                  <!-- /.input group -->
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
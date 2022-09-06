@extends('p_layouts.main')

@section('container')
<!-- Content Header (Page header) --> 
    <div class="content-header">
    <div class="container-fluid">
      <div class="col-sm-12">
        <div class="row mb-0">
          <h1 class="md-0">Tambah Data Kinerja Pegawai</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
    </div>
  <!-- /.content-header -->              
<!-- form start -->
<div class="container-fluid">
  <div class="col-sm-12">
    <div class="card">
              <form action="/pegawai/kinerja-pegawai" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  @csrf
                  <div class="form-group col-md-2">
                    <label for="tgl">Tanggal</label>
                    <input type="date" class="form-control" name="tgl" id="tgl">
                  </div>
                  <div class="form-group col-md-5">
                    <label for="hasil">Hasil Kinerja</label>
                    <textarea class="form-control" id="hasil" name="hasil" rows="4" placeholder="Masukkan Hasil Kinerja"></textarea>
                  </div>
                  <div class="form-group col-md-5">
                    <label for="bukti">Bukti Foto</label>
                    <div class="input-group">
                      <input type="file" class="form-control" id="bukti" name="bukti">
                    </div>
                  </div>
                  <div class="form-group col-md-5">
                    <label for="bukti">Bukti Document</label>
                    <div class="input-group">
                      <input type="file" class="form-control" id="bukti" name="bukti">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <div class="float-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{url('/pegawai/kinerja-pegawai')}}" class="btn btn-warning">Batal</a>
                  </div>
                </div>
              </form>
            </div>
            </div>
          </div>
    </div>
  </div>
</div>
<!-- /.card -->
<!-- /.content-wrapper -->
@endsection
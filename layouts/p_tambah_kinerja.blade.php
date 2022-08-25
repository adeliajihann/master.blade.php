
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('template/dist/img/logo.png') }}">
  @include('pegawai.asset')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  @include('pegawai.header')
  @include('pegawai.sidebar')
  <div class="wrapper"> 
<div class="content-wrapper">
  <!-- Content Header (Page header) --> 
    <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-0">
        <div class="col-sm-12">
          <h1 class="md-0">Tambah Data Kinerja Pegawai</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->              
<!-- form start -->
<div class="card">
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputTanggal">Tanggal</label>
                    <input type="date" class="form-control" id="exampleInputTanggal" placeholder="" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputHasilKinerja">Hasil Kinerja</label>
                    <textarea class="form-control" id="exampleInputHasilKinerja" rows="4" placeholder="Masukkan Hasil Kinerja"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Bukti</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer col sm-3">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-primary">Batal</button>
                </div>
              </form>
            </div>
          </div>
            <!-- /.card -->
            <!-- /.content-wrapper -->

            @include('pegawai.footer')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('template/dist/img/logo.png') }}">
  <title>{{$title}}</title>
  @include('pegawai.asset')
</head>

<body class="hold-transition sidebar-mini layout-fixed"> 
    @include('pegawai.header')
    @include('pegawai.sidebar')

    <!--CONTENT-->
    <div class="wrapper"> 
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">Ubah Profil</h1>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        
            <!-- Main content -->
            <div class="card">
                <div class="card-header">
                    <form>
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <div class="col-lg-5">
                                <label for="exampleFormControlInput1">Nama</label>
                                <input type="nama" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-5">
                                <label for="exampleFormControlInput1">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-5">
                                <label for="exampleFormControlInput1">Alamat</label>
                                <input type="alamat" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-5">
                                <label for="exampleFormControlInput1">No Telp</label>
                                <input type="no_hp" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <a href="#" class="nav-link"> 
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </a>
                    </form>
                </div>
            </div>
            <!-- Main content -->
    </div>
    <!--CONTENT-->

    @include('pegawai.footer')

</body>
</html>
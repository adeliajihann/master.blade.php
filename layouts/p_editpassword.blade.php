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
                    <h1 class="m-0">Ubah Password</h1>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        
            <!-- Main content -->
            <div class="card" style="width: 25rem;">
                <div class="card-header">
                    <form>
                        <div class="form-group">
                            <div class="col-lg-15">
                                <label for="exampleFormControlInput1">Kata Sandi Baru</label>
                                <input type="nama" class="form-control" id="exampleFormControlInput1" placeholder="Kata Sandi Baru ..">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-15">
                                <label for="exampleFormControlInput1">Kata Sandi Baru</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ulangi Kata Sandi Baru ..">
                            </div><br>
                            <a href="#" class="nav-link"> 
                                <button type="button" class="btn btn-primary">Simpan</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Main content -->
    </div>
    <!--CONTENT-->

    @include('pegawai.footer')

</body>
</html>
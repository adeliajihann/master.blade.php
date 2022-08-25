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

    <!-- Content Wrapper. Contains page content -->
    <div class="wrapper"> 
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">Pengaturan</h1>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        
            <!-- Main content -->
            <div class="card">
                <div class="card-header" class="text-center">
                    <div class="row justify-content-md-center">
                        <div class="col-md-4 col-sm-6 col-12"><br>
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="box-icon"><br><i class="fa-5x fas fa-user-edit"></i></span>
                                    <span class="info-box-number">Profil Saya</span>
                                    <span class="info-box-text">Ubah data diri kamu</span><br>
                                    <a href="{{url ('/layouts/p_editprofile')}}" class="nav-link" style="text-align: center"> 
                                      <button type="button" class="btn btn-warning rounded-pill">Ubah Sekarang</button>
                                    </a>
                                </div>
                            </div><br>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-md-4 col-sm-6 col-12"><br>
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="box-icon"><br><i class="fa-5x fas fa-lock"></i></span>
                                    <span class="info-box-number">Kata Sandi Saya</span>
                                    <span class="info-box-text">Ganti kata sandimu</span><br>
                                    <a href="{{url ('/layouts/p_editpassword')}}" class="nav-link" style="text-align: center"> 
                                      <button type="button" class="btn btn-warning rounded-pill">Ubah Sekarang</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
            <!-- Main content -->
    </div>
    
    <!--CONTENT-->

    @include('pegawai.footer')

</body>
</html>
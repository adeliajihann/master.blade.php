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
                <h1 class="m-0">Dashboard</h1>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
              <!-- ./col -->
              <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-purple">
                    <div class="inner">
                      <h3>1</h3>
                      <p>Kinerja Pegawai</p>
                    </div>
                    <div class="icon">
                      <i class="nav-icon fa fa-suitcase"></i>
                    </div>
                    <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>1</h3>
                      <p>Laporan</p>
                    </div>
                    <div class="icon">
                      <i class="ionicons ion-document-text"></i>
                    </div>
                    <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
              <!-- ./col -->
            </div><!-- /.container-fluid -->
        </section>
</div>
    <!--CONTENT-->

    @include('pegawai.footer')

</body>
</html>
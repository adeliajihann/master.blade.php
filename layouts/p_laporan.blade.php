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
  <!-- CONTENT -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-0">
          <div class="col-sm-12">
            <h1 class="md-0">Data Kinerja Pegawai</h1><br>
            <form>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="tglawal">Tanggal Awal</label>
                                <input type="date" class="form-control" id="tglawal" placeholder="">
                            </div>
                            &nbsp;<a style="padding-top: 40px">s/d</a>&nbsp;
                            <div class="form-group col-md-2">
                                <label for="tglakhir">Tanggal Akhir</label>
                                 <input type="date" class="form-control" id="tglakhir" placeholder="">
                            </div>
            </form>
            <div class="col box-header text-right" style="float: right; margin-bottom: 25px">
                <a class="btn btn-success">Print<p><i class="fa fa-print fa-1x"></i></p></a>
            </div><!-- /.col -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
    <!-- /.content-header -->

    <div class="card">
        <div class="card-header"
            <h3 class="card-title">Show Entries</h3>
            <div class="card-tools" style="padding-top: 10px ">
                <h3 class="card-title">Search: </h3>
                <div class="input-group input-group-sm" style="width: 200px; padding-left:20px;">
                    <input type="text" name="table_search" class="form-control float-right">
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6"></div>
            <div class="col-sm-12 col-md-6"></div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <table id="example2" class="table table-sm table-bordered table-hover dataTable dtr-inline " aria-describedby="example2_info">
            <thead>
                <th style="text-align:center">No</th>
                <th style="text-align:center">Tgl</th>
                <th style="text-align:center">Hasil</th>
                <th style="text-align:center">Bukti</th>
                <th style="text-align:center">Status</th>
            </thead>
            <tbody>
            <tr class="odd">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="even">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
          </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9 col-md-9">
            <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 30 entries
            </div>
        </div>
          <div class="col-sm-3 col-md-3" style="padding-left: 20px;">
              <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example2_previous">
                            <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                        </li>
                        <li class="paginate_button page-item active">
                            <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                        </li>
                        <li class="paginate_button page-item next" id="example2_next">
                            <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        </div>
        <!-- /.card-body -->
      </div>
</div>
</div>

      <!-- CONTENT -->
      @include('pegawai.footer')

</body>
</html>
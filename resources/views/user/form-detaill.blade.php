<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

  <style>
        h1{
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        a{
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('user.partial.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('user.partial.header')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- {{-- <h1 class="h3 mb-4 text-gray-800 text-center">Table</h1> --}} -->
          <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>Form</strong> 
                </div>
                <div class="card-body">
                    <br/>
                    
                <form>
                    <div class="form-group">
                    <label for="">id transaksi</label>
                <input type="text" class="form-control" name="id_transaksi" value="{{ $detail->id_transaksi}}">
            </div>

            <div class="form-group">
                <label for="">id user</label>
            <input type="text" class="form-control" name="id_user" value="{{ $detail->id_user }}">
        </div>
                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            <input type="text" name="nama_pembeli" class="form-control" value="{{ $detail->nama_pembeli}}">
                        </div>

                        <label for="">id_makanan</label>
                          <input type="text" class="form-control" name="id_makanan" value="{{ $detail->id_makanan}}" readonly>

                        <div class="form-group">
                            <label for="">Nama Makanan </label>
                            <input type="text" name="nama_menu" class="form-control" value="{{ $detail->nama_menu}}">
                        </div>

                        <!-- <div class="form-group">
                            <label for="">Status Menu</label>
                            <input type="text" name="status" class="form-control" value="{{ $detail->status}}">
                        </div> -->

                        <div class="form-group">
                            <label for="">Jumlah Beli </label>
                                <input type="text" name="jumlah_beli" class="form-control" value="{{ $detail->jumlah_beli}}">
                            </div>
                            <div class="form-group">
                                <label for="">Harga Makanan </label>
                                    <input type="text" name="harga" id="nama1" class="form-control" value="{{ $detail->harga}}">
                                </div>

                        <div class="form-group">
                            <label for="">Total Harga</label>
                            <input type="text" id="total" name="total_harga" class="form-control" value="{{ $detail->total_harga}}" >
                        </div>

                        <div class="form-group">
                        <label for="">Pembayaran</label>
                            
                            <input type="number" name="pembayaran" class="form-control" value="{{ $detail->pembayaran }}">
                        </div>


                        <div class="form-group">
                        <label for="">Kembalian</label>
                            <input type="number" name="kembalian" class="form-control" value="{{ $detail->kembalian }}">
                        </div>

                        <div class="form-group">
                            <a href="/transaksi" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</div>

          @include('user.partial.footer');
</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
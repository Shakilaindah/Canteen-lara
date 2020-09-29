<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

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
        @include('user.partial.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>Form Pembelian</strong> 
                </div>
                <div class="card-body">
                    <br/>
                    
                <form method="post" action="{{ url('/detailorder')}}" id="form" enctype="multipart/form-data">

                    @csrf


                    <label for="">id user</label>
                          <input type="text" class="form-control" name="id_user" value="" > 
                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            @if($errors->has('nama_pembeli'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_pembeli')}}
                                </div>
                            @endif
                            <input type="text" name="nama_pembeli" class="form-control" value="">
                        </div>

                        <label for="">id_makanan</label>
                          <input type="text" class="form-control" name="id_makanan" value="{{ $makanan->id }}" readonly>

                        <div class="form-group">
                            <label for="">Nama Makanan </label>
                            @if($errors->has('nama_menu'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_menu')}}
                                </div>
                            @endif
                            <input type="text" name="nama_menu" class="form-control" value="{{ $makanan->nama }}">
                        </div>

                        <div class="form-group">
                            <label for="">Stock</label>
                            <!-- {{-- @if($errors->has('stok'))
                                <div class="text-danger">
                                    {{ $errors->first('stok')}}
                                </div>
                            @endif --}} -->
                            <input type="number" name="stok" class="form-control" value="{{ $makanan->stok }}">
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Beli </label>
                                @if($errors->has('jumlah_beli'))
                                    <div class="text-danger">
                                        {{ $errors->first('jumlah_beli')}}
                                    </div>
                                @endif
                                <input type="text" name="jumlah_beli" class="form-control" value="">
                            </div>

                            <div class="form-group">
                                <label for="">Harga Makanan </label>
                                    <!-- {{-- @if($errors->has('harga'))

                                            <div class="text-danger">
                                            {{ $errors->first('harga')}}
                                        </div>
                                    @endif --}} -->
                                    <input type="text" name="harga" id="nama1" class="form-control" value="{{ $makanan->harga }}">
                                </div>

                    <a class="btn btn-info" value="kali" onclick="kali()" style="color: white">Hitung</a>

                        <div class="form-group">
                        <label for="">Total Harga</label>
                            <input type="text" id="total" name="total_harga" class="form-control" value="" >
                        </div>
                        <div class="form-group">
                        <label for="">Masukkan Uang</label>
                            @if($errors->has('pembayaran'))
                                <div class="text-danger">
                                    {{ $errors->first('pembayaran')}}
                                </div>
                            @endif
                            <input type="number" name="pembayaran" class="form-control" value="">
                        </div>

                    <a class="btn btn-info" value="kali" onclick="kurang()" style="color: white">Hitung</a>

                        <div class="form-group">
                        <label for="">Kembalian</label>
                             <!-- {{-- @if($errors->has('kembalian'))
                                <div class="text-danger">
                                    {{ $errors->first('kembalian')}}
                                </div>
                            @endif --}} -->
                            <input type="number" name="kembalian" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/makan" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</div>

</body>
<script>
   function cek(){
        if (form.jumlah_beli.value == "" || form.harga.value == "") {
            alert("Angka Kosong");
            exit
        }
    }

        function kali(){
    cek();
    a = parseInt(form.jumlah_beli.value);
    b = parseInt(form.harga.value);
    form.total_harga.value = a*b;
    }

    function kurang(){
    // cek();
    b = parseInt(form.pembayaran.value);
    a = parseInt(form.total_harga.value);
    form.kembalian.value = b-a;
    }
</script>
              
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
@include('user.partial.footer')
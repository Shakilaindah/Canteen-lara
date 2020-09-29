<!DOCTYPE html>
<html>
<head>
  <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <style type="text/css">
    table tr td,
    table tr th{
      font-size: 9pt;
    }
  </style>
  <center>
    <h4>PDF Transaksi</h4>
    <h6><a target="_blank" href=""></a></h5>
  </center>

  <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>No</th>
                      <th>Nama Pembeli</th>
                      <th>Id Makanan</th>
                      <th>Nama Makanan</th>
                      <th>Harga</th>
                      <th>stok</th>
                      <th>Jumlah Makanan yang di beli</th>
                      <th>Total Harga</th>
                      <th>Pembayaran</th>
                      <th>kembalian</th>
                </tr>
              </thead>
              
              <tbody>
                @foreach ($detail as $m)
                <tr>
                  <th scope="row">{{ $m->id_transaksi }}</th>                      
                  <td>{{ $m->nama_pembeli }}</td>
                  <td>{{ $m->id_makanan}}</td>
                  <td>{{ $m->nama_menu }}</td>
                  <td>{{ $m->harga }}</td>
                  <td>{{ $m->status }}</td>
                  <td>{{ $m->jumlah_beli }}</td>
                  <td>{{ $m->total_harga }}</td>
                  <td>{{ $m->pembayaran }}</td>
                  <td>{{ $m->kembalian }}</td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
      </div>

    </div>

</body>
</html>
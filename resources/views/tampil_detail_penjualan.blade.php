<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table border="1">
    <tr>
      <th>No</th>
      <th>Id Penjualan</th>
      <th>Id Barang</th>
      <th>Jumlah</th>
      <th>Total Harga</th>
    </tr>
    @foreach($detail_penjualan as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->id_penjualan}}</td>
      <td>{{$data->id_barang}}</td>
      <td>{{$data->jumlah}}</td>
      <td>{{$data->total_harga}}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>
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
      <th>Nama Barang</th>
      <th>Harga Barang</th>
      <th>Qty</th>
    </tr>
    @foreach($barang as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->nama_barang}}</td>
      <td>{{$data->harga_barang}}</td>
      <td>{{$data->qty}}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>
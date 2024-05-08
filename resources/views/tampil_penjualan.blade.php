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
      <th>Nama Pelangan</th>
      <th>Sub Total</th>
      <th>Dskon</th>
      <th>Grand Total</th>
    </tr>
    @foreach($penjualan as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->nama_pelanggan}}</td>
      <td>{{$data->sub_total}}</td>
      <td>{{$data->diskon}}</td>
      <td>{{$data->grand_total}}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>
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
      <th>Nama</th>
      <th>jumlah</th>
      <th>Merk Id</th>
    </tr>
  @foreach($produk2 as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->nama_produk}}</td>
      <td>{{$data->jumlah}}</td>
      <td>{{$data->merk_id}}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>
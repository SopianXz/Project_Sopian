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
    </tr>
    @foreach($merk as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->nama_merk}}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>
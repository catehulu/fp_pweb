<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($film as $films)
        <label for="nama_film">Nama Film</label>
        <h3 name="nama_film">{{$films->nama_film}}</h3>
        <label for="durasi">dursai</label>
        <h3 name="durasi">{{$films->durasi}}</h3>
        <label for="cover_image">Poster</label>
        <img src="{{asset('storage/cover_image/'.$films->cover_image.'')}}" alt="">
        <a href="{{route('admin.readone',$films->id_film)}}">Detail</a>
    @endforeach
</body>
</html>
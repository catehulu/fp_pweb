<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Input Film</h1>
    <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nama_film">Nama Film :</label>
        <input type="text" name="nama_film" id="">
        <label for="deskripsi_film">Deskripsi Film :</label>
        <textarea cols="39" rows="3" type="text" name="deskripsi_film" id=""></textarea>
        <label for="durasi">Durasi Film :</label>
        <input type="number" name="durasi" placeholder="menit" id="">
        <label for="cover_image"></label>
        <input type="file" name="cover_image" id="">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
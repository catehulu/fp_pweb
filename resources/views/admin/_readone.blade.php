<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="data-film">
        <label for="nama_film">Nama Film</label>
        <h3 name="nama_film">{{$films->nama_film}}</h3>
        <label for="durasi">Durasi</label>
        <h3 name="durasi">{{$films->durasi}}</h3>
        <label for="cover_image">Poster</label>
        <img src="{{asset('storage/cover_image/'.$films->cover_image.'')}}" alt="">
        <button onclick="editMode()">Edit</button>
        <form action="{{route('admin.delete')}}" method="post">
            @csrf
            <input name="id_film" type="text" value="{{$films->id_film}}" hidden>
            <button type="submit">Delete</button>
        </form>
    </div>
    <div id="edit-film" hidden>
        <form action="{{route('admin.update',$films->id_film)}}" method="POST">
            @csrf
            {{ method_field('PATCH') }}
            <!-- Judul -->
            <div class="form-group">
                    <label for="nama_film"><b>Judul Film</b></label>
                    <input name="nama_film" type="text" class="form-control" id="nama_film" placeholder="Judul Film">
                </div>

                <!-- Sinopsis -->
                <div class="form-group">
                    <label for="deskripsi_film"><b>Sinopsis</b></label>
                    <textarea name="deskripsi_film" class="form-control" id="deskripsi_film" placeholder="Sinopsis Film" rows="5"></textarea>
                </div>

                <!-- Durasi -->
                <div class="form-group">
                    <label for="durasi"><b>Durasi dalam menit</b></label>
                    <input name="durasi" class="form-control" type="number" value="0" id="Durasi">
                </div>

                <!-- Produser -->
                <div class="form-group">
                    <label for="produser"><b>Produser</b></label>
                    <input name="produser" type="text" class="form-control" id="produser" placeholder="Produser Film">
                </div>

                <!-- Director -->
                <div class="form-group">
                    <label for="director"><b>Director Film</b></label>
                    <input name="director" type="text" class="form-control" id="director" placeholder="Director Film">
                </div>

                <!-- Batasan Umur -->
                <div class="form-group">
                    <label><b>Batasan Umur</b></label>
                    <select id='age_rating' name="age_rating" class="form-control" value>
                            <option value="1">Semua Umur</option>
                            <option value="2">13+</option>
                            <option value="3">17+</option>
                            <option value="4">21+</option>
                    </select>
                </div>

                <!-- Genre -->
                <div class="form-group">
                    <label for="genre"><b>Genre Film</b></label>
                    <input name="genre" typ-e="text" class="form-control" id="formGenre" placeholder="Genre Film">
                </div>

        </form>
        <button onclick="viewMode()">Back</button>
    </div>

    <script>
        function editMode() {
            var x = document.getElementById("edit-film");
            var y = document.getElementById("data-film");
            x.style.display = "block";
            y.style.display = "none";
            document.getElementById('age_rating').value = {{$films->age_rating}}
        }

        function viewMode() {
            var x = document.getElementById("edit-film");
            var y = document.getElementById("data-film");
            x.style.display = "none";
            y.style.display = "block";
        }

        
    </script>

</body>
</html>
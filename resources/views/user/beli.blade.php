@extends('layouts.app')

@section('content')
<div style="border-style:outset;margin:25px 50px;" class="back">
    <div style="text-align:left;border-bottom:solid gray;margin:25px;">
        <h1>Film : {{$film->nama_film}}</h1>
        <div id="unselected">
            <h2>Silahkan pilih jadwal penayangan</h2>
        </div>
        <div id="selected" style="display:none">
            <label for="hargaTiket">Harga Tiket : Rp</label>
            <h2 id="hargaTiket"></h2>
            <label for="jumlahTiket">Stok Tiket : </label>
            <h2 id="jumlahTiket"></h2>
            <label for="studio">Studio : </label>
            <h2 id="studio"></h2>
        </div>
    </div>
    <div class="container">
        <!-- Nama Pelanggan -->
        <div class="form-group">
            <label for="nama_pelanggan">Nama Pelanggan</label>
            <input name="nama_pelanggan" type="text" class="form-control" id="tnama_pelanggan" placeholder="Nama Pelanggan">
        </div>

        <!-- E-Mail -->
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="text" class="form-control" id="temail" placeholder="Email">
        </div>

        <!-- No Telp -->
        <div class="form-group">
            <label for="no_telp">No Telp</label>
            <input name="no_telp" type="text" class="form-control" id="tno_telp" placeholder="No Telp">
        </div>

        <!-- Jadwal -->
        <div class="form-group">
            <label for="jadwal">Jadwal : </label>
            <select id="tjadwal">
                <option value="" disabled selected>Pilih Jadwal</option>
                @foreach ($tayang as $tayangs)
                    <option value="{{$tayangs->id_tayang}}">{{$tayangs->waktu_mulai}}</option>
                @endforeach
            </select>
        </div>

        <!-- Jumlah Tiket -->
        <div class="form-group">
            <label for="jumlah_tiket">Jumlah Tiket</label>
            <input name="jumlah_tiket" type="number" class="form-control" id="tjumlah_tiket" placeholder="Jumlah Tiket">
        </div>

        <button style="font-size:20px;margin:8px 0px 35px 0px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="checkoutData()">
            Checkout
        </button>
        
    </div>
    
    <!-- Modal -->
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Checkout</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <label for="1">Nama Pemesan : </label>
            <h2 id="1"></h2>
            <label for="2">Email : </label>
            <h2 id="2"></h2>
            <label for="3">No Telp : </label>
            <h2 id="3"></h2>
            <label for="4">Jumlah Tiket : </label>
            <h2 id="4"></h2>
            <label for="5">Jadwal : </label>
            <h2 id="5"></h2>
            <label for="6">Total Harga : </label>
            <h2 id="6"></h2>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" form="checkout">
            <form id="checkout" action="{{route('user.checkout')}}" method="post" hidden>
            @csrf
            <input type="text" id="id_film" name="id_film" value="{{$film->id_film}}">
            <input type="text" id="nama_pelanggan" name="nama_pelanggan">
            <input type="email" id="email" name="email">
            <input type="text" id="no_telp" name="no_telp">
            <input type="text" id="id_tayang" name="id_tayang">
            <input type="number" id="jumlah_tiket" name="jumlah_tiket" id="">
            </form>
        </div>
        </div>
    </div>
</div>
    <script>
        var harga;
        $(document).ready(function(){
        //    console.log('intitiated');
            $("#tjadwal").change(function(){
                var x = document.getElementById("unselected");
                var y = document.getElementById("selected");
                x.style.display = "none";
                y.style.display = "block";
            //    console.log('intitiated');
                $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });
                var data = { id : $(this).val() };
                $.post('/tayang/'+$(this).val(), function(response){
                    if(response.success)
                    {
                    //    console.log(response.tayangan.harga_tiket);
                        harga = response.tayangan.harga_tiket;
                        $('#hargaTiket').html(response.tayangan.harga_tiket);
                        $('#jumlahTiket').html(response.tayangan.jumlah_kursi);
                        $('#studio').html(response.tayangan.studio);
                    }
                }, 'json');
            });
        });

        function checkoutData(){

            var nama_pelanggan = document.getElementById('tnama_pelanggan').value;
            var email = document.getElementById('temail').value;
            var no_telp = document.getElementById('tno_telp').value;
            var tmp = document.getElementById('tjadwal');
            var jadwal = tmp.options[tmp.selectedIndex].text;
            var id_tayang = tmp.options[tmp.selectedIndex].value;
            var jumlah_tiket = document.getElementById('tjumlah_tiket').value;
           // console.log(harga);

            document.getElementById('1').innerHTML = nama_pelanggan;
            document.getElementById('2').innerHTML = email;
            document.getElementById('3').innerHTML = no_telp;
            document.getElementById('4').innerHTML = jumlah_tiket;
            document.getElementById('5').innerHTML = jadwal;
            document.getElementById('6').innerHTML = harga * jumlah_tiket;

            document.getElementById('nama_pelanggan').value = nama_pelanggan;
            document.getElementById('email').value = email;
            document.getElementById('no_telp').value = no_telp;
            document.getElementById('id_tayang').value = id_tayang;
            document.getElementById('jumlah_tiket').value = jumlah_tiket;
        }
    </script>
@endsection
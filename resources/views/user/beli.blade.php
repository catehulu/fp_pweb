@extends('layouts.app')

@section('content')
<div style="border-style:outset;margin:25px 50px;">
    <div style="text-align:left;border-bottom:solid gray;margin:25px;">
        <h1>Film : {{$film->nama_film}}</h1>
        <div>
            <h2>Harga tiket : Rp <div id="hargaTiket"></div> </h2>
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
                    <option value="{{$tayangs->id_tayang}}">{{$tayangs->waktu_mulai}} sisa tiket : {{$tayangs->jumlah_kursi}}</option>
                @endforeach
            </select>
        </div>

        <!-- Jumlah Tiket -->
        <div class="form-group">
            <label for="jumlah_tiket">Jumlah Tiket</label>
            <input name="jumlah_tiket" type="number" class="form-control" id="tjumlah_tiket" placeholder="Jumlah Tiket">
        </div>

        <button style="font-size:20px;margin:8px 0px 35px 0px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="checkoutData()">
            Launch demo modal
        </button>
        
    </div>
    
    <!-- Modal -->
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
                <h1 id="1"></h1>
                <label for="2">Email : </label>
                <h1 id="2"></h1>
                <label for="3">No Telp : </label>
                <h1 id="3"></h1>
                <label for="4">Jumlah Tiket : </label>
                <h1 id="4"></h1>
                <label for="5">Jadwal : </label>
                <h1 id="5"></h1>
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
</div>
    <script>
        $(document).ready(function(){
            console.log('intitiated');
            $("#tjadwal").change(function(){
                console.log('intitiated');
                $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });
                var data = { id : $(this).val() };
                $.post('/tayang/'+$(this).val(), function(response){
                    if(response.success)
                    {
                        console.log(response.tayangan.harga_tiket);
                        $('#hargaTiket').html(response.tayangan.harga_tiket);
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

            document.getElementById('1').innerHTML = nama_pelanggan;
            document.getElementById('2').innerHTML = email;
            document.getElementById('3').innerHTML = no_telp;
            document.getElementById('4').innerHTML = jumlah_tiket;
            document.getElementById('5').innerHTML = jadwal;

            document.getElementById('nama_pelanggan').value = nama_pelanggan;
            document.getElementById('email').value = email;
            document.getElementById('no_telp').value = no_telp;
            document.getElementById('id_tayang').value = id_tayang;
            document.getElementById('jumlah_tiket').value = jumlah_tiket;
        }
    </script>
@endsection
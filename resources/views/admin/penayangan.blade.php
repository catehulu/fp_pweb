@extends('layouts.app')

@section('content')
<div style="border-style:outset" class="back container">
        <div style="text-align:center;border-bottom:solid gray;margin:25px;">
            <h1 class="mt-3"><b>Input Penayangan</b></h1>
        </div>
        <div style="margin:50px">
            <form action="{{route('admin.sPenayangan')}}" method="post">
                @csrf
                <!--tanggal penayangan -->
                <input type="text" name="id_film" value="{{$film->id_film}}" hidden>
                <div class="form-group" style="border-style:solid;border-color:gray;padding:10px">
                    <label for="tanggal_film"><b>Tanggal Penayangan</b></label>
                    <br>
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input type="date" class="form-control" id="tanggal_film" name="tanggal_film" placeholder="Enter date">
                    </div>
                </div>  
>>>>>>> frontEnd
                <!--jam penayangan -->
                <div class="form-group inputPenayangan" style="border-style:solid;border-color:gray;padding:10px">
                    <label for="jamPenayangan"><b>Jam Penayangan</b></label>
                    <br>
                    <label>
                        <input name="jam-penayangan" value="8" type="radio" class="option-input radio" name="example"/>
                        08:00
                    </label>
                    <br>
                    <label>
                        <input name="jam-penayangan" value="12"  type="radio" class="option-input radio" name="example" />
                        12:00
                    </label>
                    <br>
                    <label>
                        <input name="jam-penayangan" value="16" type="radio" class="option-input radio" name="example" />
                        16:00
                    </label>
                    <br>
                    <label>
                        <input name="jam-penayangan" value="20" type="radio" class="option-input radio" name="example" />
                        20:00
                    </label>
                    <br>
                </div>

                <!--studio -->
                <div class="form-group inputPenayangan" style="border-style:solid;border-color:gray;padding:10px">
                    <label for="studio"><b>Studio</b></label>
                    <br>
                    <input name="studio" class="form-control" type="number" value="0" id="studio" style="margin:0px 50px 0px 0px">
                </div>

                <!-- harga -->
                <div class="form-group inputPenayangan" style="border-style:solid;border-color:gray;padding:10px">
                    <label for="harga_tiket"><b>Harga (Rp.)</b></label>
                    <br>
                    <input name="harga_tiket" class="form-control" type="number" value="0" id="harga_tiket" style="margin:0px 50px 0px 0px">
                </div>

                <button type="submit" class="btn btn-secondary btn-lg mt-4">Submit</button>
            </form>
        </div>
    </div>
@endsection
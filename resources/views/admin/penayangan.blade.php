@extends('layouts.app')

@section('content')

<div style="border-style:outset;margin:25px 50px;">
        <div style="text-align:center;border-bottom:solid gray;margin:25px;">
            <h1 class="mt-3"><b>Input Penayangan</b></h1>
        </div>
        <div style="margin:50px">
            <form action="{{route('admin.sPenayangan')}}" method="post">
                @csrf
                <!--tanggal penayangan -->
                <div class="form-group" style="border-style:solid;border-color:gray;padding:10px">
                    <input type="text" value="{{$film->id_film}}" name="id_film" hidden>
                    <input type="date" name="tanggal_film" id="">
                </div>
                <!--jam penayangan -->
                <div class="form-group" style="border-style:solid;border-color:gray;padding:10px">
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
                <div class="form-group" style="border-style:solid;border-color:gray;padding:10px">
                    <label for="studio"><b>Studio</b></label>
                    <br>
                    <input name="studio" class="form-control" type="number" value="0" id="studio" style="margin:0px 50px 0px 0px">
                </div>

                <!-- harga -->
                <div class="form-group" style="border-style:solid;border-color:gray;padding:10px">
                    <label for="harga_tiket"><b>Harga (Rp.)</b></label>
                    <br>
                    <input name="harga_tiket" class="form-control" type="number" value="0" id="harga_tiket" style="margin:0px 50px 0px 0px">
                </div>

                <button type="submit" class="btn btn-secondary btn-lg mt-4">Submit</button>
            </form>
        </div>
    </div>
@endsection
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\film;
use App\tayang;
use Illuminate\Support\Facades\DB;
use App\pelanggan;
use App\transaksi;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = DB::select('select distinct f.* from table_film f,table_tayang t where f.id_film = t.id_film AND t.deleted_at IS NULL ');
        return view('user.index',compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $films = film::where('id_film',$id)->first();
        $tayang = tayang::where('id_film',$id)->get();
        return view('user.readone',compact('films','tayang'));
        
    }

    public function buy($id)
    {
        $film = film::where('id_film',$id)->first();
        $tayang = tayang::where('id_film',$id)->where('jumlah_kursi','!=',0)->get();
        return view('user.beli',compact('film','tayang'));
    }


    public function checkout(Request $request){
        $nama = request('nama_pelanggan');
        $email = request('email');
        $pelanggan = pelanggan::where('email',$email)->first();
        $tayang = tayang::where('id_tayang',request('id_tayang'))->first();
        $tanggal_transaksi = Carbon::now()->toDateString();
        if($pelanggan == NULL){
            pelanggan::create([
                'nama_pelanggan' => request('nama_pelanggan'),
                'email' => request('email'),
                'no_telp' => request('no_telp'),
            ]);
            $pelanggan = pelanggan::where('nama_pelanggan',$nama)->where('email',$email)->first();
        }
        transaksi::create([
            'id_tayang' => request('id_tayang'),
            'id_pelanggan' => $pelanggan->id_pelanggan,
            'jumlah_tiket' => request('jumlah_tiket'),
            'tgl_transaksi' => $tanggal_transaksi,
            'studio' => $tayang->studio,
        ]);
        $tayang->update([
            'jumlah_kursi' => $tayang->jumlah_kursi - request('jumlah_tiket'),
        ]);
        
        return redirect()->route('user.index')->with('success','transaksi telah berhasil!');
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getTayangan($id) {
        $tayangan = tayang::where("id_tayang",$id)->first();
        return response()->json(['success' => true, 'tayangan' => $tayangan]);
    }
}

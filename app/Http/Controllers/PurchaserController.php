<?php

namespace App\Http\Controllers;

use App\Purchaser;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PurchaserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengambil data dari table purchaser
        //$purchaser = \App\Purchaser::all();
        $purchaser = DB::table('purchasers')->get();
        //mengirim data table purchaser ke view purchaser
        return view('purchaser', ['purchaser' => $purchaser]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purchaser.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip'   => 'required',
            'nama'  => 'required'
        ]);
        Purchaser::create([
            'nip'   => $request->nip,
            'nama'  => $request->nama
        ]);

        return redirect('/purchaser')->with('pesan', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <i class="icon fas fa-check"></i>
                Data Berhasil Disimpan
            </div>
        ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purchaser = DB::table('purchasers')->where('id', $id)->first();
        return view('purchaser.edit', compact('purchaser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'nip' => 'required',
            'nama' => 'required'
        ]);

        DB::table('purchasers')->where('id', $request->id)->update([
            'nip'   => $request->nip,
            'nama'  => $request->nama
        ]);

        return redirect('/purchaser')->with('pesan', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <i class="icon fas fa-exclamation-triangle"></i>
                Data Berhasil Diupdate
            </div>
        ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('purchasers')->where('id', $id)->delete();

        return redirect('/purchaser')->with('pesan', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <i class="icon fas fa-ban"></i>
                Data Berhasil Dihapus
            </div>
        ');
    }
}

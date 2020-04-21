<?php

namespace App\Http\Controllers;
use App\pegawai;
use App\dasarsurat;
use App\kecamatan;
use App\pangkat;
use App\tingkatbiaya;
use App\transportasi;
use App\tujuansurat;
use App\user;
use Illuminate\Http\Request;

class keloladataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pegawai()
    {
        $pegawai=pegawai::all();
        return view('kelola.pegawai',compact('pegawai'));
    }
    public function dasarsurat()
    {
        $dasarsurat=dasarsurat::all();
        return view('kelola.dasarsurat',compact('dasarsurat'));
    }
    public function kecamatan()
    {
        $kecamatan=kecamatan::all();
        return view('kelola.kecamatan',compact('kecamatan'));
    }
    public function pangkat()
    {
        $pangkat=pangkat::all();
        return view('kelola.pangkat',compact('pangkat'));
    }
    public function tingkatbiaya()
    {
        $tingkatbiaya=tingkatbiaya::all();
        return view('kelola.tingkatbiaya',compact('tingkatbiaya'));
    }
    public function transportasi()
    {
        $transportasi=transportasi::all();
        return view('kelola.transportasi',compact('transportasi'));
    }
    public function tujuansurat()
    {
        $tujuansurat=tujuansurat::all();
        return view('kelola.tujuansurat',compact('tujuansurat'));
    }
    public function user()
    {
        $user=user::all();
        return view('kelola.user',compact('user'));
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suratmasuk;
class SuratmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surat = suratmasuk::all();
        return view('datasuratmasuk',compact('surat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahsuratmasuk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'judul_surat' => 'required',
            'instansi_pengirim' => 'required',
            'penerima_surat' => 'required',
            'tanggal_mengirim' => 'required',
            'nama_pengirim' => 'required',
            'no_telepon' => 'required',
            'alasan' => 'required',
        ]);
        suratmasuk::create($request->all());
        return redirect()->route('surat.index')->with('success','Data Berhasil Ditambahkan');
        
    }   

    /**
     * Display the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $surat = suratmasuk::findOrFail($id);
        return view('editsuratmasuk', compact('surat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'judul_surat' => 'required',
            'instansi_pengirim' => 'required',
            'penerima_surat' => 'required',
            'tanggal_mengirim' => 'required',
            'nama_pengirim' => 'required',
            'no_telepon' => 'required',
        ]);
        suratmasuk::where('id',$id)->update($request->except(['_token','_method']));
        return redirect()->route('surat.index')->with('success','Data Berhasil Diedited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
       ///// $surat = suratmasuk::findOrFail($id);
       // $surat->delete();
      ///  return redirect()->route('surat.index')->with('success','Data Berhasil Dihapus');/////
    }

    public function arsipDitolak()
    {

    $surat = suratmasuk::where('status', 'ditolak')->get();

    return view('arsip.surat_ditolak', compact('surat')); 
    }

   public function updateStatus(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:pending,diterima,ditolak'
    ]);

    suratmasuk::where('id', $id)->update([
        'status' => $request->status
    ]);

    return back()->with('success', 'Status berhasil diubah!');
}


    
}

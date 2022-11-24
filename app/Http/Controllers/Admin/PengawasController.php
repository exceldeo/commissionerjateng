<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pengawas;
use App\Kegiatan;
use Illuminate\Support\Facades\Storage;

class PengawasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengawas = Pengawas::all();
        return view('admin.pengawas.index', compact('pengawas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengawas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'no_lisensi' => 'required',
            'link_lisensi' => 'required',
            'no_telp' => 'required',
            'pengkab_pengkot' => 'required',
            'lisensi_pengawas' => 'required',
            'masa_berlaku_lisensi' => 'required',
        ]);
        
        try {
            $url = null;
            if ($request->hasFile('img')) {
                if ($request->file('img')->isValid()) {
                    $validated = $request->validate([
                        'img' => 'mimes:jpeg,png|max:10240',
                    ]);

                    $file = $request->file('img');
                    $url = Storage::putFileAs('public', $file, date("YmdHis") . '.' . $file->extension());
                    $url  = strtok($url, 'public/');
                    $url = $url.$file->extension();
                }
            }

            Pengawas::insert([
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'nomor_lisensi' => $request->no_lisensi,
                'link_lisensi' => $request->link_lisensi,
                'no_telp' => $request->no_telp,
                'pengkab_pengkot' => $request->pengkab_pengkot,
                'lisensi_pengawas' => $request->lisensi_pengawas,
                'masa_berlaku_lisensi' => $request->masa_berlaku_lisensi,            
                'foto' => $url,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            $message = ["success" => "Pengawas berhasil di tambahkan!"];

        } catch (\Throwable $th) {
            dd($th->getMessage());
            $message = ["fail" => $th->getMessage()];
        }

        return redirect()->route('admin.pengawas.index')->with($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengawas = Pengawas::find($id);
        $kegiatans = Kegiatan::where('id_pengawas', $id)->get();
        return view('admin.pengawas.show', compact('pengawas', 'kegiatans'));
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

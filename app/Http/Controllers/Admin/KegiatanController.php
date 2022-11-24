<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class KegiatanController extends Controller
{
    public function create($idPengawas)
    {
        return view('admin.pengawas.kegiatan.create', compact('idPengawas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$idPengawas)
    {
        $this->validate($request, [
            'nama_kegiatan' => 'required',
            'link_kegiatan' => 'required',
            'tingkat_daerah' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'link_keterangan' => 'required',
        ]);
        
        try {
            
            Kegiatan::insert([
                'nama_kegiatan' => $request->nama_kegiatan,
                'link_kegiatan' => $request->link_kegiatan,
                'tingkat_daerah' => $request->tingkat_daerah,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_selesai' => $request->tanggal_selesai,
                'link_keterangan' => $request->link_keterangan,
                'id_pengawas' => $idPengawas,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            $message = ["success" => "Pengawas berhasil di tambahkan!"];

        } catch (\Throwable $th) {
            dd($th->getMessage());
            $message = ["fail" => $th->getMessage()];
        }

        return redirect()->route('admin.pengawas.show',['id'=>$idPengawas])->with($message);
    }

    public function destroy($id)
    {
        try {
            Kegiatan::where('id', $id)->delete();
            $message = ["success" => "Pengawas berhasil di hapus!"];
        } catch (\Throwable $th) {
            $message = ["fail" => $th->getMessage()];
        }
        return redirect()->back();
    }
}

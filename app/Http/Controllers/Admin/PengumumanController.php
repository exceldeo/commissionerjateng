<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Content;

class PengumumanController extends Controller
{

    public function edit()
    {
        $pengumuman = Content::where('kode', 'H_Pengumuman')->first();
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'content' => 'required',
            'is_active' => 'required',
        ]);
        
        try {
            
            Content::where('kode', 'H_Pengumuman')->update([
                'content' => $request->content,
                'is_active' => $request->is_active,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            $message = ["success" => "Pengawas berhasil di tambahkan!"];

        } catch (\Throwable $th) {
            dd($th->getMessage());
            $message = ["fail" => $th->getMessage()];
        }

        return redirect()->route('admin.pengumuman.edit')->with($message);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengawas;
use App\Kegiatan;
use App\Content;
use App\Contact;

class PagesController extends Controller
{
    public function home(){
        $pengumuman = Content::where('kode', 'H_Pengumuman')->first();
        return view('home', compact('pengumuman'));
    }

    public function about(){
        return view('about');
    }

    public function galery(){
        return view('galery');
    }

    public function pengawas(){
        $pengawas = Pengawas::all()->sortBy('nama');
        foreach($pengawas as $p){
            $p["kegiatan"] = Kegiatan::where('id_pengawas', $p->id)->get();
        }
        return view('pengawas',compact('pengawas'));
    }

    public function contact(){
        $contact = Contact::find(1);
        return view('contact', compact('contact'));
    }
}

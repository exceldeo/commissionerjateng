<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function edit()
    {
        $contact = Contact::find(1);
        return view('admin.contact.edit', compact('contact'));
    }


    public function update(Request $request)
    {
        $alamat = '';
        $telepon = '';
        $fax = '';
        $email = '';

        if($request->alamat != null){
            $alamat = $request->alamat;
        }
        if($request->telepon != null){
            $telepon = $request->telepon;
        }
        if($request->fax != null){
            $fax = $request->fax;
        }
        if($request->email != null){
            $email = $request->email;
        }
        
        $contact = Contact::find(1);
        $contact->alamat = $alamat;
        $contact->telepon = $telepon;
        $contact->fax = $fax;
        $contact->email = $email;
        $contact->save();
        return redirect()->route('admin.contact.edit')->with('success', 'Data berhasil diubah');
    }
}

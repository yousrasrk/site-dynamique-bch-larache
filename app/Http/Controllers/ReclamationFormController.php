<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReclamationFormController extends Controller
{
    
    public function create()
    {
        return view('Reclamation.create');
    }
    public function store()
    {
        $data = request()->validate([
            'sujet-prin' => 'required',
            'sujet-second' => 'required',
            'commune'=> 'required',
            'file'=> 'required',
            'message' => 'required',
            'contacter' => 'required',
        ]);
        Mail::to('test@test.com')->send(new ReclamationFormMail($data));
        return redirect('reclamation');
    }
}

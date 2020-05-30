<?php

namespace App\Http\Controllers;
use App\dece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect ;
use Illuminate\Support\Facades\Validator;
use Session;
class deceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $deces = dece::all();
        return view('auth.admin-deces.update-delete',[
            'deces' => $deces,
        ]);
    }
    public function index()
    {
        //
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
        $validator=Validator::make($request->all(), [
            'contenu' => 'required',
         
            
        ]);
        $validation = $validator->validate();
        if ( $validation != true ) {
            //show errors
                return Redirect::back()->withErrors($validator->errors());
            
        }
        else{
        $dece = new dece();
        $dece->contenu = $request->input('contenu');
       
        $dece->save();
        return redirect('/dece');
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $dece = dece::find($id);
        return view('auth.admin-deces.edit',[
            'dece' => $dece,
        ]);
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
        $validator=Validator::make($request->all(), [
            'contenu' => 'required',
         
            
        ]);
        $validation = $validator->validate();
        if ( $validation != true ) {
            //show errors
                return Redirect::back()->withErrors($validator->errors());
            
        }
        else{
        $dece = dece::find($id);
        $dece->contenu = $request->input('contenu');
        $dece->save();
        Session::flash('message', 'cordoleance Modifier !');
        return redirect('/dece');
    }
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
        $dece = dece::find($id);
        $dece->delete();
        Session::flash('message', 'Activite Supprimer !');
        return redirect('/dece');
    }
    public function dernier()
    {
        $laatsteposts = dece::latest()->first();

   return view('index')->with('laatsteposts', $laatsteposts);
    }
}

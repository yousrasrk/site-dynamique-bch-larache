<?php

namespace App\Http\Controllers;
use App\activitie;
use Illuminate\Support\Facades\Redirect ;
use App\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Session;
use Illuminate\Support\Facades\Validator;
class activitieController extends Controller
{
    public function YoutubeId($url)
    {
        $a=$url;
        $b=str_replace("watch?v=",'embed/',$a);
        $c=strpos($b,'embed/');
        $d=substr ( $b ,$c+6 , 11 );
        $e=("https://www.youtube.com/embed/".$d);
        return $e ;
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $activities = activitie::all();
        return view('auth.admin-activities.update-delete',[
            'activities' => $activities,
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
        $validator=Validator::make($request->all(), [
            'titre' => 'required',
            'photo1' => 'max:7000',
            'photo2' => 'max:7000',
            'photo3' => 'max:7000',
            'photo4' => 'max:7000',
            'photo5' => 'max:7000',
            'photo6' => 'max:7000',
            'video1' => 'max:7000',
            'video2' => 'max:7000',
            'video3' => 'max:7000',
            
        ]);
        $validation = $validator->validate();
        if ( $validation != true ) {
            //show errors
                return Redirect::back()->withErrors($validator->errors());
            
        }
        else{
            $activitie = new activitie();
            if (!empty( $request->input('contenu'))) {
                $activitie->contenu = $request->input('contenu');
            }
            if (!empty( $request->input('date'))) {
                $activitie->Date = $request->input('date');
            }
            if (!empty( $request->input('titre'))) {
                $activitie->Titre = $request->input('titre');
            }
            
            if (!empty( $request->input('youtube1'))) {
                $activitie->fileYoutube1=$this->YoutubeId($request->input('youtube1'));
            }
            if (!empty( $request->input('youtube2'))) {
               
                $activitie->fileYoutube2 = $this->YoutubeId($request->input('youtube2'));
            }
            if($request->hasFile('photo1')){
                $activitie->filePhoto1 = $request->photo1->store('activ');
            }
            if($request->hasFile('photo2')){
                $activitie->filePhoto2 = $request->photo2->store('activ');
            }
            if($request->hasFile('photo3')){
                $activitie->filePhoto3 = $request->photo3->store('activ');
            }
            if($request->hasFile('photo4')){
                $activitie->filePhoto4 = $request->photo4->store('activ');
            }
            if($request->hasFile('photo5')){
                $activitie->filePhoto5 = $request->photo5->store('activ');
            }
            if($request->hasFile('photo6')){
                $activitie->filePhoto6 = $request->photo6->store('activ');
            }
            if($request->hasFile('video1')){

                $activitie->fileVideo1 = $request->video1->store('activ');

            }

            if($request->hasFile('video2')){
                $activitie->fileVideo2 = $request->video2->store('activ');

            }
            if($request->hasFile('video3')){

                $activitie->fileVideo3 = $request->video3->store('activ');
            }
            $activitie->save();
            Session::flash('message', 'Activite ajoute!');
            return redirect('/activities');
           
     
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
        //
        $activitie = activitie::find($id);
        return view('auth.admin-activities.edit',[
            'activitie' => $activitie,
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
        //
        $validator=Validator::make($request->all(), [
            'titre' => 'required',
            'photo1' => 'max:7000',
            'photo2' => 'max:7000',
            'photo3' => 'max:7000',
            'photo4' => 'max:7000',
            'photo5' => 'max:7000',
            'photo6' => 'max:7000',
            'video1' => 'max:7000',
            'video2' => 'max:7000',
            'video3' => 'max:7000',
            
        ]);
        $validation = $validator->validate();
        if ( $validation != true ) {
            //show errors
                return Redirect::back()->withErrors($validator->errors());
            
        }
        else{
        $activitie = activitie::find($id);
        $activitie->contenu = $request->input('contenu');
        $activitie->Date = $request->input('date');
        $activitie->Titre = $request->input('titre');
        if (!empty( $request->input('youtube1'))) {
            $activitie->fileYoutube1=$this->YoutubeId($request->input('youtube1'));
        }
        if (!empty( $request->input('youtube2'))) {
           
            $activitie->fileYoutube2 = $this->YoutubeId($request->input('youtube2'));
        }
        if($request->hasFile('photo1')){
            $activitie->filePhoto1 = $request->photo1->store('activ');
        }
        if($request->hasFile('photo2')){
            $activitie->filePhoto2 = $request->photo2->store('activ');
        }
        if($request->hasFile('photo3')){
            $activitie->filePhoto3 = $request->photo3->store('activ');
        }
        if($request->hasFile('photo4')){
            $activitie->filePhoto4 = $request->photo4->store('activ');
        }
        if($request->hasFile('photo5')){
            $activitie->filePhoto5 = $request->photo5->store('activ');
        }
        if($request->hasFile('photo6')){
            $activitie->filePhoto6 = $request->photo6->store('activ');
        }
        if(!empty($request->input('video1'))){
            $activitie->fileVideo1 = $request->video1->store('activ');
        }
        if($request->hasFile('video2')){
            $activitie->fileVideo2 = $request->video2->store('activ');
        }
        if($request->hasFile('video3')){
            $activitie->fileVideo3 = $request->video3->store('activ');
        }
        $activitie->save();
        Session::flash('message', 'Activite Modifier !');
        return redirect('/activities');
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
        $activitie = activitie::find($id);
        Storage::delete($activitie->filePhoto1);
        Storage::delete($activitie->filePhoto2);
        Storage::delete($activitie->filePhoto3);
        Storage::delete($activitie->filePhoto4);
        Storage::delete($activitie->filePhoto5);
        Storage::delete($activitie->filePhoto6);
        Storage::delete($activitie->fileVideo1);
        Storage::delete($activitie->fileVideo2);
        Storage::delete($activitie->fileVideo3);
        $activitie->delete();
        Session::flash('message', 'Activite Supprimer !');
        return redirect('/activities');
    }
    public function deletpic($filename , $id , $n)
    {
        $nom="/activ//".$filename;
        Storage::delete($nom);
        $activitie = activitie::find($id);
        if($n == 1)
        {
            $activitie->filePhoto1 = NULL;
        }
        if($n == 2)
        {
            $activitie->filePhoto2 = NULL;
        }
        if($n == 3)
        {
            $activitie->filePhoto3 = NULL;
        }
        if($n == 4)
        {
            $activitie->filePhoto4 = NULL;
        }
        if($n == 5)
        {
            $activitie->filePhoto5 = NULL;
        }
        if($n == 6)
        {
            $activitie->filePhoto6 = NULL;
        }
        if($n == 'v1')
        {
            $activitie->fileVideo1 = NULL;
        }
        if($n == 'v2')
        {
            $activitie->fileVideo2 = NULL;
        }
        if($n == 'v3')
        {
            $activitie->fileVideo3 = NULL;
        }
        $activitie->save();
        Session::flash('message', 'Photo Supprimer !');
        return redirect('activities/'.$activitie->id.'/autre');
    }
    public function other($id)
    {
        $activitie = activitie::find($id);
        return view('auth.admin-activities.other',[
            'activitie' => $activitie,]);
    }
    public function voir($id)
    {
        //
        $laatstevent = event::latest()->first();
        $activitie = activitie::find($id);
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('Articles.tafasil',[
            
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            'activitie' => $activitie,
            ]);
        
        
    }

}


<?php

namespace App\Http\Controllers;
use App\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\activitie;
use Illuminate\Support\Facades\Redirect ;
use Illuminate\Support\Facades\Validator;
use Session;



class eventController extends Controller
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
        $events = event::all();
        return view('auth.admin-events.update-delete',[
            'events' => $events,
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
        $event = new event();
        if (!empty( $request->input('contenu'))) {
            $event->contenu = $request->input('contenu');
        }
        if (!empty( $request->input('date'))) {
            $event->Date = $request->input('date');
        }
        if (!empty( $request->input('titre'))) {
            $event->Titre = $request->input('titre');
        }
        if (!empty( $request->input('youtube1'))) {
            $event->fileYoutube1 =$this->YoutubeId($request->input('youtube1'));
        }
        if (!empty( $request->input('youtube2'))) {
            $event->fileYoutube2 = $this->YoutubeId($request->input('youtube2'));
        }
        if(! empty($request->file('photo1')))
        {
            $event->filePhoto1 = $request->photo1->store('eventi');
        }
        if(! empty($request->file('photo2')))
        {
            $event->filePhoto2 = $request->photo2->store('eventi');
        }
        if(! empty($request->file('photo3')))
        {
            $event->filePhoto3 = $request->photo3->store('eventi');
        }
        if(! empty($request->file('photo4')))
        {
            $event->filePhoto4 = $request->photo4->store('eventi');
        }
        if(! empty($request->file('photo5')))
        {
            $event->filePhoto5 = $request->photo5->store('eventi');
        }
        if(! empty($request->file('photo6')))
        {
            $event->filePhoto6 = $request->photo6->store('eventi');
        }
        if(! empty($request->file('video1')))
        {
            $event->fileVideo1 = $request->video1->store('eventi');
            
        }
        if(! empty($request->file('video2')))
        {
            $event->fileVideo2 = $request->video2->store('eventi');
        }
        if(! empty($request->file('video3')))
        {
            $event->fileVideo3 = $request->video3->store('eventi');
        }
    $event->save();
    Session::flash('message', 'evenement ajoute!');
    return redirect('/events');
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
        $event = event::find($id);
        return view('auth.admin-events.edit',[
            'event' => $event,
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
        $event= event::find($id);
        $event->contenu = $request->input('contenu');
        $event->Date = $request->input('date');
        $event->Titre = $request->input('titre');
        if (!empty( $request->input('youtube1'))) {
            $event->fileYoutube1 =$this->YoutubeId($request->input('youtube1'));
        }
        if (!empty( $request->input('youtube2'))) {
            $event->fileYoutube2 = $this->YoutubeId($request->input('youtube2'));
        }
        if(! empty($request->file('photo1')))
        {
            $event->filePhoto1 = $request->photo1->store('eventi');
        }
        if(! empty($request->file('photo2')))
        {
            $event->filePhoto2 = $request->photo2->store('eventi');
        }
        if(! empty($request->file('photo3')))
        {
            $event->filePhoto3 = $request->photo3->store('eventi');
        }
        if(! empty($request->file('photo4')))
        {
            $event->filePhoto4 = $request->photo4->store('eventi');
        }
        if(! empty($request->file('photo5')))
        {
            $event->filePhoto5 = $request->photo5->store('eventi');
        }
        if(! empty($request->file('photo6')))
        {
            $event->filePhoto6 = $request->photo6->store('eventi');
        }
        if(! empty($request->file('video1')))
        {
            $event->fileVideo1 = $request->video1->store('eventi');
            
        }
        if(! empty($request->file('video2')))
        {
            $event->fileVideo2 = $request->video2->store('eventi');
        }
        if(! empty($request->file('video3')))
        {
            $event->fileVideo3 = $request->video3->store('eventi');
        }
        $event->save();
        Session::flash('message', 'evenement Modifier !');
        return redirect('/events');
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
        $event = event::find($id);
        $event->delete();
        Storage::delete($event->filePhoto1);
        Storage::delete($event->filePhoto2);
        Storage::delete($event->filePhoto3);
        Storage::delete($event->filePhoto4);
        Storage::delete($event->filePhoto5);
        Storage::delete($event->filePhoto6);
        Storage::delete($event->fileVideo1);
        Storage::delete($event->fileVideo2);
        Storage::delete($event->fileVideo3);
        Session::flash('message', 'evenement Supprimer !');
        return redirect('/events');
    }
    
    public function deletpic($filename , $id , $n)
    {
        $nom="/eventi//".$filename;
        Storage::delete($nom);
        $event = event::find($id);
        if($n == 1)
        {
            $event->filePhoto1 = NULL;
        }
        if($n == 2)
        {
            $event->filePhoto2 = NULL;
        }
        if($n == 3)
        {
            $event->filePhoto3 = NULL;
        }
        if($n == 4)
        {
            $event->filePhoto4 = NULL;
        }
        if($n == 5)
        {
            $event->filePhoto5 = NULL;
        }
        if($n == 6)
        {
            $event->filePhoto6 = NULL;
        }
        if($n == 'v1')
        {
            $event->fileVideo1 = NULL;
        }
        if($n == 'v2')
        {
            $event->fileVideo2 = NULL;
        }
        if($n == 'v3')
        {
            $event->fileVideo3 = NULL;
        }
        $event->save();
        Session::flash('message', 'Photo Supprimer !');
        return redirect('events/'.$event->id.'/autre');
    }
    public function other($id)
    {
        //
        $event = event::find($id);
        return view('auth.admin-events.other',[
            'event' => $event,]);
    }
    public function voir($id)
    {

        $event = event::find($id);
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('Articles.tafasil1',[
            'event' => $event,
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            ]);
       
    }
    public function show()
    {
        $events = event::all();
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('press',[
            'events' => $events,
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            
        ]);
    }
   
    
}

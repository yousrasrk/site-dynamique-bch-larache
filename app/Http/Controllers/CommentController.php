<?php

namespace App\Http\Controllers;
use App\Comment;
use App\activitie;
use Illuminate\Support\Facades\DB;
use App\dece;
use App\event;
use App\Post;
use Illuminate\Http\Request;
use Session;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $laatstevent = event::latest()->first();
        $laatstdece = dece::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('Articles/Hygiène-alimentaire',[
             'laatstdece' => $laatstdece,
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            
        ]);
   
    }


    public function index2()
    {  
        
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('Articles/Salubrité-publique',[
            
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            
        ]);
        
        
    }
    public function index3()
    {  
        
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('Articles/Lutte-antivectorielle',[
            
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            
        ]);
       
        
    }
    public function index4()
    {  
        
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('control',[
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            
        ]);
        
        
    }
    public function index5()
    {  
        
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('Articles/Ramassage-des-chiens-et-chats-errants',[
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            
        ]);
        
        
    }

    public function index6()
    {  
        
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('Articles/A-propos-de-l’hygiène',[
            
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            
        ]);
        
        
    }

    public function index7()
    {  
        
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('Articles/Organigramme',[
            
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            
        ]);
   
        
    }


    public function index8()
    {
        $deces = \App\dece::all();
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('deces',[
            'deces' => $deces,
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
        ]);
    }
    public function index9()
    {
        $activities = \App\activitie::all();
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog =  activitie::latest()->first();
        return view('Activité-relationnelle',[
            
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            'activities' => $activities,
            
        ]);
        
     
    }
    public function index10()
    {
        
        $events = event::all();
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('nos-evenements',[
            
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            'events' => $events,
            
        ]);
      
        
    }
    public function index11()
    {
        
        $events = event::all();
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('definition',[
            
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            'events' => $events,
            
        ]);
      
        
    }
    public function index12()
    {
        
        $events = event::all();
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('services.desordonnes',[
            
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            'events' => $events,
            
        ]);
      
        
    }

    
   
    public function index13()
    {
        
        $events = event::all();
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('services.permission',[
            
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            'events' => $events,
            
        ]);
      
        
    }
    
    public function index14()
    {
        
        $events = event::all();
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('services.cimetiere',[
            
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            'events' => $events,
            
        ]);
      
        
    }
    public function index15()
    {
        
        $events = event::all();
        $laatstevent = event::latest()->first();
        $laatstprog1 = activitie::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $laatstprog = activitie::latest()->first();
        return view('Articles.Lutte',[
            
            'laatstevent' => $laatstevent,
            'laatstprog' => $laatstprog,
            'laatstprog1' => $laatstprog1,
            'events' => $events,
            
        ]);
      
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
}

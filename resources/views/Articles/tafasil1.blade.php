<html lang="fr">

<head>

  <meta charset="utf-8">

 

  <title>BCH Larache</title>
    <link rel="icon" href="{!! asset('img/favicon.ico') !!}"/>

  <link rel="stylesheet" href="style.css">

  <script src="script.js"></script>

    <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



<!-- jQuery library -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>



<!-- Popper JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>



<!-- Latest compiled JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   



				

</head>
<body>
@extends('layouts.single-blog')
     <!--================Home Banner Area =================-->
<section class="ana-area text-center ana-padding" style=" text-align:right;margin-top:250px;margin-bottom:-140px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 style="color:#000;font-weight: bold;font-family:font-family: 'Droid Arabic Kufi', Tahoma, Arial, Times New Roman, serif;">{{$event->Titre}}</a> </h3>
                <hr width="40%" style=" display: block;margin-top:px;border-top: 2px solid #18d26e;"> 
            </div>    
        </div>
    </div>
</section>
 
<!--================End Home Banner Area =================-->

    @section('articles')
  
     <!--   <h1 > Activites relationnelle </h1>-->
        
        <div class="para_activitie">
          @if ( !empty ( $event->Titre) ) 
          <p style="text-align:center;"><strong style="color:#18d26e;font-weight: bold;font-size:30px;font-family:font-family: 'Droid Arabic Kufi', Tahoma, Arial, Times New Roman, serif;">{{$event->Titre}}</strong> <br></p>
          @else
          
          @endif
          @if ( !empty ( $event->Date) ) 
          <p style="text-align:center;">{{$event->Date}}   </p>     <br>
          @else
          
          @endif
          <br>
          @if ( !empty ( $event->filePhoto1) ) 
              <div class="d-flex justify-content-around">
                <div class="row">
                  <div class="single-blog">
                        <div class="d-flex justify-content-around">
                          <img class="figure-img img-fluid rounded"  width="50%;" height="35%;" src="{{asset('storage/' .$event->filePhoto1 ) }}" >
                        </div>
                  </div>
                </div>
              </div>
            
                @else
               
                @endif
            @if ( !empty ( $event->contenu) ) 
              <p style="text-align:right;padding-right:12px;font-family:font-family: 'Droid Arabic Kufi', Tahoma, Arial, Times New Roman, serif;">{{$event->contenu}}  </p> 
            @else
            @endif
            <br>
            @if ( !empty (  $event->fileYoutube1) ) 
            <div class="d-flex justify-content-center">
               <iframe   class="p-5"width="100%"   height="315" src="{!! $event->fileYoutube1 !!}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen> 
              </iframe> 
            </div>
            @else
              
            @endif
            @if ( !empty ( $event->fileVideo1) ) 
              <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="single-blog">
                          <div class="d-flex justify-content-around">
                            <video class="figure-img img-fluid rounded"  width="50%;" height="35%;" controls>
                                <source src="{{asset('storage/'.$event->fileVideo1) }}" type="video/mp4" />
                            </video>
                          </div>
                    </div>
                </div>
              </div>
              @else
              @endif
              
              <br>
              @if ( !empty ( $event->filePhoto2) ) 
              <div class="d-flex justify-content-around">
                <div class="row">
                  <div class="single-blog">
                        <div class="d-flex justify-content-around">
                          <img class="figure-img img-fluid rounded"  width="50%;" height="35%;" src="{{asset('storage/' .$event->filePhoto2 ) }}" >
                        </div>
                  </div>
                </div>
              </div>
            
                @else
               
                @endif
                @if ( !empty ( $event->filePhoto3) ) 
                <div class="d-flex justify-content-around">
                  <div class="row">
                    <div class="single-blog">
                          <div class="d-flex justify-content-around">
                            <img class="figure-img img-fluid rounded"  width="50%;" height="35%;" src="{{asset('storage/' .$event->filePhoto3 ) }}" >
                          </div>
                    </div>
                  </div>
                </div>
                  @else
                  
                  @endif
                  @if ( !empty ( $event->filePhoto4) ) 
                  <div class="d-flex justify-content-around">
                    <div class="row">
                      <div class="single-blog">
                            <div class="d-flex justify-content-around">
                              <img class="figure-img img-fluid rounded"  width="50%;" height="35%;" src="{{asset('storage/' .$event->filePhoto4 ) }}" >
                            </div>
                      </div>
                    </div>
                  </div>
                
                    @else
                    
                    @endif
                    @if ( !empty ( $event->filePhoto5) ) 
                    <div class="d-flex justify-content-around">
                      <div class="row">
                        <div class="single-blog">
                              <div class="d-flex justify-content-around">
                                <img class="figure-img img-fluid rounded"  width="50%;" height="35%;" src="{{asset('storage/' .$event->filePhoto5 ) }}" >
                              </div>
                        </div>
                      </div>
                    </div>
                  
                      @else
                      
                      @endif
                      @if ( !empty ( $event->filePhoto6) ) 
                      <div class="d-flex justify-content-around">
                        <div class="row">
                          <div class="single-blog">
                                <div class="d-flex justify-content-around">
                                  <img class="figure-img img-fluid rounded"  width="50%;" height="35%;" src="{{asset('storage/' .$event->filePhoto6 ) }}" >
                                </div>
                          </div>
                        </div>
                      </div>
                    
                        @else
                        
                        @endif
                        @if ( !empty ( $event->fileVideo2) ) 
                          <div class="d-flex justify-content-center">
                            <div class="row">
                                <div class="single-blog">
                                      <div class="d-flex justify-content-around">
                                        <video class="figure-img img-fluid rounded"  width="50%;" height="35%;" controls>
                                            <source src="{{asset('storage/'.$event->fileVideo2) }}" type="video/mp4" />
                                        </video>
                                      </div>
                                </div>
                            </div>
                          </div>
                          @else
                          @endif
                          
                          <br>
                        @if ( !empty (  $event->fileYoutube2) ) 
                        <div class="d-flex justify-content-center">
                            <iframe class="p-5"width="100%"   height="315"src="{!! $event->fileYoutube2 !!}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen> 
                            </iframe> 
                        </div>
                        @else
                            
                        @endif
                        @if ( !empty ( $event->fileVideo1) ) 
                        <div class="d-flex justify-content-center">
                          <div class="row">
                              <div class="single-blog">
                                    <div class="d-flex justify-content-around">
                                      <video class="figure-img img-fluid rounded"  width="50%;" height="35%;" controls>
                                          <source src="{{asset('storage/'.$event->fileVideo1) }}" type="video/mp4" />
                                      </video>
                                    </div>
                              </div>
                          </div>
                        </div>
                        @else
                        @endif
                      
                        <br>

          </div>
    @endsection










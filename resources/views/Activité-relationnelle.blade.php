<html lang="fr">

<head>

  <meta charset="utf-8">

  <title>BCH Larache</title>
    <link rel="icon" href="{!! asset('img/favicon.ico') !!}"/>
  

  <link rel="stylesheet" href="main.css">

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
                <h3 style="color:#000;font-family:font-family: 'Droid Arabic Kufi', Tahoma, Arial, Times New Roman, serif;">برامج و مشاريع</a> </h3>
                <hr width="25%" style=" display: block;margin-top:px;border-top: 2px solid #18d26e;"> 
            </div>    
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

    @section('articles')
  
     <!--   <h1 > Activites relationnelle </h1>-->
        @foreach($activities as $activitie)
        <div class="card" style="margin:15px;text-align:right;font-family:font-family: 'Droid Arabic Kufi', Tahoma, Arial, Times New Roman, serif;" >
            <figure class="figure">
                <div class="d-flex justify-content-around">
                    @if ( !empty ( $activitie->filePhoto1) ) 
                        <img src="{{asset('storage/' .$activitie->filePhoto1 ) }}"  class="figure-img img-fluid rounded"  width="50%;" height="35%;">
                    @else
                        @if ( !empty ( $activitie->filePhoto2) ) 
                            <img src="{{asset('storage/' .$activitie->filePhoto2 ) }}"  class="figure-img img-fluid rounded"  width="50%;" height="35%;">
                        @else
                            @if ( !empty ( $activitie->filePhoto3) ) 
                                <img src="{{asset('storage/' .$activitie->filePhoto3 ) }}"  class="figure-img img-fluid rounded"  width="50%;" height="35%;">

                            @else
                                @if ( !empty ( $activitie->filePhoto4) ) 
                                    <img src="{{asset('storage/' .$activitie->filePhoto4 ) }}"  class="figure-img img-fluid rounded"  width="50%;" height="35%;">

                                @else
                                    @if ( !empty ( $activitie->filePhoto5) ) 
                                        <img src="{{asset('storage/' .$activitie->filePhoto5 ) }}"  class="figure-img img-fluid rounded"  width="50%;" height="35%;">

                                    @else
                                        @if ( !empty ( $activitie->filePhoto6) ) 
                                            <img src="{{asset('storage/' .$activitie->filePhoto6 ) }}"  class="figure-img img-fluid rounded"  width="50%;" height="35%;">

                                         @else
                                            @if ( !empty ( $activitie->fileVideo1) ) 
                                                <video class="figure-img img-fluid rounded"  style="width:50%; height:35%;float:right;"  controls>
                                                    <source src="{{asset('storage/'.$activitie->fileVideo1) }}" type="video/mp4" />
                                                </video>
                                            @else
                                                @if ( !empty ( $activitie->fileVideo2) ) 
                                                <video class="figure-img img-fluid rounded"  style="width:50%; height:35%;float:right;"  controls>
                                                    <source src="{{asset('storage/'.$activitie->fileVideo2) }}" type="video/mp4" />
                                                </video>
                                                @endif
                                            @endif
                                        @endif
                                    @endif
                                @endif
                            @endif
                        @endif
                    @endif
                </div>
                <figcaption class="figure-caption text-right">
                    @if ( !empty ( $activitie->Titre) ) 
                        <h5 class="card-title text-center" ><strong style="color:#18d26e;font-weight:bold;text-align:center;font-size:30px;">{{$activitie->Titre}}</strong></h5>
                        @else
                        <p></p>
                    @endif
                    <div style="padding-right:200px;">
                        <a href="{{asset('activities/'. $activitie->id) }}"class="btn btn-primary" style="font-family: 'Droid Arabic Kufi', Tahoma, Arial, Times New Roman, serif;font-size:20px;background-color:#18d26e;border-color:#18d26e;color:#fff;float:right;">إقرأ المزيد</a>
                    </div>
                </figcaption>
            </figure>
        </div>
        <hr width="60%" style=" display: block;border-top: solid 1px #f0e9ff;"> 
    @endforeach
@endsection
    

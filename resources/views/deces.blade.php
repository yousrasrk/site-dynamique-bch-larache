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

				<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
				<style type="text/css">
			.recentcomments a {
				display: inline !important;
				padding: 0 !important;
				margin: 0 !important;
			}

			table.recentcommentsavatartop img.avatar, table.recentcommentsavatarend img.avatar {
				border: 0px;
				margin: 0;
			}

			table.recentcommentsavatartop a, table.recentcommentsavatarend a {
				border: 0px !important;
				background-color: transparent !important;
			}

			td.recentcommentsavatarend, td.recentcommentsavatartop {
				padding: 0px 0px 1px 0px;
				margin: 0px;
			}

			td.recentcommentstextend {
				border: none !important;
				padding: 0px 0px 2px 10px;
			}

			.rtl td.recentcommentstextend {
				padding: 0px 10px 2px 0px;
			}

			td.recentcommentstexttop {
				border: none;
				padding: 0px 0px 0px 10px;
			}

			.rtl td.recentcommentstexttop {
				padding: 0px 10px 0px 0px;
            }
            ul.b {
  list-style-type: circle;
  padding-left:45px;
}
.text 
{
    color:#000000;
}
.text p{
                text-indent: 50px;
        
            }
            .uu{

background-position: center;
background-size: cover;
position: relative;
background-repeat: no-repeat;  

}
.yusra{
   background-image:url("img/OE7GPO01.png");
   height:750px;
}
		</style>
<body>
@extends('layouts.single-blog')
<!--================Home Banner Area =================-->
<section class="ana-area text-center ana-padding" style=" text-align:right;margin-top:250px;margin-bottom:-160px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 style="color:#000;font-weight: bold;font-size:40px;font-family: Arial, Helvetica, sans-serif;">التعزيات</a> </h3>
                <hr width="13%" style=" display: block;margin-top:px;border-top: 2px solid #18d26e;"> 
            </div>    
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

@section('articles')
<div class="text">
    <div class="entry p-5">
    @foreach($deces as $dece)
        <article class="blog_item">
        <div class="yusra">
            <div class="uu" style="height:250px;padding-right:100px;padding-bottom:70px;padding-top:2px;font-weight: bold;padding-right:20px;color:#0f0f0f;direction:rtl;text-align:right;">
                    <br> المملكة المغربية                                                                                              
                    <br>  وزارة الداخلية
                    <br>  ولاية جهة طنجة تطوان الحسيمة
                    <br> عمالة إقليم العرائش
                    <br>  جماعة العرائش
                    <br>  مديرية المصالح 
                    المكتب الجماعي لحفظ الصحة
                    <br><br>
                    <?php
                    $text = str_replace("<br />", "", $dece->contenu);
                    ?>
                    <br><br><br>
                    <div class="text-center" >
                        <p >{!! nl2br(e($text)) !!}</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <img class="float-left" src="img/signature.png"  height="15%" width="15%;"  >
                    </div>
            </div>
            </div>
        </article>
        <hr width="85%" style="padding-bottom:40px;">
    @endforeach
    </div> 
</div>



   
                   
@endsection



















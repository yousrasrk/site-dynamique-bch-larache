<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "icon" href = "{!! asset('img/favicon.png') !!}"type = "image/x-icon"> 
    <title>BCH Larache</title>
    <link rel="icon" href="{!! asset('img/favicon.ico') !!}"/>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">

    <!-- main css -->
    <link rel="stylesheet" href= "{{ asset('css/style.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/responsive.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('css/base.css')}}">
<link rel="stylesheet" href="{{asset('css/vendor.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<style type="text/css" media="screen">
        .s-styles { 
            background: white;
            padding-top: 15rem;
            padding-bottom: 12rem;
        }
    </style>


<!-- script
================================================== -->
<script src="js/modernizr.js"></script>
<script src="js/pace.min.js"></script>

<!-- favicons
================================================== -->
<link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

<style>

div.polaroid {
   /* width: 80%;
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
 
}
.accolade{
    
    font-size:40px;
    font-style:serif;
}

.accolade-2{
    
    font-size:40px;
    font-style:serif;
    padding-right:50vw;
    
}

.testimonial{
    
  color:#020a21
}
.text-post{
    text-align:center;
}
.container .event{
    margin-top:50px;
}
.event:hover {
    
 /* margin: auto;
 /*height: 150px;
  
  padding-top: 40px;
  text-align:center;
  
  color:#18d26e;
  font-size:70px;*/
  /*transition: height 2s;
  transition: 2s;*/
  
}

.event {
    
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    opacity: 1;
    transition: box-shadow 0.3s ease-in-out;
    height: 200px;
    padding-top: 60px;
    border: 2px solid #18d26e;
    text-align:center;
    color:#000;
    
   
    
  }
  .event span :hover {
   /*font-size:90px; */
   }
   .container .services {

}
   



.ana-area {
  color: #fff;
  background-color: #fff;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  z-index: 1; 
  height:100px;}

  .ana-area:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
   
    z-index: -1; }
  .ana-area h2 {
    color: #000;
    font-size: 20px;
    margin-bottom: 0px;
    padding-bottom:30px;
    font-size:40px;
    
    border-bottom:2px solid #18d26e;
    display:inline-block;
    font-weight: 400; }
    @media (max-width: 767px) {
      .ana-area h2 {
        margin-bottom: 26px; } }
        .ana-padding-top {
  padding-top: 30px; }

.ana-padding-bottom {
  padding-bottom: 80px; }
  .ana-area h2:hover{
    display: inline-block;
transition: .3s;

text-decoration:none;
font-size: 50px;
}
a:hover {
-webkit-transform: scale(1.2);
transform: scale(1.2);
  }
  .ana1-area {
  color: #fff;
  
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  z-index: 1; 
height:100px;}



.header-menu-toggle1 {
  position: fixed;
  left: 110px;
  top: 42px;
  width: 48px;
  height: 45px;
  line-height: 45px;
  font-family: "metropolis-regular", sans-serif;
  font-size: 1.4rem;
  text-transform: uppercase;
  letter-spacing: 0.4rem;
  color: #18d26e;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.header-menu-toggle1::before {
  display: inline-block;
  content: "menu";
  height: 45px;
  right: auto;
  text-align: right;
  padding-left: 15px;
  padding-right: 10px;
  position: absolute;
  top: 0;
  left: 100%;
}
.responsive {
  width: 100%;
  height: auto;
}

@media (max-width: 1100px)
{
    .amal img
    {
        width: 0%;
       height: 0%;
    }
    .amal1 img
    {
        width: 0%;
       height: 0%;
    }
}
.amal{
    margin-left:-90px;
    width:200; height:200;
}
.amal1{
    margin-left:-50px;
    width:100; height:100;
}
.header-nav a,.dropdown-toggle {
 /* padding: 6px 8px 6px 16px;*/
  text-decoration:none;
  /*font-size: 20px;*/
  color: #818181;
  display: block;
  border: none;
  background: none;
  /*width: 100%;*/
  /*text-align: left;*/
  cursor: pointer;
  outline: none;
}
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}/*
.active {
  background-color: green;
  color: white;
}*/
/*
.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited .btn-primary:focus .btn-primary.clicked  .btn-primary.open{
    
    border:  3px solid #18d26e;
    background-color: #18d26e
}
#menu1 .btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited ,.btn-primary:focus, .btn-primary.clicked  ,.btn-primary.open{
    
    border:  3px solid #18d26e;
    background-color: #18d26e;
}*/
    </style>


</head>
<body id="header-nav" >

    <!--================Header Menu Area =================-->
 <!--<div style="">
 
<header class="s-header"style="direction:rtl;" >
    <div class="container">
        <div class="d-flex justify-content-center">
    
            <div class="row"class="float-left" >
                <div class="amal" class="col-sm" >
                    
                     <a><!--"margin-left:-90px;" 
                     <img style=""  src="{{ asset('img/chikaya.png') }}" alt="bch"   >
                     </a>
                 </div>
    
   
                 <div class="amal1 col-sm">
            
                     <a><!--"margin-left:-50px;"
                    <img style=""  src="{{ asset('img/ta3ziya.png') }}" alt="bch"   >
                    </a>
                </div>

            </div>
        </div> 
        </div>
</div>
</header>-->

<!--
<header class="s-header" >
    <div class="container">
        <div class="d-flex justify-content-center">
    
            <div class="row"class="float-left" >
                <div class="" class="" >
                    
                     <a><!--"margin-left:-90px;" 
                     <img style="margin-right:30vw;"  src="{{ asset('img/chikaya.png') }}" alt="bch" width="200" height="200"  >
                     </a>
                 </div>
    
                 </div>
        </div> 
        </div>
        </header>
        <header class="s-header" >
    <div class="container">
        <div class="d-flex justify-content-center">
    
            <div class="row"class="float-left" >
                 <div class="amal1 col-sm">
            
                     <a><!--"margin-left:-50px;"
                    <img style="margin-left:41vw;" src="{{ asset('img/ta3ziya.png') }}"class="responsive" alt="bch" width="100" height="100"  >
                    </a>
                </div>

            </div>
        </div> 
        </div>

</header>-->
        
<header class="s-header" >
    <div class="container">
        
        <div class="d-flex justify-content-center" >
    
        <div class="thumb">
                <div class="img-fluid">
            
                   <a>
                   <img class="img-fluid" class="" src="{{ asset('img/logoo.png') }}" alt="bch" width="150" height="250"  >
                   </a>
                </div>
            </div>
        </div>
       
</div>        
           <!-- end header-logo 
           <header class="s-header">

<div class="header-logo">
    <a class="site-logo" href="index.html">
        <img class="img-fluid"src="{{ asset('img/logoo.png') }}" alt="Homepage" width="150" height="250">
    </a>
</div> <!-- end header-logo -->

          <nav class="header-nav" >

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content" style="direction:ltr;text-align:right;">
                <h3 style="text-align:center;">القسم الصحي بالعرائش</h3>
                
                <ul class="header-nav__list" style="direction:rtl;text-align:right;">
                    <li class="current" style="direction:rtl"><a href="{{ asset('/') }}" title="home"><strong>رئيسية</strong></a></li>
                    <li><a  href="{{ asset('/Activité') }}" title="about"><strong>برامج و مشاريع </strong></a></li>
                  <!-- <li><a  href="#" title="works"><strong>مقالات</strong></a></li>
                    <ul class="dropdown">
                                    <li href="{{ asset('/Hygiène-alimentaire') }}">Hygiène alimentaire&nbsp;&nbsp;النظافة الغذائية</a></li>
                                    <li href="{{ asset('/Salubrité-publique') }}">Salubrité publique&nbsp;&nbsp; الصحة العامة</a></li>
                                    <li href="{{ asset('/Lutte-antivectorielle') }}">Lutte antivectorielle&nbsp;&nbsp; محاربة النواقل</a></li>
                                    <li href="{{ asset('/Médicolégal') }}">Médecine médico légale<br> الطب الشرعي</a></li>
                                    <li href="{{ asset('/Ramassage-des-chiens-et-chats-errants') }}">Ramassage des chiens et chats errants<br>التقاط الكلاب الضالة والقطط</a></li>
                                    <li href="{{ asset('/A-propos-de-l’hygiène') }}">A propos de l’hygiène&nbsp;&nbsp; حول النظافة</a></li>
                                    <li href="{{ asset('/Organigramme') }}">Organigramme&nbsp;&nbsp;الهيكل التنظيمي</a></li>
                                </ul>-->
         <li>


         <div class="dropdown">
         <button  id="menu1" class="btn btn-info dropdown-toggle"type="button" data-toggle="dropdown" style="background-color:transparent;border-color:none;color:#fff;font-size:17px;margin-right:-10px;"><strong>مقالات</strong>
 
  </button>
  <div class="dropdown-container">
    <a href="{{ asset('/Hygiène-alimentaire') }}" > النظافة الغذائية</a>
    <a href="{{ asset('/Salubrité-publique') }}">الصحة العامة</a>
    <a href="{{ asset('/Lutte') }}"> محاربة النواقل</a>
   
    <a href="{{ asset('/Ramassage-des-chiens-et-chats-errants') }}">التقاط الكلاب الضالة والقطط</a>
    <a href="{{ asset('/A-propos-de-l’hygiène') }}">حول النظافة</a>
    <a href="{{ asset('/Organigramme') }}">الهيكل التنظيمي</a>
  </div>
  </div>
  </li>
               <script>
    $(document).ready(function(){
    $(".dropdown-toggle").dropdown();
    });
    var dropdown = document.getElementsByClassName("btn btn-info dropdown-toggle");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
    </script>

                    <li><a  href="{{ asset('/Textes-de-lois-et-réglements') }}" title="works"><strong> قوانين و مساطر</strong></a></li>
                    
                    <li><a href="img/mizaniya.jpeg" title="contact" target="_blank"><strong>   ميزانية القسم   </strong></a></li>
                    <li><a href="{{ asset('/reclamation') }}" title="services"><strong>  شكايات   </strong></a></li>
                    <li><a href="{{ asset('/corde') }}" title="services"><strong>تعزيات   </strong></a></li>

                    <li><a href="{{ asset('/contact') }}" title="services"><strong>  اتصل بنا   </strong></a></li>  
                </ul>
                
                
              <!--  <a href="{{ asset('/reclamation') }}" title="services"> <strong style="font-size:30px;" >  شكايات   </strong>   <img class="img-fluid" style=""src="{{ asset('img/chikaya.png') }}" alt="Homepage" width="100" height="100"></a>-->
            

                <!--<p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>-->
    
                <ul  class="header-nav__social">
                    <li style="margin-right:15px;padding-right:0px;">
                        <a href="#0"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li style="margin-right:85px;padding-right:0px;">
                        <a href="https://www.youtube.com/channel/UCQSya_aVKXPVdQLECssXUVA" target="_blank"><i class="ti-youtube"></i></a>
                    </li>
                    <li style="margin-right:25px;">
                    <a class="dn_btn" href="mailto:bchlarache@gmail.com"> <i class="ti-email"></i>&nbsp;&nbsp;bchlarache@gmail.com</a>
                    </li>
                </ul>



            </div> <!-- end header-nav__content -->
            
        </nav> <!-- end header-nav -->

<div class="qq">
        <a class="header-menu-toggle" href="#0" >
            <span style="background-color:	#E6E6FA;" class="header-menu-icon"> </span>
        </a>
      
</div>
    </header> <!-- end s-header -->

    <!--================Header Menu Area =================-->
    <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */



</script>




    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/stellar.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
<!--    ================================================== -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

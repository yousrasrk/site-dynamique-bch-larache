<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BCH Larache</title>
    <link rel="icon" href="{!! asset('img/favicon.ico') !!}"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
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
  padding-top: 300px; }

.ana-padding-bottom {
  padding-bottom: 50px; }
  .ana-area h2:hover{
    display: inline-block;
transition: .3s;

text-decoration:none;
font-size: 50px;
}

        </style>
</head>
<body>

@extends('layouts.gabarit1')

@section('content')

 
 <!--================Home Banner Area =================-->
 <section class="ana-area text-center ana-padding" style=" text-align:right;margin-top:250px;margin-bottom:-180px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 style="color:#000;font-weight: bold;font-size:40px;font-family: Arial, Helvetica, sans-serif;">تواصل معنا</a> </h3>
                <hr width="17%" style=" display: block;margin-top:px;border-top: 2px solid #18d26e;"> 
            </div>    
        </div>
    </div>
</section>
   
    <!--================End Home Banner Area =================-->


  <!-- ================ contact section start ================= -->
  <section class="appointment-area area-padding-top" style="margin:100px;">
    <div class="container" >
      <div class="appointment-inner">
      <div class="row" >
        <div class="col-lg-8" style=" border-right: 1px solid #ddd ;">
        <h2 class="contact-title"style="text-align:right;" >املأ النموذج التالي</h2>

          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea style="text-align:right;" class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="الرسالة"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input style="text-align:right;" class="form-control" name="name" id="name" type="text" placeholder="الاسم">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input style="text-align:right;" class="form-control" name="email" id="email" type="email" placeholder="البريد الإلكتروني">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input  style="text-align:right;" class="form-control" name="subject" id="subject" type="text" placeholder="موضوع الرسالة">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button style="text-align:right;" type="submit" class="button button-contactForm">إرسال</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4"style="margin-left:-1%;" >
          <div style="text-align:right;"class="media contact-info">
          <div class="media-body">
              <h3 >العرائش،المغرب</h3>
              <p>العنوان كامل</p>
            </div>
            <span style="margin-left:10px;"class="contact-info__icon"><i class="ti-home"></i></span>
           
          </div>
          <div style="text-align:right;"class="media contact-info">
            
            <div class="media-body">
              <h3><a href="tel:454545654">06 9865 562</a></h3>
              
            </div>
            
            <span style="margin-left:10px;"class="contact-info__icon"><i class="ti-tablet"></i></span>
          </div>
          <div style="margin-right:20px;"class="media contact-info">
           
            <div style="text-align:right;"class="media-body">
              <h3><a href="mailto:BCH@gmail.com">BCH@gmail.com</a></h3>
              <p>عنوان بريدنا الإلكتروني</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->



       



    
<!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Your message is successfully sent...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->

 

    @endsection


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
</body>
</html>

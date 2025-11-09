<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Site information -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>이용안내</title>
    <meta name="description" content="용봉산 자동차극장 | 자동차 극장 | 홍성 자동차 극장">

    <!-- External CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/template/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('images/template/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/template/icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/template/icon-114x114.png')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{asset('assets/css/bootstrap.min.css')}}assets/js/html5shiv.min.js"></script>
      <script src="{{asset('assets/css/bootstrap.min.css')}}assets/js/respond.min.js"></script>
  <![endif]-->

</head>

<body>

    <!-- Preloader -->
    <!--<div class="preloader" id="preloader">-->
    <!--    <div class="lds-css ng-scope">-->
    <!--        <div class="lds-ripple">-->
    <!--            <div></div>-->
    <!--            <div></div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Preloader End -->
    @include('includes.header')

    <!-- Page Header -->
    <div class="page-header" style="background-image: url({{asset('images/bg/use-header.png')}});">
        <div class="page-header-overlay">
            <div class="container">
                <h2 class="page-title"></h2>
            </div>
        </div>
    </div>


    
    <!-- Page Header End -->
    <div class="section section-padding top-padding-normal news-section" >




        <div class="container" style="margin-top: 100px; padding: 0px;">
            <div class="single-section video-entry">
                <h3 class="single-section-title">이용 안내</h3>
                <div class="section-content" style="margin-top: 50px;" >
                    <div id="single-gallery-1" class="owl-carousel single-gallery-slider" >
                        <img class="img-responsive" src="images/slider/info1.png" width="100%" alt="Slider Image">
                        <img class="img-responsive" src="images/slider/info2.png" width="100%" alt="Slider Image">
                        <img class="img-responsive" src="images/slider/info3.png" width="100%" alt="Slider Image">
                        <img class="img-responsive" src="images/slider/info4.png" width="100%" alt="Single Slider Image">
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 20px;">

            <div class="row">
                <div class="col-xs-12">
                    <a class="news-featured" style="margin-top: 40px" href="{{asset('images/slider/header.png')}}">
                        <img class="img-responsive" src="{{asset('images/slider/header.png')}}" onClick="popimage('http://www.blueb.co.kr/SRC/javascript/image/img01.jpg',250,167);return false" width="555px" height="200px" alt="Featured news thumb">
                        <div class="">
                        </div>
                    </a>
                </div>
            </div>
</div>


        </div>
        <!-- News End -->

    </div>

    <!-- Footer -->

    @include('includes.footer')




    <!-- End Footer -->




    <!-- Script -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="{{asset('assets/js/map.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bfe6a588e9a923a"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Site information -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>소개</title>
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

    <div class="main-wrap">

        <!-- Page Header -->
        <div class="page-header" style="background-image: url({{asset('images/bg/intro-header.png')}});">
            <div class="page-header-overlay">
                <div class="container">
                    <h2 class="page-title"></h2>
                </div>
            </div>
        </div>



        
        <!-- Page Header End -->
        <div class="section section-padding video-single-section">
            <div class="container">
                <div class="video-single">
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="content-wrap">
                                <div class="video-thumb">
                                    <img class="img-responsive" src="images/movies/yangbong.jpg" style="border-radius: 15px;" alt="Movie thumb">
                                </div>
                                <div class="video-details xs-top-40">
                                    <div class="single-section">
                                        <h3 class="video-title">용봉산자동차극장</h3>
                                        <p class="video-release-date">cinecar.com</p>
                                        <div class="ratings-wrap">
                                            <span class="rating">10</span>
                                            <div class="expanded-rating">
                                                <div class="star-rating">
                                                    <span class="star on"></span>
                                                    <span class="star on"></span>
                                                    <span class="star on"></span>
                                                    <span class="star on"></span>
                                                    <span class="star on"></span>
                                                    <span class="star on"></span>
                                                    <span class="star on"></span>
                                                    <span class="star on"></span>
                                                    <span class="star on"></span>
                                                    <span class="star on"></span>
                                                </div>
                                                <div class="user-voted">
                                                    <i class="fa fa-user"></i> 누적 관객수 10000명 이상
                                                </div>
                                            </div>
                                        </div>
                                        <div class="video-attributes">
                                            <p class="cast"><label>위치:</label> 충남 홍성군 홍북면 상하리 88-22 / 홍성군 홍북읍 상하리 도청대로 용봉산 1길 7</p>
                                            <p class="duration"><label>시간:</label> 17:00~</p>
                                            <p class="genre"><label>장르:</label> 극장 동시 개봉 상영작</p>
                                            <p class="genre"><label>규모:</label> 1500평</p>
                                            <p class="genre"><label>수용:</label> 1관 - 100대</p>
                                            <p class="language"><label>연락처: </label> 041-631-8123</p>
                                            <p class="language"><label>비상 연락망: </label> 010 3470 8123</p>
                                        </div>
                                        <div class="share-on">
                                            <label>Share: </label>
                                            <div class="share-social">
                                                <a href="{{$settings->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="{{$settings->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a>
                                                <a href="{{$settings->instargram}}" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-section video-entry">
                                        <h3 class="single-section-title">YongBong-San Story</h3>
                                        <div class="section-content">
                                            <p>안녕하세요! 저희 용봉산 자동차극장을 찾아주셔서 감사드립니다.</p>
                                            <p>저희 극장은 용봉산 입구 및 충남도청 옆에 위치하고 있어 찾기 쉬우며 영화 관람을 위한 <Br>최적의 환경을 제공하려고 노력하고 있습니다</p>

                                            <p>  당신의 시간을 자연과 함께 힐링 할 수 있는 저희 극장에서 보내는 건 어떠신가요?</p>
                                            <p>1년 365일, 연중무휴 휴일 없이 운영합니다</p>
                                            <p> 고객 여러분을 가족처럼 모시겠습니다</p>

                                            <p> 최상의 영상 품질, 넓은 주차 공간, 편의 시설 등 관객을 위한 모든 것들이 준비되어있습니다<Br> 지금까지 겪어 보지 못 했던 영화 관람을 경험해보세요!</p>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container" style="margin-top: 150px; padding: 0px;">
                    <div class="single-section video-entry" style="margin-top: 150px; text-align: center;" >
                        <h3 class="single-section-title">봄</h3>
                        <div class="section-content" style="margin-top: 50px;" >
                            <div id="single-gallery-1" class="owl-carousel single-gallery-slider" >
                                <img class="img-responsive" src="images/slider/spring-1.png" width="100%" height="100%" alt="Slider Image">
                                <img class="img-responsive" src="images/slider/spring-2.png" width="100%"  height="100%" alt="Slider Image">
                                <img class="img-responsive" src="images/slider/spring-3.png" width="100%" height="100%" alt="Slider Image">
                                <img class="img-responsive" src="images/slider/spring-4.png" width="100%" height="100%" alt="Single Slider Image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container" style="margin-top: 100px; padding: 0px;">
                    <div class="single-section video-entry" style="text-align: center;">
                        <h3 class="single-section-title">여름</h3>
                        <div class="section-content" style="margin-top: 50px;" >
                            <div id="single-gallery-1" class="owl-carousel single-gallery-slider" >
                                <img class="img-responsive" src="images/slider/summer-1.png" width="100%" height="100%" alt="Slider Image">
                                <img class="img-responsive" src="images/slider/summer-2.png" width="100%"  height="100%" alt="Slider Image">
                                <img class="img-responsive" src="images/slider/summer-3.png" width="100%" height="100%" alt="Slider Image">
                                <img class="img-responsive" src="images/slider/summer-4.png" width="100%" height="100%" alt="Single Slider Image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container" style="margin-top: 100px; padding: 0px;">
                    <div class="single-section video-entry" style="text-align: center;">
                        <h3 class="single-section-title">가을</h3>
                        <div class="section-content" style="margin-top: 50px;" >
                            <div id="single-gallery-1" class="owl-carousel single-gallery-slider" >
                                <img class="img-responsive" src="images/slider/autumn-1.png" width="100%" height="100%" alt="Slider Image">
                                <img class="img-responsive" src="images/slider/autumn-2.png" width="100%"  height="100%" alt="Slider Image">
                                <img class="img-responsive" src="images/slider/autumn-3.png" width="100%" height="100%" alt="Slider Image">
                                <img class="img-responsive" src="images/slider/autumn-4.png" width="100%" height="100%" alt="Single Slider Image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container" style="margin-top: 100px; padding: 0px;">
                    <div class="single-section video-entry" style="text-align: center;">
                        <h3 class="single-section-title">겨울</h3>
                        <div class="section-content" style="margin-top: 50px;" >
                            <div id="single-gallery-1" class="owl-carousel single-gallery-slider" >
                                <img class="img-responsive" src="images/slider/winter-1.png" width="100%" height="100%" alt="Slider Image">
                                <img class="img-responsive" src="images/slider/winter-2.png" width="100%"  height="100%" alt="Slider Image">
                                <img class="img-responsive" src="images/slider/winter-3.png" width="100%" height="100%" alt="Slider Image">
                                <img class="img-responsive" src="images/slider/winter-4.png" width="100%" height="100%" alt="Single Slider Image">
                            </div>
                        </div>
                    </div>
                </div>
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

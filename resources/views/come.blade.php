<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Site information -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>오시는 길</title>
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


    @include('includes.header')

    <!-- Page Header -->
    <div class="page-header" style="background-image: url({{asset('images/bg/come-header.png')}});">
        <div class="page-header-overlay">
            <div class="container">
                <h2 class="page-title"></h2>
            </div>
        </div>
    </div>



    
    <!-- Page Header End -->
    <div class="section section-padding top-padding-normal news-section">






        <div class="container" style="margin-top: 40px;">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="single-section-title">지도 <a href="http://map.daum.net/link/map/36.643412, 126.662139">카카오톡 지도앱</a></h3>
                    <div class="col-sm-12 m-auto" style="margin-top: 50px;">
                        <div class="img-responsive" id="map" style="margin-left: auto; margin-right: auto; width:100vh;height:30vh;"></div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-xs-12">
                    <h3 class="single-section-title">오시는 길</h3>
                    <a class="news-featured" href="{{asset('images/template/cometoyang.png')}}">
                        <img class="img-responsive" src="{{asset('images/template/cometoyang.png')}}" width="555px" height="200px" alt="Featured news thumb">
                        <div class="">
                        </div>
                    </a>
                </div>
            </div>



        </div>

        <div class="container" style="margin-top: 100px;">

            <div class="row">
                <div class="col-xs-12">
                    <h3 class="single-section-title">위치 안내도</h3>
                    <a class="news-featured" style="margin-top: 40px" href="{{asset('images/template/wich.png')}}">
                        <img class="img-responsive" src="{{asset('images/template/wich.png')}}" onClick="popimage('http://www.blueb.co.kr/SRC/javascript/image/img01.jpg',250,167);return false" width="555px" height="200px" alt="Featured news thumb">
                        <div class="">
                        </div>
                    </a>
                </div>
            </div>


        </div>



    </div>


</div>

<!-- News End -->

</div>

@include('includes.footer')


<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=dedd737791b4fe6620cb608370ab9fd3"></script>
<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
mapOption = { 
        center: new daum.maps.LatLng(36.643412, 126.662139), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨


    };

var map = new daum.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

// 마커가 표시될 위치입니다 
var markerPosition  = new daum.maps.LatLng(36.643412, 126.662139); 

// 마커를 생성합니다
var marker = new daum.maps.Marker({
    position: markerPosition
});

// 마커가 지도 위에 표시되도록 설정합니다
marker.setMap(map);

</script>



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

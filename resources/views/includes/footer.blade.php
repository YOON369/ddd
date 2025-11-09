<!-- Footer -->



<!-- Footer Start -->

<footer class="text-white">
    
    <div class="footer-widget-area" >
          
        <div class="container">
          
            <div class="row">
                
                
                <div class="col-md-6 col-xs-12 sm-bottom-40">
                    <div class="widget about-widget">
                        <div class="widget-inner">
                            <a class="footer-logo" href="/">
                                <img class="img-responsive" style="max-width: 300px;" src="{{asset('images/template/logo-footer.png')}}" alt="Footer logo">
                            </a>
                            <div class="footer-social">
                                <h5 class="footer-social-title">Connect with</h5>
                                <div class="socials">
                                    <a href="{{$settings->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="{{$settings->youtube}}" target="_blank"><i class="fa fa-youtube-play"></i></a>
                                    <a href="{{$settings->instargram}}" target="_blank"><i class="fa fa-camera"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style="float: right;">
                    <div class="widget category-widget">
                        <h3 class="widget-title text-center ">{{$settings->site_name}}</h3>
                        <div class="widget-inner">
                            <ul class="widget-cat">
                                <li class="cat text-center " ><a href="#">전화번호</a></li>
                                <li class="cat text-center "><a href="tel:{{$settings->contact_number}}">{{$settings->contact_number}}</a></li>
                                <li class="cat text-center " ><a href="#">연락처</a></li>
                                <li class="cat text-center " ><a href="tel:010-3470-8123">010-3470-8123</a></li>
                                <li class="cat text-center "><a href="#">이메일</a></li>
                                <li class="cat text-center "><a href="mailto:{{$settings->contact_email}}">{{$settings->contact_email}}</a></li>

                                <li class="cat text-center "><a href="">주소</a></li>
                                <li class="cat text-center "><a href="https://map.kakao.com/?urlX=424457&urlY=873725&urlLevel=3&itemId=15825113&q=%EC%9A%A9%EB%B4%89%EC%82%B0%EC%8B%9C%EB%84%A4%EB%A7%88&srcid=15825113&map_type=TYPE_MAP" target="_blank">{{$settings->address}}</a></li>
  
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 col-xs-12 xs-text-center">
                    <ul class="footer-nav">
                        <li><a href="/intro">About</a></li>
                        <li><a href="/policy">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-5 col-xs-12 xs-text-center">
                    <p class="copyright-text">&copy; Make 2018 <a href="http://www.rabbilution.com" target="_blank">Rabbilution</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<a class="" href="http://pf.kakao.com/_lxidMu/chat" target="_blank" style="position: fixed; font-size: 2rem; line-height: 50px; width: 50px; background-color: #fed136; right: 1px; height: 50px; top: 100px; z-index: 1; border-radius: 50px; text-align: center;  ">
    <img class="img-responsive" src="{{asset('images/template/kakao.png')}}" style="border-color: #ffffff; border-radius: 50px;">
</a>

<a class="" href="tel:{{$settings->contact_number}}" style="position: fixed; font-size: 2rem; line-height: 50px; width: 50px; background-color: #fed136; right: 1px; height: 50px; top: 200px; z-index: 1; border-radius: 50px; text-align: center;  ">
    <img class="img-responsive" src="{{asset('images/template/tel.png')}}" style="border-color: #ffffff; border-radius: 50px;">
</a>



<!-- Footer End -->



<!-- End Footer -->

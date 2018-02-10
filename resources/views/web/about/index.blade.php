<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="upload-max-file-size" content="<?php echo intval(ini_get('upload_max_filesize'))?>">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/lightbox.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=LXM3TRP8Gi4utVVShcR9MOFubAy7cEsG"></script>
>
@include('header')
<body>
<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">关于我们</h1>
                        <p>为什么我们的学员喜欢我们公司</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->

<section id="about-company" class="padding-top wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="images/aboutus/5.png" class="margin-bottom" alt="">
                <h1 class="margin-bottom">关于我们公司</h1>
                <div id="allmap"></div>
                <p>Pork chop duis eu pig, labore sausage venison. Shankle fugiat duis, filet mignon tri-tip venison beef
                    shank ribeye<br/> aliqua cillum dolore sed do in.</p>
            </div>
        </div>
    </div>
</section>
<!--/#about-company-->

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/icon1.png" alt="">
                    </div>
                    <h2>Incredibly Responsive</h2>
                    <p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine. Cow shankle beef sirloin
                        chicken ground round.</p>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                        <img src="images/home/icon2.png" alt="">
                    </div>
                    <h2>Superior Typography</h2>
                    <p>Hamburger ribeye drumstick turkey, strip steak sausage ground round shank pastrami beef brisket
                        pancetta venison.</p>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                        <img src="images/home/icon3.png" alt="">
                    </div>
                    <h2>Swift Page Builder</h2>
                    <p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola
                        tenderloin bone pork kevin shankle.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#services-->

<section id="action">
    <div class="vertical-center">
        <div class="container">
            <div class="row">
                <div class="action count">
                    <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h1 class="timer bold" data-to="7000" data-speed="3000" data-from="0"></h1>
                        <h3>Happy Clients</h3>
                    </div>
                    <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h1 class="timer bold" data-to="12" data-speed="3000" data-from="0"></h1>
                        <h3>Years in Business</h3>
                    </div>
                    <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h1 class="timer bold" data-to="432" data-speed="3000" data-from="0"></h1>
                        <h3>Cups of Coffee</h3>
                    </div>
                    <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h1 class="timer bold" data-to="145" data-speed="3000" data-from="0"></h1>
                        <h3>Total Project</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->

<section id="company-information" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="about-us">
                <div class="col-sm-7 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2 class="bold">About Triangle</h2>
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="images/aboutus/6.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h3 class="top-zero">Who we are</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. <br> <br> Ut wisi enim ad minim
                                veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="our-skills">
                        <h2 class="bold">Our Skills</h2>
                        <div class="single-skill">
                            <h3>Design</h3>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"
                                     data-transition="35">35%
                                </div>
                            </div>
                        </div>
                        <div class="single-skill">
                            <h3>HTML</h3>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"
                                     data-transition="80">80%
                                </div>
                            </div>
                        </div>
                        <div class="single-skill">
                            <h3>PHP</h3>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"
                                     data-transition="60">60%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#company-information-->

<section id="team">
    <div class="container">
        <div class="row">
            <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Meet the
                Team</h1>
            <p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. <br>
                Ut enim ad minim veniam, quis nostrud </p>
            <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms"
                 data-wow-delay="400ms">
                <!-- Indicators -->
                <ol class="carousel-indicators visible-xs">
                    <li data-target="#team-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#team-carousel" data-slide-to="1"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-sm-3 col-xs-6">
                            <div class="team-single-wrapper">
                                <div class="team-single">
                                    <div class="person-thumb">
                                        <img src="images/aboutus/1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="social-profile">
                                        <ul class="nav nav-pills">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="person-info">
                                    <h2>John Doe</h2>
                                    <p>CEO &amp; Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="team-single-wrapper">
                                <div class="team-single">
                                    <div class="person-thumb">
                                        <img src="images/aboutus/2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="social-profile">
                                        <ul class="nav nav-pills">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="person-info">
                                    <h2>John Doe</h2>
                                    <p>CEO &amp; Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="team-single-wrapper">
                                <div class="team-single">
                                    <div class="person-thumb">
                                        <img src="images/aboutus/3.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="social-profile">
                                        <ul class="nav nav-pills">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="person-info">
                                    <h2>John Doe</h2>
                                    <p>CEO &amp; Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="team-single-wrapper">
                                <div class="team-single">
                                    <div class="person-thumb">
                                        <img src="images/aboutus/1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="social-profile">
                                        <ul class="nav nav-pills">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="person-info">
                                    <h2>John Doe</h2>
                                    <p>CEO &amp; Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-sm-3 col-xs-6">
                            <div class="team-single-wrapper">
                                <div class="team-single">
                                    <div class="person-thumb">
                                        <img src="images/aboutus/4.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="social-profile">
                                        <ul class="nav nav-pills">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="person-info">
                                    <h2>John Doe</h2>
                                    <p>CEO &amp; Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="team-single-wrapper">
                                <div class="team-single">
                                    <div class="person-thumb">
                                        <img src="images/aboutus/3.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="social-profile">
                                        <ul class="nav nav-pills">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="person-info">
                                    <h2>John Doe</h2>
                                    <p>CEO &amp; Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="team-single-wrapper">
                                <div class="team-single">
                                    <div class="person-thumb">
                                        <img src="images/aboutus/2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="social-profile">
                                        <ul class="nav nav-pills">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="person-info">
                                    <h2>John Doe</h2>
                                    <p>CEO &amp; Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="team-single-wrapper">
                                <div class="team-single">
                                    <div class="person-thumb">
                                        <img src="images/aboutus/1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="social-profile">
                                        <ul class="nav nav-pills">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="person-info">
                                    <h2>John Doe</h2>
                                    <p>CEO &amp; Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left team-carousel-control hidden-xs" href="#team-carousel" data-slide="prev">left</a>
                <a class="right team-carousel-control hidden-xs" href="#team-carousel" data-slide="next">right</a>
            </div>
        </div>
    </div>
</section>
<!--/#team-->


</body>
@include('footer')
</html>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");
    var point = new BMap.Point(116.331398, 39.897445);
    map.centerAndZoom(point, 12);

    var geolocation = new BMap.Geolocation();
    geolocation.getCurrentPosition(function (r) {
        if (this.getStatus() == BMAP_STATUS_SUCCESS) {
            var mk = new BMap.Marker(r.point);
            map.addOverlay(mk);
            map.panTo(r.point);
            alert('您的位置：' + r.point.lng + ',' + r.point.lat);
        }
        else {
            alert('failed' + this.getStatus());
        }
    }, {enableHighAccuracy: true})
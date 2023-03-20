<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <title>Coffee Break</title>

        <!-- Fonts -->


        <script type="{{ asset('application/x-javascript')}}"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;
        0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="{{ asset('css/style.css')}}" rel='stylesheet' type='text/css' />
        <script src="{{ asset('js/jquery.min.js')}}"></script>
        <!---- start-smoth-scrolling---->
        <script type="text/javascript" src="{{ asset('js/move-top.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/easing.js')}}"></script>
        <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });
                </script>
        <!--start-smoth-scrolling-->

    </head>
    <body>
        <!--header-top-starts-->
        <div class="header-top">
            <div class="container">
                <div class="head-main">
                    <a href="/home"><img src="{{ asset('images/logo-1.png')}}" alt="" /></a>
                </div>
            </div>
        </div>
        <!--header-top-end-->
        <!--start-header-->
        <div class="header">
            <div class="container">
                <div class="head">
                <div class="navigation">
                     <span class="menu"></span>
                        <ul class="navig">
                            <li><a href="{{ url('/') }}"  class="active">Trang Chủ</a></li>
                            @foreach ($category as $key => $cate )
                            <li><a href="{{ route('danh-muc.show',[$cate->id ,'slug'=>Str::slug($cate->title)]) }}">{{ $cate->title }}</a></li>
                            @endforeach
                        </ul>
                </div>

                <div class="header-right">
                    <form action="{{ url('tim-kiem')}}" method="GET">
                        @csrf
                        <div class="search-bar">
                            <input type="text" name="keywords" placeholder="Search...">
                            <input type="submit" value="Search" name="timkiem">
                        </div>
                    </form>
                    <ul>
                        <li><a href="#"><span class="fb"> </span></a></li>
                        <li><a href="#"><span class="twit"> </span></a></li>
                    </ul>
                </div>
                    <div class="clearfix"></div>
                </div>
                </div>
            </div>
        <!-- script-for-menu -->
        <!-- script-for-menu -->
            <script>
                $("span.menu").click(function(){
                    $(" ul.navig").slideToggle("slow" , function(){
                    });
                });
            </script>
        <!-- script-for-menu -->

        <!--main-starts-->
            @yield('content')
        <!--main-end-->
        <!--slide-starts-->
        <div class="slide">
            <div class="container">
                <div class="fle-xsel">
                <ul id="flexiselDemo3">
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="{{ asset('images/s-1.jpg')}}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="{{ asset('images/s-2.jpg')}}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="{{ asset('images/s-3.jpg')}}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="{{ asset('images/s-4.jpg')}}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="{{ asset('images/s-5.jpg')}}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="{{ asset('images/s-6.jpg')}}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                </ul>

                                 <script type="text/javascript">
                                    $(window).load(function() {

                                        $("#flexiselDemo3").flexisel({
                                            visibleItems: 5,
                                            animationSpeed: 1000,
                                            autoPlay: true,
                                            autoPlaySpeed: 3000,
                                            pauseOnHover: true,
                                            enableResponsiveBreakpoints: true,
                                            responsiveBreakpoints: {
                                                portrait: {
                                                    changePoint:480,
                                                    visibleItems: 2
                                                },
                                                landscape: {
                                                    changePoint:640,
                                                    visibleItems: 3
                                                },
                                                tablet: {
                                                    changePoint:768,
                                                    visibleItems: 3
                                                }
                                            }
                                        });

                                    });
                                    </script>
                                    <script type="text/javascript" src="{{ asset('js/jquery.flexisel.js')}}"></script>
                        <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--slide-end-->
        <!--footer-starts-->
        <div class="footer">
            <div class="container">
                <div class="footer-text">
                    <p>© Đồ án | Design by Nhóm 2 <a href="#" target="_blank"></a> </p>
                </div>
            </div>
        </div>
        <!--footer-end-->
    </body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>@yield("title")</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pop-up -->
    @yield("css-lib")
</head>
<body>
<!--/main-header-->
<!--/banner-section-->
<div id="demo-1" data-zs-src='["/images/2.jpg", "/images/1.jpg", "/images/3.jpg","/images/4.jpg"]' data-zs-overlay="dots">
    <div class="demo-inner-content">
        <!--/header-w3l-->
        <div class="header-w3-agileits" id="home">
            <div class="inner-header-agile">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a href="/"><span>A</span>bc <span>P</span>him</a></h1>
                    </div>
                    <!-- navbar-header -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Phim <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#section41">Đang Chiếu</a></li>
                                    <li><a href="#section42">Sắp Chiếu</a></li>
                                    <div class="clearfix"></div>
                                </ul>
                            </li>
                            <li><a href="{{ route("cinema.select") }}">Rạp Chiếu</a></li>
                            <li><a href="contact.html">Liên Hệ</a></li>
                        </ul>

                    </div>
                    <div class="clearfix"></div>
                </nav>
                <div class="w3ls_search">
                    <div class="cd-main-header">
                        <ul class="cd-header-buttons">
                            <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                        </ul> <!-- cd-header-buttons -->
                    </div>
                    <div id="cd-search" class="cd-search">
                        <form action="searchmovie" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <input name="key" type="text" placeholder="Search...">
                            <button type ="submit" class ="btn btn-default"> Tìm </button>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
        <!--//header-w3l-->
        <!--/banner-info-->

        <!--/banner-ingo-->
    </div>
</div>
<!--/banner-section-->
<!--//main-header-->
<!--/banner-bottom-->
<div class="w3_agilits_banner_bootm">
    <div class="w3_agilits_inner_bottom">
        <div class="col-md-6 wthree_agile_login">
            @if (session()->has('user'))
                Xin chào {{ session()->get('user')->name }}
               <a href="/logout" class="login reg"  data-toggle="modal" data-target="">Đăng xuất</a>
                <a href="/user/info" class="login reg"  data-toggle="modal" data-target="">Cá nhân</a>

            @else
            <ul>
                <li><i class="fa fa-phone" aria-hidden="true"></i> 01642784232</li>
                <li><a href="#" class="login"  data-toggle="modal" data-target="#myModal4">Đăng nhập</a></li>
                <li><a href="/register" class="login reg"  data-toggle="modal" >Đăng kí</a></li>
                
            </ul>
            @endif
        </div>

    </div>
</div>
<!--//banner-bottom-->
<!-- Modal1 -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Login</h4>
                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input type="email" name="email" placeholder="E-mail" required="">
                        <input type="password" name="password" placeholder="Password" required="">
                        <div class="tp">
                            <input type="submit" value="ĐĂNG NHẬP NGAY">
                        </div>
                        <div class="forgot-grid">
                            <div class="log-check">
                                <label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
                            </div>
                            <div class="forgot">
                                <a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Modal1 -->
<!-- Modal1 -->

<!-- //Modal1 -->
<!--/content-inner-section-->
@yield("content-inner-section")
<!--/top-movies-->


<!--/footer-bottom-->
<div class="contact-w3ls" id="contact">
    <div class="footer-w3lagile-inner">
        
           
        </div>
        <h3 class="text-center follow">Connect <span>Us</span></h3>
        <ul class="social-icons1 agileinfo">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>

    </div>

</div>
<div class="w3agile_footer_copy">
    <p>© 2018 ABC PHIM</p>
</div>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="/js/jquery-1.11.1.min.js"></script>
<!-- Dropdown-Menu-JavaScript -->
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');
                }
        );
    });
</script>
<!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="/js/jquery.zoomslider.min.js"></script>
<!-- search-jQuery -->
<script src="/js/main.js"></script>
<script src="/js/simplePlayer.js"></script>
<script>
    $("document").ready(function() {
        $("#video").simplePlayer();
    });
</script>


<!-- pop-up-box -->
<script src="/js/jquery.magnific-popup.js" type="text/javascript"></script>
<!--//pop-up-box -->



<script src="/js/easy-responsive-tabs.js"></script>

<link href="/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="/js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds
            autoPlay : true,
            navigation :true,

            items : 5,
            itemsDesktop : [640,4],
            itemsDesktopSmall : [414,3]

        });

    });
</script>

<!--/script-->
<script type="text/javascript" src="/js/move-top.js"></script>
<script type="text/javascript" src="/js/easing.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!--end-smooth-scrolling-->
<script src="/js/bootstrap.js"></script>
@yield("js")
</body>
</html>
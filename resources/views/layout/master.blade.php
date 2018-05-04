<!DOCTYPE html>
<html>
<head>
    <title>@yield("title")</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Movies Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
                        <h1><a href="/"><span>M</span>ovies <span>P</span>ro</a></h1>
                    </div>
                    <!-- navbar-header -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Phim <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="genre.html">Đang Chiếu</a></li>
                                    <li><a href="genre.html">Sắp Chiếu</a></li>
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
                        <form action="#" method="post">
                            <input name="Search" type="search" placeholder="Search...">
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
                Hello {{ session()->get('user')->name }}
            @else
            <ul>
                <li><i class="fa fa-phone" aria-hidden="true"></i> (+000) 009 455 4088</li>
                <li><a href="#" class="login"  data-toggle="modal" data-target="#myModal4">Login</a></li>
                <li><a href="#" class="login reg"  data-toggle="modal" data-target="#myModal5">Register</a></li>
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
                            <input type="submit" value="LOGIN NOW">
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
        <h2>Sign up for our <span>Newsletter</span></h2>
        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros eget tellus
            tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
        <div class="footer-contact">
            <form action="#" method="post">
                <input type="email" name="Email" placeholder="Enter your email...." required=" ">
                <input type="submit" value="Subscribe">
            </form>
        </div>
        <div class="footer-grids w3-agileits">
            <div class="col-md-2 footer-grid">
                <h4>Release</h4>
                <ul>
                    <li><a href="#" title="Release 2016">2016</a></li>
                    <li><a href="#" title="Release 2015">2015</a></li>
                    <li><a href="#" title="Release 2014">2014</a></li>
                    <li><a href="#" title="Release 2013">2013</a></li>
                    <li><a href="#" title="Release 2012">2012</a></li>
                    <li><a href="#" title="Release 2011">2011</a></li>
                </ul>
            </div>
            <div class="col-md-2 footer-grid">
                <h4>Movies</h4>
                <ul>

                    <li><a href="genre.html">ADVENTURE</a></li>
                    <li><a href="comedy.html">COMEDY</a></li>
                    <li><a href="series.html">FANTASY</a></li>
                    <li><a href="series.html">ACTION  </a></li>
                    <li><a href="genre.html">MOVIES  </a></li>
                    <li><a href="horror.html">HORROR  </a></li>

                </ul>
            </div>


            <div class="col-md-2 footer-grid">
                <h4>Review Movies</h4>
                <ul class="w3-tag2">
                    <li><a href="comedy.html">Comedy</a></li>
                    <li><a href="horror.html">Horror</a></li>
                    <li><a href="series.html">Historical</a></li>
                    <li><a href="series.html">Romantic</a></li>
                    <li><a href="series.html">Love</a></li>
                    <li><a href="genre.html">Action</a></li>
                    <li><a href="single.html">Reviews</a></li>
                    <li><a href="comedy.html">Comedy</a></li>
                    <li><a href="horror.html">Horror</a></li>
                    <li><a href="series.html">Historical</a></li>
                    <li><a href="series.html">Romantic</a></li>
                    <li><a href="genre.html">Love</a></li>
                    <li><a href="comedy.html">Comedy</a></li>
                    <li><a href="horror.html">Horror</a></li>
                    <li><a href="genre.html">Historical</a></li>

                </ul>


            </div>
            <div class="col-md-2 footer-grid">
                <h4>Phim đang chiếu</h4>
                <div class="footer-grid1">
                    <div class="footer-grid1-left">
                        <a href="single.html"><img src="/images/1.jpg" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid1-right">
                        <a href="single.html">eveniet ut molesti</a>

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="footer-grid1">
                    <div class="footer-grid1-left">
                        <a href="single.html"><img src="/images/2.jpg" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid1-right">
                        <a href="single.html">earum rerum tenet</a>

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="footer-grid1">

                    <div class="footer-grid1-left">
                        <a href="single.html"><img src="/images/4.jpg" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid1-right">
                        <a href="single.html">eveniet ut molesti</a>

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="footer-grid1">
                    <div class="footer-grid1-left">
                        <a href="single.html"><img src="/images/3.jpg" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid1-right">
                        <a href="single.html">earum rerum tenet</a>

                    </div>
                    <div class="clearfix"> </div>
                </div>


            </div>
            <div class="col-md-2 footer-grid">
                <h4 class="b-log"><a href="index.html"><span>M</span>ovies <span>P</span>ro</a></h4>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="/images/m1.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="/images/m2.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="/images/m3.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="/images/m4.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="/images/m5.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="/images/m6.jpg" alt=" " class="img-responsive"></a>
                </div>

                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
            <ul class="bottom-links-agile">
                <li><a href="icons.html" title="Font Icons">Icons</a></li>
                <li><a href="short-codes.html" title="Short Codes">Short Codes</a></li>
                <li><a href="contact.html" title="contact">Contact</a></li>

            </ul>
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
    <p>© 2017 Movies Pro<</p>
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
<script>
    $("document").ready(function() {
        $("#video1").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video2").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video3").simplePlayer();
    });
</script>

<!-- pop-up-box -->
<script src="/js/jquery.magnific-popup.js" type="text/javascript"></script>
<!--//pop-up-box -->

{{--<div id="small-dialog1" class="mfp-hide">--}}
    {{--<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>--}}
{{--</div>--}}
{{--<div id="small-dialog2" class="mfp-hide">--}}
    {{--<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>--}}
{{--</div>--}}
<script>
    $(document).ready(function() {
        $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<script src="/js/easy-responsive-tabs.js"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
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
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });
    });
</script>
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
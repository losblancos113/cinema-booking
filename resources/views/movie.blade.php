@extends("layout.master")
@section("title")
    $movie->tenphim
@endsection
@section("css-lib")
    <!-- pop-up -->
    <link href="/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- //pop-up -->
    <link href="/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="/css/zoomslider.css"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link href="/css/font-awesome.css" rel="stylesheet">
    <script type="text/javascript" src="/js/modernizr-2.6.2.min.js"></script>
    <!--/web-fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Tangerine" rel="stylesheet">
    <!--//web-fonts-->
@endsection
@section("content-inner-section")
    <div class="w3_breadcrumb">
        <div class="breadcrumb-inner">
            <ul>
                <li><a href="index.html">Home</a><i>//</i></li>

                <li>Single</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumb -->
    <!--/content-inner-section-->
    <div class="w3_content_agilleinfo_inner">
        <div class="agile_featured_movies">
            <div class="inner-agile-w3l-part-head">
                <h3 class="w3l-inner-h-title">{{ $movie->tenphim }}</h3>
                {{--<p class="w3ls_head_para">$movie->motaphim</p>--}}
            </div>
            <div class="latest-news-agile-info">
                <div class="col-md-8 latest-news-agile-left-content">
                    <div class="single video_agile_player">

                        <div class="video-grid-single-page-agileits">
                            <div data-video="{{ getYoutubeId($movie->trailer) }}" id="video"><img src="{{ $movie->anhphim }}" alt=""
                                                                          class="img-responsive"/></div>
                        </div>
                        <h4>{{ $movie->daodien }} | {{ $movie->dandienvien }}</h4>
                    </div>
                    <div>{{ $movie->motaphim }}</div>


                    <div class="response">
                        <a href="{{ route('cinema.select') }}" class="btn btn-primary btn-lg">Mua Vé</a>
                    </div>

                </div>
                <div class="col-md-4 latest-news-agile-right-content">


                    <h4 class="side-t-w3l-agile">Latest <span>Trailer</span></h4>
                    <div class="video_agile_player sidebar-player">
                        <div class="video-grid-single-page-agileits">
                            <div data-video="fNKUgX8PhMA" id="video1"><img src="/images/22.jpg" alt=""
                                                                           class="img-responsive">
                                <div id="play"></div>
                            </div>
                        </div>


                        <div class="player-text side-bar-info">
                            <p class="fexi_header">Me Before You </p>
                            <p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>Me
                                Before You Official Trailer #2 (2016) - Emilia Clarke, Sam Claflin Movie HD

                                A girl in a small town forms an unlikely....</p>
                            <p class="fexi_header_para"><span>Release On<label>:</label></span>Feb 3, 2016 </p>
                            <p class="fexi_header_para">
                                <span>Genres<label>:</label> </span>
                                <a href="genre.html">Drama</a> |
                                <a href="genre.html">Adventure</a> |
                                <a href="genre.html">Family</a>
                            </p>
                            <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                            </p>
                        </div>

                    </div>
                    <h4 class="side-t-w3l-agile">Latest <span>Trailer</span></h4>
                    <div class="video_agile_player sidebar-player">
                        <div class="video-grid-single-page-agileits">
                            <div data-video="fNKUgX8PhMA" id="video1"><img src="/images/22.jpg" alt=""
                                                                           class="img-responsive">
                                <div id="play"></div>
                            </div>
                        </div>


                        <div class="player-text side-bar-info">
                            <p class="fexi_header">Me Before You </p>
                            <p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>Me
                                Before You Official Trailer #2 (2016) - Emilia Clarke, Sam Claflin Movie HD

                                A girl in a small town forms an unlikely....</p>
                            <p class="fexi_header_para"><span>Release On<label>:</label></span>Feb 3, 2016 </p>
                            <p class="fexi_header_para">
                                <span>Genres<label>:</label> </span>
                                <a href="genre.html">Drama</a> |
                                <a href="genre.html">Adventure</a> |
                                <a href="genre.html">Family</a>
                            </p>
                            <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                            </p>
                        </div>

                    </div>

                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
@endsection
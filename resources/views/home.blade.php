@extends("layout.master")
@section("title")
    Trang chủ
@endsection

@section("css-lib")
    <!-- pop-up -->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up -->
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="css/zoomslider.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link href="css/font-awesome.css" rel="stylesheet">
    <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
    <!--/web-fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Tangerine" rel="stylesheet">
    <!--//web-fonts-->
@endsection


@section("content-inner-section")
    <h3 class="agile_w3_title"> Phim đang chiếu</h3>
    <!--/movies-->
    <div class="w3_agile_latest_movies">

        <div id="owl-demo" class="owl-carousel owl-theme">
            @foreach($now_showing as $movie)
            <div class="item">
                <div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
                    <a href="{{ route('movie.detail', $movie->maphim) }}" class="hvr-sweep-to-bottom"><img src="{{ $movie->anhphim }}" title="{{ $movie->tenphim }}" class="img-responsive" alt=" " />
                        <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                    </a>
                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                        <div class="w3l-movie-text">
                            <h6><a href="single.html">{{ $movie->tenphim }}</a></h6>
                        </div>
                        <div class="mid-2 agile_mid_2_home">
                            <p>{{ $movie->ngaykhoichieu }}</p>
                            <div class="block-stars">
                                <ul class="w3l-ratings">
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="ribben one">
                        <p>NEW</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <!--//movies-->
    <h3 class="agile_w3_title">Phim sắp chiếu  </h3>
    <!--/requested-movies-->
    @foreach($coming_soon as $movie)
    <div class="wthree_agile-requested-movies">
        <div class="col-md-2 w3l-movie-gride-agile requested-movies">
            <a href="{{ route('movie.detail', $movie->maphim) }}" class="hvr-sweep-to-bottom"><img src="{{ $movie->anhphim }}" title="{{ $movie->tenphim }}" class="img-responsive" alt=" ">
                <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
            </a>
            <div class="mid-1 agileits_w3layouts_mid_1_home">
                <div class="w3l-movie-text">
                    <h6><a href="single.html">{{ $movie->tenphim }}</a></h6>
                </div>
                <div class="mid-2 agile_mid_2_home">
                    <p>{{ $movie->ngaykhoichieu }}</p>
                    <div class="block-stars">
                        <ul class="w3l-ratings">
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="ribben one">
                <p>NEW</p>
            </div>
        </div>
        @endforeach
        <div class="clearfix"></div>
    </div>
    <!--//requested-movies-->
@endsection
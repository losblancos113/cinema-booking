@extends("layout.master")
@section("title")
    Kết quả tìm kiếm
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
    <h3 class="agile_w3_title"> {{$key}}</h3>
    <!--/movies-->
    <div class="w3_agile_latest_movies">

        <div id="owl-demo" class="owl-carousel owl-theme">
            @foreach($movies as $m)
            <div class="item">
                <div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
                    <a href="{{ route('movie.detail', $m->maphim) }}" ><img src="{{ $m->anhphim }}" title="{{ $m->tenphim }}" class="img-responsive"  />
                        
                    </a>
                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                        <div class="w3l-movie-text">
                            <h6><a href="{{ route('movie.detail', $m->maphim) }}">{{ $m->tenphim }}</a></h6>
                        </div>
                        <div class="w3l-movie-text">
                            <p>{{ $m->ngaykhoichieu }}</p>
                            
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
 
    <!--//requested-movies-->
@endsection
@section("js")
@endsection
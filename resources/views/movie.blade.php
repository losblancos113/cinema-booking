@extends("layout.master")
@section("title")
    {{$movie->tenphim}}
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
    
    <!-- //breadcrumb -->
    <!--/content-inner-section-->
    <div class="w3_content_agilleinfo_inner">
        <div class="agile_featured_movies">
            <div class="inner-agile-w3l-part-head">
                <h3 class="w3l-inner-h-title">{{ $movie->tenphim }}</h3>
                {{--<p class="w3ls_head_para">$movie->motaphim</p>--}}
            </div>
            <div class="latest-news-agile-info">
                <div class="col-md-12 latest-news-agile-left-content">
                    <div class="single video_agile_player">

                        <div class="video-grid-single-page-agileits">
                            <div data-video="{{ getYoutubeId($movie->trailer) }}" id="video"><img src="{{ $movie->anhphim }}" alt=""
                                                                          class="img-responsive"/></div>
                        </div>
                        <h4>{{ $movie->daodien }} | {{ $movie->dandienvien }}</h4>
                    </div>
                    <div>{{ $movie->motaphim }}</div>


                    <div class="response">
                        <a href="{{ route('cinema.movie.select', ['idMovie' => $movie->maphim]) }}" class="btn btn-primary btn-lg">Đặt Vé</a>
                    </div>

                </div>
                
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
@endsection
@section("js")
@endsection
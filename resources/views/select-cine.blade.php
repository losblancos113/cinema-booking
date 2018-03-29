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
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            @foreach($cities as $city)
                @if($loop->first)
                    <li role="presentation" class="active"><a href="#profile{{ $city->mathanhpho }}" aria-controls="profile" role="tab" data-toggle="tab">{{ $city->tenthanhpho }}</a></li>
                @else
                    <li role="presentation"><a href="#profile{{ $city->mathanhpho }}" aria-controls="profile" role="tab" data-toggle="tab">{{ $city->tenthanhpho }}</a></li>
                @endif
            @endforeach
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            @foreach($cities as $city)
                @if($loop->first)
                    <div role="tabpanel" class="tab-pane active" id="profile{{ $city->mathanhpho }}">
                        @foreach($city->districts() as $district)
                            <a href="#" class="btn btn-lg">{{ $district->tenquanhuyen }}</a>
                        @endforeach
                    </div>
                @else
                    <div role="tabpanel" class="tab-pane" id="profile{{ $city->mathanhpho }}">
                        @foreach($city->districts() as $district)
                            <a href="#" class="btn btn-lg">{{ $district->tenquanhuyen }}</a>
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
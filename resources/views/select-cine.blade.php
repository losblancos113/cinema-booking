@extends("layout.master")
@section("title")
    Chọn Rạp
@endsection
@section("css-lib")
    <!-- pop-up -->
    <link href="/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- //pop-up -->
    <link href="/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="/css/zoomslider.css"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/select-cine.css" rel="stylesheet">
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
    <div class="w3_content_agilleinfo_inner" style="min-height: 400px">
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
                            <button onclick="handleDistrictClick(this)" ma-quan-huyen="{{ $district->maquanhuyen }}" class="btn btn-lg">{{ $district->tenquanhuyen }}</button>
                        @endforeach
                    </div>
                @else
                    <div role="tabpanel" class="tab-pane" id="profile{{ $city->mathanhpho }}">
                        @foreach($city->districts() as $district)
                            <button onclick="handleDistrictClick(this)" ma-quan-huyen="{{ $district->maquanhuyen }}" class="btn btn-lg">{{ $district->tenquanhuyen }}</button>
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>

        <div class="cine-list" id="list-cine">
            <div class="lds-hourglass" style="display: none"></div>
        </div>

        <div class="show-container" style="display: none" id="show-container">
            <h2 class="cine-header" id="tenRap"></h2>
            <h3 class="cine-header" id="diaChiRap"></h3>
            <div class="bg-primary show-list-header">Lịch Chiếu</div>
            <div class="list-show">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                </div>
            </div>
        </div>
        <div id="loadingRipple" style="display: none" class="lds-ripple"><div></div><div></div></div>

        <!-- Input hidden -->
        <input id="idMovie" type="hidden" value="{{ (isset($idMovie)) ? $idMovie : '' }}">
    </div>
@endsection

@section("js")
    <script src="/js/axios.min.js">
    </script>
    <script src="/js/jquery.blockUI.js">
    </script>
    <script>
        var selectedCine = {};
        var cinemasList = [];
        var idMovie = $('#idMovie').val();
        function handleCineClick(element) {
            var idCine = $(element).attr('idCine');
            selectedCine = cinemasList.find(function (cine) {
               if (cine.marap == idCine){
                   return true;
               }else {
                   return false;
               }
            });
            $.blockUI({ message: $('#loadingRipple') ,
                css: {
                    backgroundColor: 'unset',
                    border: 'unset'
                }
            });
            var promise = null;
            //kiem tra lay danh sach ke hoach chieu theo phim hay rap
            if (idMovie !== ''){
                promise = getShowByCineAndMovie(idCine, idMovie);
            }else {
                promise = getShowByCine(idCine);
            }
            promise.then(function (res) {
                console.log(res.data);
                $('#tenRap').text(selectedCine.tenrap);
                $('#diaChiRap').text(selectedCine.diachirap);
                $('#show-container').show();
                renderListShow(res.data);
                $.unblockUI();
            });
        }
        function renderListShow(data) {
            var html = '';
            var countDate = 0;
            var colapseClass = '';
            var ariaExpanded = '';
            var colapseIn = '';
            for (let date in data){
                colapseClass = (countDate > 0) ? 'class="collapsed"' : '';
                ariaExpanded = (countDate > 0) ? 'false' : 'true';
                colapseIn = (countDate > 0) ? '' : 'in';
                html+= '<div class="panel panel-default">\n' +
                    '                        <div class="panel-heading" role="tab" id="heading'+countDate+'">\n' +
                    '                            <h4 class="panel-title">\n' +
                    '                                <a role="button" ' + colapseClass +  ' data-toggle="collapse" data-parent="#accordion" href="#collapse'+countDate+'" aria-expanded="'+ ariaExpanded +'" aria-controls="collapse'+countDate+'">\n' + date +
                    '                                </a>\n' +
                    '                            </h4>\n' +
                    '                        </div>\n' +
                    '                        <div id="collapse'+countDate+'" class="panel-collapse collapse '+ colapseIn +'" role="tabpanel" aria-labelledby="heading'+countDate+'">\n' +
                    '                            <div class="panel-body">\n';

                let objByDate = data[date];
                for (let maphim in objByDate){
                    let objByMaPhim = objByDate[maphim];
                    let phim = objByMaPhim.phim;
                    let shows = objByMaPhim.shows;
                    html+= '<div class="phim-show-box">';
                    html+= '<div class="ten-phim">'+ phim.tenphim +'</div>';
                    html+= '<div class="phim-box">';
                    html+= '<div class="phim-img"><img src="'+ phim.anhphim +'"></div>';
                    html+= '<div class="phim-show-time">'
                    shows.forEach(show => {
                        html+= '<a href="/cine/seat/' + show.makehoachchieu + '" class="btn btn-default">'+ show.giobatdau +'</a>';
                    });
                    html+= '</div>';
                    html+= '</div>';
                    html+= '</div>';
                }
                html +='                            </div>\n' +
                    '                        </div>\n' +
                    '                    </div>';

                countDate++;
            }
            $('#accordion').html(html);
        }
        function getShowByCine(idCine) {
            if (idCine != null && typeof idCine !== 'undefined'){
                return axios.get('/api/getShowByCine/'+idCine);
            }else {
                return null;
            }
        }

        function getShowByCineAndMovie(idCine, idMovie) {
            if (idCine != null && typeof idCine !== 'undefined'){
                return axios.get('/api/getShowByCineAndMovie/'+idCine+'/'+idMovie);
            }else {
                return null;
            }
        }

        function handleDistrictClick(element) {
            $('#list-cine .cine').remove();
            $('.lds-hourglass').show();
            var maQuanHuyen = $(element).attr('ma-quan-huyen');
            var promise = getCine(maQuanHuyen);
            promise.then(function (res) {
                if (res.data != 500){
                    cinemasList = res.data;
                    renderListCinema(res.data);
                }else{
                    return null;
                }
            });
        }
        function getCine(maQuanHuyen) {
            if (maQuanHuyen !== null && typeof maQuanHuyen !== 'undefined'){
                return axios.get('/api/getCineByDistrict/'+maQuanHuyen);
            } else {
                return null;
            }
        }
        function renderListCinema(cinemas) {
            var html = '';
            for (let i = 0; i < cinemas.length; i++){
                let cine = cinemas[i];
                html+= '<button onclick="handleCineClick(this)" idCine="'+cine.marap+'" class="cine btn btn-outline-primary btn-lg">'+ cine.tenrap +'</button>'
            }
            $('.lds-hourglass').hide();
            $('#list-cine').append(html);
        }
    </script>
@endsection
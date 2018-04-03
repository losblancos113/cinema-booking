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
    </div>
@endsection

@section("js")
    <script src="/js/axios.min.js">
    </script>
    <script src="/js/jquery.blockUI.js">
    </script>
    <script>
        function handleCineClick(element) {
            var idCine = $(element).attr('idCine');
            $.blockUI({ message: $('#loadingRipple') ,
                css: {
                    backgroundColor: 'unset',
                    border: 'unset'
                }
            });
            var promise = getShowByCine(idCine);
            promise.then(function (res) {
                console.log(res.data);
                $('#tenRap').text('CGV');
                $('#diaChiRap').text('123 sdasc');
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
            for (let date in data){
                colapseClass = (countDate > 0) ? 'class="collapsed"' : '';
                ariaExpanded = (countDate > 0) ? 'false' : 'true';
                html+= '<div class="panel panel-default">\n' +
                    '                        <div class="panel-heading" role="tab" id="heading'+countDate+'">\n' +
                    '                            <h4 class="panel-title">\n' +
                    '                                <a role="button" ' + colapseClass +  ' data-toggle="collapse" data-parent="#accordion" href="#collapse'+countDate+'" aria-expanded="'+ ariaExpanded +'" aria-controls="collapse'+countDate+'">\n' + date +
                    '                                </a>\n' +
                    '                            </h4>\n' +
                    '                        </div>\n' +
                    '                        <div id="collapse'+countDate+'" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading'+countDate+'">\n' +
                    '                            <div class="panel-body">\n' +
                    '                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                    </div>';
                let objByDate = data[date];
                for (let maphim in objByDate){
                    let show = objByDate[maphim];

                }
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

        function handleDistrictClick(element) {
            $('a').remove('.cine');
            $('.lds-hourglass').show();
            var maQuanHuyen = $(element).attr('ma-quan-huyen');
            var promise = getCine(maQuanHuyen);
            promise.then(function (res) {
                if (res.data != 500){
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
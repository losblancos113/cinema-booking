@extends("layout.master")
@section("title")
    Thanh toán giao dịch
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
    <style type="text/css">
        .row-tt {
            width: 100%;
        }

        #tt-header {
            height: 40px;
            line-height: 40px;
            font-size: 20px;
            background: #103a1b;
            color: #FFFFFF;
            text-align: center;
        }

        #tt-checkout-container {
            height: 500px;
        }

        #tt-checkout-method {
            width: 70%;
            padding-left: 20px;
            padding-top: 15px;
            border-right: 1px solid #0c0d0d;
            height: 100%;
        }

        #tt-checkout-info {
            width: 30%;
            padding-left: 15px;
            padding-top: 15px;
            height: 100%;
        }

        .tt-table {
            display: table;
            width: 100%;
        }

        .tt-table-row {
            display: table-row;
        }

        .tt-table-cell {
            display: table-cell;
        }

        #formCheckOut {
            height: 100%;
        }
    </style>
@endsection
@section("content-inner-section")
    <div class="row-tt " id="tt-header">
        Thanh Toán
    </div>
    <div class="row-tt" id="tt-checkout-container">
        <form id="formCheckOut" action="/payment/processCheckout" method="post">
            @csrf
            <div id="tt-checkout-method" class="pull-left">
                <h2>Chọn phương thức thanh toán:</h2>
                <div class="radio">
                    <label>
                        <input type="radio" name="paymentMethod" id="baoKim" value="1" checked>
                        Bảo Kim
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="paymentMethod" id="nganLuong" value="2">
                        Ngân Lượng
                    </label>
                </div>
            </div>
            <div id="tt-checkout-info" class="pull-right">
                <h3>Chi tiết giao dịch</h3>
                <div class="tt-table">
                    <div class="tt-table-row">
                        <div class="tt-table-cell"><h4>Tên Phim</h4></div>
                        <div class="tt-table-cell">{{ $giao_dich->show->phims()->tenphim }}</div>
                    </div>
                    <div class="tt-table-row">
                        <div class="tt-table-cell"><h4>Giờ chiếu</h4></div>
                        <div class="tt-table-cell">{{ $giao_dich->show->ngaychieu }} {{ $giao_dich->show->giobatdau }}</div>
                    </div>
                    <div class="tt-table-row">
                        <div class="tt-table-cell"><h4>Phòng chiếu</h4></div>
                        <div class="tt-table-cell">{{ $giao_dich->room->tenphong }}</div>
                    </div>
                    <div class="tt-table-row">
                        <div class="tt-table-cell"><h4>Ghế đã chọn</h4></div>
                        <div class="tt-table-cell">
                            <ul class="list-unstyled">
                                @foreach($giao_dich->ghe_da_dat as $seat)
                                    <li>{{ $seat->tenghe }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="tt-table-row">
                        <div class="tt-table-cell">
                            <h4>Tổng tiền</h4>
                        </div>
                        <div class="tt-table-cell"
                             style="color: red; font-size: 20px; font-weight: bold">{{ $giao_dich->tong_tien }}</div>
                    </div>
                </div>
                <input type="hidden" name="totalAmount" value="{{ $giao_dich->tong_tien }}" >
                <button type="submit" style="margin-top: 20px" class="btn btn-warning btn-lg btn-block">Xác Nhận Thanh Toán</button>
            </div>
            <div style="clear: both"></div>
        </form>
    </div>
@endsection
@section("js")

@endsection
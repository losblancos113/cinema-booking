@extends("layout.master")
@section("title")
    Lịch Sử Giao Dịch
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
    <link href="/css/login.css" rel="stylesheet">
    <link href="/css/user-profile.css" rel="stylesheet" >
@endsection
@section("content-inner-section")
    <div class="user-profile-container">
        @include('user_menu', ["activeId" => 2, "userId" => session()->get("user")->id])
        <div class="user-profile-content pull-right">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Ngày giao dịch</th>
                        <th>Mã giao dịch</th>
                        <th>Thông tin giao dịch</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->created_at }}</td>
                            <td>{{ $transaction->codegiaodich }}</td>
                            <td>
                                Mua vé phim {{ $transaction->getMovie()->tenphim }}<br>
                                Ghế: @foreach($transaction->getOrderDetail() as $order_detail)
                                     {{ $order_detail->getSeat()->tenghe." " }}
                                @endforeach
                            </td>
                            <td>{{ $transaction->getTotalAmount() }}</td>
                            <td>
                                @if($transaction->trangthai == 1)
                                    <span class="label label-success">Đã thanh toán</span>
                                @elseif($transaction->trangthai == 0)
                                    <span class="label label-warning">Chưa thanh toán</span>
                                @elseif($transaction->trangthai == 2)
                                    <span class="label label-default">Đã đóng</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div style="clear: both"></div>
    </div>
@endsection
@section("js")
@endsection
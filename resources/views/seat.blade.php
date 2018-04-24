@extends("layout.master")
@section("title")
    Chọn Ghế: {{$show->phims()->tenphim}}
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
    <link href="/css/style2.css" rel="stylesheet" type="text/css" media="all" />
@endsection
@section("content-inner-section")
    <div class="demo">
        <div id="seat-map">
            <div class="front">SCREEN</div>
        </div>
        <div class="booking-details">
            <ul class="book-left">
                <li>Tên phim </li>
                <li>Thời gian </li>
                <li>Tickets</li>
                <li>Tổng số</li>
                <li>Chỗ đã chọn :</li>
            </ul>
            <ul class="book-right">
                <li>: {{ $show->phims()->tenphim }}</li>
                <li>: {{ $show->ngaychieu." ".$show->giobatdau }}</li>
                <li>: <span id="counter">0</span></li>
                <li>: <b><i></i><span id="total">0</span></b> VND</li>
            </ul>
            <div class="clear"></div>
            <ul id="selected-seats" class="scrollbar scrollbar1"></ul>

            <form id="formCheckOut" action="/payment/checkout" method="post">
                @csrf
            </form>
            <button onclick="checkOut()" class="checkout-button">Thanh Toán</button>
            <div id="legend"></div>
        </div>
        <div style="clear:both"></div>
    </div>
@endsection
@section("js")
    <script src="/js/axios.min.js"></script>
    <script src="/js/jquery.seat-charts.js"></script>
    <script type="text/javascript">
        var price = {!! $show->giave !!}; //price
        var seats = {!! $seats !!};
        var seatChart = {!! json_encode($seat_chart) !!};
        $(document).ready(function() {
            var $cart = $('#selected-seats'), //Sitting Area
                $counter = $('#counter'), //Votes
                $total = $('#total'); //Total money

            var sc = $('#seat-map').seatCharts({
                map: seatChart,
                naming : {
                    top : false,
                    getLabel : function (character, row, column) {
                        return column;
                    }
                },
                legend : { //Definition legend
                    node : $('#legend'),
                    items : [
                        [ 'a', 'available',   'Available' ],
                        [ 'a', 'unavailable', 'Sold'],
                        [ 'a', 'selected', 'Selected']
                    ]
                },
                click: function () { //Click event
                    if (this.status() == 'available') { //optional seat
                        $('<li>Hàng '+(this.settings.row+1)+' Ghế số '+this.settings.label+'</li>')
                            .attr('id', 'cart-item-'+this.settings.id)
                            .data('seatId', this.settings.id)
                            .appendTo($cart);

                        $counter.text(sc.find('selected').length+1);
                        $total.text(recalculateTotal(sc)+price);

                        return 'selected';
                    } else if (this.status() == 'selected') { //Checked
                        //Update Number
                        $counter.text(sc.find('selected').length-1);
                        //update totalnum
                        $total.text(recalculateTotal(sc)-price);

                        //Delete reservation
                        $('#cart-item-'+this.settings.id).remove();
                        //optional
                        return 'available';
                    } else if (this.status() == 'unavailable') { //sold
                        return 'unavailable';
                    } else {
                        return this.style();
                    }
                }
            });
            //sold seat
            var soldSeat = getSoldSeats();
            sc.get(soldSeat).status('unavailable');

        });
        //sum total money
        function recalculateTotal(sc) {
            var total = 0;
            sc.find('selected').each(function () {
                total += price;
            });

            return total;
        }
        function getSoldSeats() {
            return seats.filter(seat => seat.trangthai !== 0).map(seat => seat.tenghe);
        }
        function checkOut() {
            var selectedSeatName = [];
            $('#selected-seats li').each(function () {
                console.log(this);
               var seatName = $(this).data('seatId');
                selectedSeatName.push(seatName);
            });
            var selectedSeatId = getSeatIdFromSeatName(selectedSeatName);
            console.log(selectedSeatId);
            var inputKeHoach = $("<input>").attr("type", "hidden").attr("name","makehoach").val("{{ $show->makehoachchieu }}");
            var inputMaKH = $("<input>").attr("type", "hidden").attr("name","makhachhang").val("{{ session()->get('user')->id }}");
            var inputGheDat = $("<input>").attr("type", "hidden").attr("name","ghedat").val(JSON.stringify(selectedSeatId));
            $('#formCheckOut').append($(inputGheDat)).append($(inputKeHoach)).append($(inputMaKH));
            $('#formCheckOut').submit();
        }
        function getSeatIdFromSeatName(seatNames) {
            return seats.filter(seat => $.inArray(seat.tenghe, seatNames) != -1).map(seat => seat.maghe);
        }
    </script>
    <script src="/js/jquery.nicescroll.js"></script>
    <script src="/js/scripts.js"></script>
@endsection
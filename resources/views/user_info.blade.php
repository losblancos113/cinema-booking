@extends("layout.master")
@section("title")
    Thông tin thành viên
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
    <link href="/css/user-profile.css" rel="stylesheet">
@endsection
@section("content-inner-section")
    @if($update == 1)
        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            Cập nhật thông tin thành công
        </div>
    @elseif($update == 2)
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            Cập nhật thất bại
        </div>
    @endif
    <div class="user-profile-container">
        @include('user_menu', ["activeId" => 1, "userId" => $user->id])
        <div class="user-profile-content pull-right">
            <form class="form-horizontal" action="/user/update" method="post">
                {{ method_field('PUT') }}
                @csrf
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Họ Tên</label>
                    <div class="col-sm-10">
                        <input name="name" type="name" value="{{ $user->name }}" class="form-control" id="inputName"
                               placeholder="Họ Tên">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" disabled="disabled" type="email" value="{{ $user->email }}" class="form-control"
                               id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input name="password" type="password" value="0000000000" class="form-control" id="inputPassword3"
                               placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDiachi" class="col-sm-2 control-label">Địa Chỉ</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{ $user->diachi }}" class="form-control" id="inputDiachi"
                               name="diachi" placeholder="Địa chỉ">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputSDT" class="col-sm-2 control-label">Số Điện Thoại</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{ $user->sodienthoai }}" class="form-control" id="inputSDT"
                               name="sodienthoai" placeholder="Số Điện Thoại">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputCMND" class="col-sm-2 control-label">CMND</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{ $user->socmnd }}" class="form-control" id="inputCMND" name="socmnd"
                               placeholder="CMND">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Cập Nhật</button>
                    </div>
                </div>
            </form>
        </div>
        <div style="clear: both"></div>
    </div>
@endsection
@section("js")
@endsection
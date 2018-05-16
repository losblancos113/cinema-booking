  @extends('admin.layout.index')
  @section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa kế hoạch chiếu
                            <small>{{$show->phim->tenphim}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    	
                        <form action="admin/show/fixshow/{{$show->makehoachchieu}}" method="POST">
                        	<input type ="hidden" name="_token" value="{{csrf_token()}}"/>
                            
                            <div class="form-group">
                                <label>Phim</label>
                                <select class="form-control" name="movie" id="movie">
                                @foreach($movie as $m)
                                    <option value="{{$m->maphim}}">{{$m->tenphim}}</option>
                                    @endforeach
                                </select>
                            </div>
                             <div class="form-group">
                                <label>Phòng</label>
                                <select class="form-control" name="room" id="room">
                                @foreach($room as $r)
                                    <option value="{{$r->maphong}}">{{$r->maphong}}</option>
                                @endforeach
                                </select>
                            </div>
                            
                            
                           <div class="form-group">
                                <label>Ngày chiếu (ví dụ 2018-06-02 ngày 2 tháng 6 năm 2018)</label>
                                <input class="form-control" name="dateshow" value="{{$show->ngaychieu}}" placeholder="Nhập ngày chiếu" />
                            </div>
                             <div class="form-group">
                                <label>Giờ bắt đầu ( ví dụ 23:19:33 23 giờ 19 phút 33 giây)</label>
                                <input class="form-control" name="timeshow" value="{{$show->giobatdau}}" placeholder="Nhập giờ chiếu" />
                            </div>
                            <div class="form-group">
                                <label>Giá vé  ( ví dụ 70000) </label>
                                <input class="form-control" name="amount" value="{{$show->giave}}" placeholder="Nhập giá vé" />
                            </div>
                            
                            <button type="submit" class="btn btn-default">Sửa kế hoạch chiếu</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection
@section('script')


@endsection
  @extends('admin.layout.index')
  @section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Phim
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    	
                        <form action="admin/movie/fixmovie/{{$movie->maphim}}" method="POST">
                        	<input type ="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Hãng phim</label>
                                <select class="form-control" name="filmstudio" id="filmstudio">
                        
                                @foreach($filmstudio as $f)
                                    <option value="{{$f->mahangphim}}">{{$f->tenhangphim}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Loại phim</label>
                                <select class="form-control" name="movietype" id="movietype">
                                
                                @foreach($movietype as $m)
                                    <option value="{{$m->maloaiphim}}">{{$m->tenloaiphim}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên phim</label>
                                <input class="form-control" name="moviename" value="{{$movie->tenphim}}" placeholder="Nhập tên phim" />
                            </div>
                            <div class="form-group">
                                <label>Thời lượng</label>
                                <input class="form-control" name="time" value="{{$movie->thoiluong}}" placeholder="Nhập thời lượng" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả phim</label>
                                <input class="form-control" name="describe" value="{{$movie->motaphim}}" placeholder="Nhập mô tả phim" />
                            </div>
                            <div class="form-group">
                                <label>Dàn diễn viên</label>
                                <input class="form-control" name="actor" value="{{$movie->dandienvien}}" placeholder="Nhập dàn diễn viên" />
                            </div>
                            <div class="form-group">
                                <label>Ngày khởi chiếu ( ví dụ 2018-04-09 ngày 9 tháng 4 năm 2018 )</label>
                                <input class="form-control" name="datestart" value="{{$movie->ngaykhoichieu}}" placeholder="Nhập ngày khởi chiếu" />
                            </div>
                            <div class="form-group">
                                <label>ảnh phim</label>
                                <input class="form-control" name="moviepic" value="{{$movie->anhphim}}" placeholder="Nhập ảnh phim" />
                            </div>
                            <div class="form-group">
                                <label>Đạo diễn</label>
                                <input class="form-control" name="director" value="{{$movie->daodien}}"placeholder="Nhập đạo diễn phim" />
                            </div>
                            <div class="form-group">
                                <label>Trailer</label>
                                <input class="form-control" name="trailer" value="{{$movie->trailer}}" placeholder="Nhập trailer phim" />
                            </div>
                             <div class="form-group">
                                <label>Trạng thái</label>
                                <select class="form-control"  name="status" id="status">
                                    <option value="1">Đang chiếu</option>
                                    
                                      <option value="2">Sắp chiếu</option>
                               
                                </select>
                            </div>
                            
                            
                            <button type="submit" class="btn btn-default">Sửa rạp</button>
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
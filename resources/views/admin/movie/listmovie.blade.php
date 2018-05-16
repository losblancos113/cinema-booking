@extends('admin.layout.index')
@section('content')

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Phim
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <form action ="admin/movie/searchmovie" method="post" class="navbar-form navbar-left" role="search">
 <input type="hidden" name="_token" value="{{csrf_token()}}"/>
<div class ="form-group">
<input type ="text" name ="key" class="form-control" placeholder="Nhập tên hoặc mã rạp" width="">
</div>
<button type ="submit" class ="btn btn-default"> Tìm </button>
</form>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr align="center">
                                <th>Mã phim</th>
                          
                                <th>Hãng phim</th>
                                      <th>Loại phim</th>
                                <th>Tên phim</th>
                            <th>Thời lượng</th>
                             <th>Mô tả phim</th>
                          
                                <th>Dàn diễn viên</th>
                                      <th>Ngày khởi chiếu</th>
                                <th>ảnh phim</th>
                            <th>Đạo diễn </th>
                               <th>Trailer</th>
                            <th>Trạng thái </th>
                                <th>Xóa</th>
                                <th>Sửa</th>

                            </tr>
                        </thead>
                        <tbody>
                        	 @foreach($movie as $m )
                            <tr class="odd gradeX" align="center">
                                <td>{{$m->maphim}}</td>
                                <td>{{$m->hangphim->tenhangphim}}</td>
                                <td>{{$m->loaiphim->tenloaiphim}}</td>
                                 <td>{{$m->tenphim}}</td>
                                  <td>{{$m->thoiluong}}</td>
                                   <td>{{$m->motaphim}}</td>
                                    <td>{{$m->dandienvien}}</td>
                                     <td>{{$m->ngaykhoichieu}}</td>
                                     <td>{{$m->anhphim}}</td>
                                     <td>{{$m->daodien}}</td>
                                     <td>{{$m->trailer}}</td>


                                <td>{{$m->trangthai}}</td>
                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/movie/deletemovie/{{$m->maphim}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/movie/fixmovie/{{$m->maphim}}">Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection
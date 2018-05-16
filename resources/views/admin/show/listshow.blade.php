@extends('admin.layout.index')
@section('content')

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Kế hoạch chiếu
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <form action ="admin/show/searchshow" method="post" class="navbar-form navbar-left" role="search">
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
                                <th>Mã kế hoạch chiếu</th>
                          
                                <th>Phim</th>
                                      <th>Phòng</th>
                                <th>Ngày chiếu</th>
                            <th>Giờ bắt đầu </th>
                             <th>Giá vé </th>
                                <th>Xóa</th>
                                <th>Sửa</th>

                            </tr>
                        </thead>
                        <tbody>
                        	 @foreach($show as $s )
                            <tr class="odd gradeX" align="center">
                                <td>{{$s->makehoachchieu}}</td>
                                <td>{{$s->phim->tenphim}}</td>
                                <td>{{$s->phong->tenphong}}</td>
                                <td>{{$s->ngaychieu}}</td>
                                  <td>{{$s->giobatdau}}</td>
                                    <td>{{$s->giave}}</td>
                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/show/deleteshow/{{$s->makehoachchieu}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/show/fixshow/{{$s->makehoachchieu}}">Sửa</a></td>
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
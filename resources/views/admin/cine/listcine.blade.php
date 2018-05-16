@extends('admin.layout.index')
@section('content')

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Rạp
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <form action ="admin/cine/searchcine" method="post" class="navbar-form navbar-left" role="search">
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
                                <th>Mã rạp</th>
                          
                                <th>Tên rạp</th>
                                      <th>Quận huyện</th>
                                <th>Địa chỉ rạp</th>
                            <th>Quản lý phòng </th>
                                <th>Xóa</th>
                                <th>Sửa</th>

                            </tr>
                        </thead>
                        <tbody>
                        	 @foreach($cine as $c )
                            <tr class="odd gradeX" align="center">
                                <td>{{$c->marap}}</td>
                                <td>{{$c->tenrap}}</td>
                                <td>{{$c->quanhuyen->tenquanhuyen}}</td>


                                <td>{{$c->diachirap}}</td>
                               <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/room/listroom/{{$c->marap}}"> Quản lý phòng</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/cine/deletecine/{{$c->marap}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/cine/fixcine/{{$c->marap}}">Sửa</a></td>
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
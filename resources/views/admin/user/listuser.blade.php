@extends('admin.layout.index')
@section('content')

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Người dùng
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <form action ="admin/user/searchuser" method="post" class="navbar-form navbar-left" role="search">
 <input type="hidden" name="_token" value="{{csrf_token()}}"/>
<div class ="form-group">
<input type ="text" name ="key" class="form-control" placeholder="Nhập tên đăng nhập hoặc mã user" width="">
</div>
<button type ="submit" class ="btn btn-default"> Tìm </button>
</form>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                          
                                <th>Tên</th>
                                      <th>Email</th>
                                <th>Địa chỉ</th>
                            <th>Số điện thoại </th>
                                <th>Số cmnd </th>
                                 <th>Quyền</th>
                                <th>Xóa</th>
                                <th>Sửa</th>

                            </tr>
                        </thead>
                        <tbody>
                        	 @foreach($user as $u )
                            <tr class="odd gradeX" align="center">
                                <td>{{$u->id}}</td>

                                <td>{{$u->name}}</td>
                                <td>{{$u->email}}</td>
                                <td>{{$u->diachi}}</td>
                                <td>{{$u->sodienthoai}}</td>
                                <td>{{$u->socmnd}}</td>
                                <td>
                                    @if($u->quyen ==1)
                                                    <span style="color:#d35400;">Nhân viên</span>
                                                @elseif ($u->quyen ==2)
                                                    <span style="color:#d35400;">Quản trị viên</span>
                                                @else
                                                    <span style="color:#27ae60;">Khách</span>
                                                @endif
                                </td>


                            
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/deleteuser/{{$u->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/fixuser/{{$u->id}}">Sửa quyền </a></td>
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
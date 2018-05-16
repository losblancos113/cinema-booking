@extends('admin.layout.index')
@section('content')

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản lý phòng </br>
                            <small>Rạp : {{$room[0]->rap->tenrap}} </small> </br>
                            <small>Địa chỉ :{{$room[0]->rap->diachirap}} </small>
                        </h1>
                    </div>
                   
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="">
                        <thead>
                            <tr align="center">
                                <th>Mã phòng</th>
                                <th>Tên phòng</th>
                                <th>Số lượng ghế</th>
                               


                                
                                                            <th>Quản lý ghế</th>

                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                        	 @foreach($room as $r )
                            <tr class="odd gradeX" align="center">
                                <td>{{$r->maphong}}</td>
                                <td>{{$r->tenphong}}</td>
                                <td>{{$r->soluongghe}}</td>
                                                      

                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/seat/listseat/{{$r->maphong}}"> Quản lý ghế</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/room/deleteroom/{{$r->maphong}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/room/fixroom/{{$r->maphong}}">Sửa</a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  <a  href="admin/room/addroom/{{$r->marap}}" class ="btn btn-default" > Thêm phòng </a>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection
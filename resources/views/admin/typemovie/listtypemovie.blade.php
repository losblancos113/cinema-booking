@extends('admin.layout.index')
@section('content')

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Phim
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr align="center">
                                <th>Mã loại phim</th>
                          
                                <th>Tên loại phim</th>
                                    
                                <th>Xóa</th>
                                <th>Sửa</th>

                            </tr>
                        </thead>
                        <tbody>
                        	 @foreach($typemovie as $t )
                            <tr class="odd gradeX" align="center">
                                <td>{{$t->maloaiphim}}</td>
                                <td>{{$t->tenloaiphim}}</td>
                                


                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/typemovie/deletetypemovie/{{$t->maloaiphim}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/typemovie/fixtypemovie/{{$t->maloaiphim}}">Sửa</a></td>
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
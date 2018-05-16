@extends('admin.layout.index')
@section('content')

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hãng phim
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr align="center">
                                <th>Mã hãng phim</th>
                          
                                <th>Tên hãng phim</th>
                                    
                                <th>Xóa</th>
                                <th>Sửa</th>

                            </tr>
                        </thead>
                        <tbody>
                        	 @foreach($studio as $s )
                            <tr class="odd gradeX" align="center">
                                <td>{{$s->mahangphim}}</td>
                                <td>{{$s->tenhangphim}}</td>
                                


                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/studio/deletestudio/{{$s->mahangphim}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/studio/fixstudio/{{$s->mahangphim}}">Sửa</a></td>
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
@extends('admin.layout.index')
@section('content')

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chi tiết giao dịch
                            <small>Danh sách</small>
                        </h1>
                    </div>
                   
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr align="center">
                                <th>Code giao dịch</th>
                          
                                <th>Mã ghế</th>
                                      
                            
                              

                            </tr>
                        </thead>
                        <tbody>
                        	 @foreach($detaildeal as $d )
                            <tr class="odd gradeX" align="center">
                                <td>{{$d->codegiaodich}}</td>
                                <td>{{$d->maghe}}</td>
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
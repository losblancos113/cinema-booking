@extends('admin.layout.index')
@section('content')

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Giao dịch
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <form action ="admin/deal/searchdeal" method="post" class="navbar-form navbar-left" role="search">
 <input type="hidden" name="_token" value="{{csrf_token()}}"/>
<div class ="form-group">
<input type ="text" name ="key" class="form-control" placeholder="Nhập " width="">
</div>
<button type ="submit" class ="btn btn-default"> Tìm giao dịch </button>
</form>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr align="center">
                                <th>Mã giao dịch</th>
                          
                                <th>Mã kế hoạch</th>
                                      <th>Mã khách hàng</th>
                                <th>Code Giao dịch</th>
                                <th>Trạng thái</th>
                                <th>Chi tiết giao dịch</th>
                            
                              

                            </tr>
                        </thead>
                        <tbody>
                        	 @foreach($deal as $d )
                            <tr class="odd gradeX" align="center">
                                <td>{{$d->magd}}</td>
                                <td>{{$d->makehoach}}</td>
                                <td>{{$d->makhachhang}}</td>


                                <td>{{$d->codegiaodich}}</td>
                                <td>
                                                @if($d->trangthai ==0)
                                                    <span style="color:#d35400;">Chưa thanh toán</span>
                                                @else
                                                    <span style="color:#27ae60;">Đã thanh toán</span>
                                                @endif
                                            </td>
                                  <td><a href="admin/deal/detaildeal/{{$d->codegiaodich}}">Chi tiết giao dịch</a></td>

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
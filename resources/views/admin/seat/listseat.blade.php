@extends('admin.layout.index')
@section('content')

 <div id="page-wrapper">
     
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh sách ghế</br>
                            <small>Phòng : {{$seat[0]->phong->tenphong}}</small></br>
                                 <small>Rap : {{$seat[0]->phong->rap->tenrap}}</small>
                        </h1>
                    </div>
                   
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="ghe" name ="ghe">
                        <thead>
                            <tr align="center">
                                <th>Mã ghế</th>
                                <th>Tên ghế</th>
                           
                           
                                   <th>Hàng</th>
                                   <th>Số ghế</th>
                                   <th>Trạng thái</th>
                                 
                                
                           
                                
                            </tr>
                        </thead>
                        <tbody>
                        	 @foreach($seat as $s )
                            <tr class="odd gradeX" align="center">
                                <td>{{$s->maghe}}</td>
                                <td>{{$s->tenghe}}</td>
                           
                           
                                <td>{{$s->hang}}</td>
                                                                <td>{{$s->soghe}}</td>
                                                                <td>
                                                @if($s->trangthai ==0)
                                                    <span style="color:#d35400;">Chỗ trống</span>
                                                @else
                                                    <span style="color:#27ae60;">Chỗ đã đặt</span>
                                                @endif
                                            </td>


                               
                             
                               
                                
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                  
                              
                        <a href="admin/seat/resetseat/{{$s->maphong}}">Reset ghế</a>
                
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection

  @extends('admin.layout.index')
  @section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm phòng
                            <small>Rạp {{$cine->tenrap}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    	
                        <form action="admin/room/addroom" method="POST">
                        	<input type ="hidden" name="_token" value="{{csrf_token()}}"/>
                             <div class="form-group">
                                <label>Rạp</label>
                                <select class="form-control" name="cine" id="cine">
                                 
                                    <option value="{{$cine->marap}}">{{$cine->tenrap}}</option>
                             
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên phòng</label>
                                <input class="form-control" name="nameroom" placeholder="Nhập tên phòng" />
                            </div>
                            <div class="form-group">
                                <label>Số hàng</label>
                                <input type="number" class="form-control" name="number_row" placeholder="Nhập số hàng ghế" />
                            </div>
                             <div class="form-group">
                                <label>Số ghế mỗi hàng</label>
                                <input type="number" class="form-control" name="number_seat_per_row" placeholder="Nhập số lượng ghế mỗi hàng" />
                            </div>
                            
                            
                            
                            <button type="submit" class="btn btn-default">Thêm phòng</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection

  @extends('admin.layout.index')
  @section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Người dùng
                            <small>{{$user->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    	
                        <form action="admin/user/fixuser/{{$user->id}}" method="POST">
                        	<input type ="hidden" name="_token" value="{{csrf_token()}}"/>
                            
                      
                    
                            <div class="form-group">
                                <label>id</label>
                                <input class="form-control" value="{{$user->id}}" readonly=""  name="id"  />
                            </div>
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" value="{{$user->name}}" readonly="" name="name"  />
                            </div>
                             <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" value="{{$user->email}}" readonly="" name="email"  />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" value="{{$user->diachi}}" readonly="" name="diachi"  />
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" value="{{$user->sodienthoai}}" readonly="" name="sodienthoai"  />
                            </div>
                            <div class="form-group">
                                <label>Số cmnd</label>
                                <input class="form-control" value="{{$user->socmnd}}" readonly="" name="socmnd"  />
                            </div>
                              <div class="form-group">
                                <label>Quyền</label>
                                <select class="form-control"  name="quyen" id="quyen">
                                    <option value="0">Khách</option>
                                     <option value="1">Nhân viên</option>
                                      <option value="2">Quản trị</option>
                               
                                </select>
                            </div>
                            
                            
                            
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection
@section('script')


@endsection
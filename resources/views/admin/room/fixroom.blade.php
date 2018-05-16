  @extends('admin.layout.index')
  @section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Phòng
                            <small>{{$room->tenphong}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    	
                        <form action="admin/room/fixroom/{{$room->maphong}}" method="POST">
                        	<input type ="hidden" name="_token" value="{{csrf_token()}}"/>
                            
                            <div class="form-group">
                                <label>Thành phố</label>
                                <select class="form-control" name="city" id="city">
                                    <option value="">----------------------</option>
                            @foreach($city as $c)
                                    <option value="{{$c->mathanhpho}}">{{$c->tenthanhpho}}</option>
                                    @endforeach
                                </select>
                            </div>
                             <div class="form-group">
                                <label>Quận huyện</label>

                                <select class="form-control" name="district" id="district">
                                    <option value="">----------------------</option>
                                 @foreach($district as $d)
                                    <option value="{{$d->maquanhuyen}}">{{$d->tenquanhuyen}}</option>
                                @endforeach
                                </select>
                            </div>
                             <div class="form-group">
                                <label>Rạp</label>
                                <select class="form-control" name="cine" id="cine">
                                    <option value="">----------------------</option>
                                 @foreach($cine as $c)
                                 
                                    <option value="{{$c->marap}}">{{$c->tenrap}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên phòng</label>
                                <input class="form-control" value="{{$room->tenphong}}" name="nameroom" placeholder="Nhập tên phòng" />
                            </div>
                             <div class="form-group">
                                <label>Số lượng ghế</label>
                                <input class="form-control" name="numberseat" placeholder="Nhập số lượng ghế" />
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
<script>
    $(document).ready(function(){

        $("#city").change(function(){

            var idcity = $(this).val();
            $.get("admin/ajax/district/"+idcity,function(data){

            $("#district").html(data);
});

});


    });
    $(document).ready(function(){

        $("#district").change(function(){

            var iddistrict = $(this).val();
            $.get("admin/ajax/cine/"+iddistrict,function(data){

            $("#cine").html(data);
});

});


    });
</script>


@endsection
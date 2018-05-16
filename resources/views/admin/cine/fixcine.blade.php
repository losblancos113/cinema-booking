@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa rạp
                            <small>{{$cine->tenrap}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/cine/fixcine/{{$cine->marap}}" method="POST">
                            <input type ="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Tên rạp</label>
                                <input class="form-control" name="cinename" placeholder="Nhập tên rạp" value="{{$cine->tenrap}}" />
                            </div>
                            <div class="form-group">
                                <label>Thành phố</label>
                                <select class="form-control" name="city" id="city">
                                    <option value="">---------------</option>
                                @foreach($city as $c)
                                    

                                    <option value="{{$c->mathanhpho}}">{{$c->tenthanhpho}}</option>
                                    @endforeach
                                </select>
                            </div>
                             <div class="form-group">
                                <label>Quận huyện</label>
                                <select class="form-control" name="district" id="district">
                                @foreach($district as $d)
                                    <option value="{{$d->maquanhuyen}}">{{$d->tenquanhuyen}}</option>
                                @endforeach
                                </select>
                            </div>
                            
                            
                            <div class="form-group">
                                <label>Địa chỉ rạp</label>
                                <textarea class="form-control" rows="3" name="address"  ></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Sửa </button>
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
</script>


@endsection
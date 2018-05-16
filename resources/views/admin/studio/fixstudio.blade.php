  @extends('admin.layout.index')
  @section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa hãng phim
                            <small></small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    	
                        <form action="admin/studio/fixstudio/{{$studio->mahangphim}}" method="POST">
                        	<input type ="hidden" name="_token" value="{{csrf_token()}}"/>
                            
                            <div class="form-group">
                                <label>Tên hãng phim</label>
                                <input class="form-control" name="namestudio" value="{{$studio->tenhangphim}}" placeholder="Nhập tên hãng phim" />
                            </div>
                             
                            
                            
                            
                            <button type="submit" class="btn btn-default">Sửa hãng phim</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection

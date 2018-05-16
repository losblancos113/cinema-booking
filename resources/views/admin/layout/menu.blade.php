<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin/">Admin - abcphim</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a ><i class="fa fa-user fa-fw"></i>{{ session()->get('user')->name }}</a>
                        </li>
                        <li><a href="/user/info"><i class="fa fa-gear fa-fw"></i> Cá nhân</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="admin/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý rạp<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/cine/listcine">Danh sách rạp</a>
                                </li>
                                <li>
                                    <a href="admin/cine/addcine">Thêm rạp</a>
                                </li>
                                

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                         
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Quản lý người dùng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/user/listuser">Danh sách người dùng</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                           <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý phim<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/movie/listmovie">Danh sách phim</a>
                                </li>
                                <li>
                                    <a href="admin/movie/addmovie">Thêm phim</a>
                                </li>
                                

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý loại phim<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/typemovie/listtypemovie">Danh sách loại phim</a>
                                </li>
                                <li>
                                    <a href="admin/typemovie/addtypemovie">Thêm loại phim</a>
                                </li>
                                

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý hãng phim<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/studio/liststudio">Danh sách hãng phim</a>
                                </li>
                                <li>
                                    <a href="admin/studio/addstudio">Thêm hãng phim</a>
                                </li>
                                

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý kế hoạch chiếu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/show/listshow">Danh sách kế hoạch chiếu</a>
                                </li>
                                <li>
                                    <a href="admin/show/addshow">Thêm kế hoạch chiếu</a>
                                </li>
                                

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý giao dịch<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/deal/listdeal">Danh sách giao dịch</a>
                                </li>
                               
                                

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin/bookticket/cine"> Đặt vé</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
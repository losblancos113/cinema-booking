@include('admin.layout.header')


<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('admin.layout.menu')

        <!-- Page Content -->
      @yield('content')
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
@include('admin.layout.footer')

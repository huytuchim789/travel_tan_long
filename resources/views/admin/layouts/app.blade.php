<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.head')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('admin.layouts.header')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            @section('content-header')
            @show
            <!-- /.content-header -->

            <!-- Main content -->
            @section('main-content')
            @show
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        @include('admin.layouts.footer')

    </div>
    <!-- ./wrapper -->

    <!-- Script -->
    @include('admin.layouts.script')

</body>
</html>

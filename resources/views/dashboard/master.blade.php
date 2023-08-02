<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('dash/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('dash/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('dash/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dash/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('dash/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('dash/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('dash/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('dash/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        <!-- Navbar -->
        @include('dashboard.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('dashboard.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('dashboard.breadcrumbs')
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Main row -->
                    @yield('content')
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('dash/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('dash/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="{{ asset('dash/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('dash/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('dash/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('dash/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('dash/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('dash/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('dash/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('dash/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('dash/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('dash/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dash/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dash/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dash/dist/js/pages/dashboard.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Prov
            $.ajax({
                url: "https://api.binderbyte.com/wilayah/provinsi?api_key=53e97f612cd3597e4f43f27577fe64245808f0bc9d3f484aff47c6046d7b02f3",
                method: 'GET',
                success: function(response) {
                    response.value.forEach(element => {
                        $("#sel_prov").append("<option value='" + element.id + "'>" + element.name + "</option>");
                    });
                }
            });

            // Kab/Kota
            $('#sel_prov').change(function () {
                var prov_id = $(this).val();

                $('#sel_kab').empty();
                $('#sel_kab').prop('disabled', false);

                $.ajax({
                    url: "https://api.binderbyte.com/wilayah/kabupaten?api_key=53e97f612cd3597e4f43f27577fe64245808f0bc9d3f484aff47c6046d7b02f3&id_provinsi=" + prov_id,
                    method: 'GET',
                    success: function(response) {
                        $("#sel_kab").append("<option selected class='text-center'>-- Pilih Kabupaten/Kota --</option>");
                        response.value.forEach(element => {
                            $("#sel_kab").append("<option value='" + element.id + "'>" + element.name + "</option>");
                        });
                    }
                });
            });

            // Kec
            $('#sel_kab').change(function () {
                var kab_id = $(this).val();

                $('#sel_kec').empty();
                $('#sel_kec').prop('disabled', false);

                $.ajax({
                    url: "https://api.binderbyte.com/wilayah/kecamatan?api_key=53e97f612cd3597e4f43f27577fe64245808f0bc9d3f484aff47c6046d7b02f3&id_kabupaten=" + kab_id,
                    method: 'GET',
                    success: function(response) {
                        $("#sel_kec").append("<option selected class='text-center'>-- Pilih Kecamatan --</option>");
                        response.value.forEach(element => {
                            console.log(element.id);
                            $("#sel_kec").append("<option value='" + element.id + "'>" + element.name + "</option>");
                        });
                    }
                });
            });

            // Kel
            $('#sel_kec').change(function () {
                var kec_id = $(this).val();

                $('#sel_kel').empty();
                $('#sel_kel').prop('disabled', false);

                $.ajax({
                    url: "https://api.binderbyte.com/wilayah/kelurahan?api_key=53e97f612cd3597e4f43f27577fe64245808f0bc9d3f484aff47c6046d7b02f3&id_kecamatan=" + kec_id,
                    method: 'GET',
                    success: function(response) {
                        $("#sel_kel").append("<option selected class='text-center'>-- Pilih Kelurahan --</option>");
                        response.value.forEach(element => {
                            $("#sel_kel").append("<option value='" + element.id + "'>" + element.name + "</option>");
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>

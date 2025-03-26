<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="{{asset('admin/plugins/bs-stepper/css/bs-stepper.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('admin/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.min.css')}}">
    <script src="{{asset("tinymce/tinymce.min.js")}}" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#tiny',
        plugins: [
        'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
        'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
        'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
        ],
        toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify |' +
        'bullist numlist checklist outdent indent | removeformat | code table help'
  })
</script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    @include('layouts.admin_nav')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layouts.admin_sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2023 <a href="https://m4webmetrix.tech">M4webmetrix</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
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
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>

<!-- DataTables  & Plugins -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.minasset.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{--<script src="{{asset('admin/dist/js/demo.js')}}"></script>--}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="{{asset('admin/dist/js/pages/dashboard.js')}}"></script>--}}
<!-- adsence 1 -->
<script type="text/javascript">  atOptions = {   'key' : 'b89299cc542e36bf5d734c0053c35ec8',   'format' : 'iframe',   'height' : 60,   'width' : 468,   'params' : {}  }; </script> <script type="text/javascript" src="//www.highperformanceformat.com/b89299cc542e36bf5d734c0053c35ec8/invoke.js"></script>
<!-- adsence 2 -->
<script type="text/javascript">  atOptions = {   'key' : '053966c4568854eaaf58e5b5dc1e2563',   'format' : 'iframe',   'height' : 300,   'width' : 160,   'params' : {}  }; </script> <script type="text/javascript" src="//www.highperformanceformat.com/053966c4568854eaaf58e5b5dc1e2563/invoke.js"></script>
<!-- adsence 3 -->
<script type="text/javascript">  atOptions = {   'key' : 'e8d0deef1b18720055b87279d3088e7a',   'format' : 'iframe',   'height' : 600,   'width' : 160,   'params' : {}  }; </script> <script type="text/javascript" src="//www.highperformanceformat.com/e8d0deef1b18720055b87279d3088e7a/invoke.js"></script> 
<!-- for monetag adsence -->
<script src="https://kulroakonsu.net/88/tag.min.js" data-zone="138936" async data-cfasync="false"></script>

<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<script>
    $(function () {

        // Summernote
        $('#summernote').summernote()


        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    })
</script>
{{--Script for admin to reply to comments--}}
<script>
    $(document).ready(function () {

        $('.reply-btn').click(function () {
            let commentId = $(this).data('comment');
            let replies = $(this).data('replies');

            $('#commentId').val(commentId);
            $('#repliesList').empty();

            if (replies.length > 0) {
                $.each(replies, function (index, reply) {
                    $('#repliesList').append(`<li class="list-group-item">${reply.comment} <small class="text-muted">(${reply.created_at})</small></li>`);
                });
            } else {
                $('#repliesList').append('<li class="list-group-item text-muted">No replies yet.</li>');
            }

            $('#replyModal').modal('show');
        });

        $('#replyForm').submit(function (e) {
            e.preventDefault();

            let commentId = $('#commentId').val();
            let replyText = $('#replyText').val();

            $.ajax({
                url: '{{ route('admin.comments.update', ['comment' => '__ID__']) }}'.replace('__ID__', commentId),
                type: 'PUT',
                data: {
                    _token: '{{ csrf_token() }}',
                    comment_id: commentId,
                    reply: replyText
                },
                success: function (response) {
                    if (response.success) {
                        $('#repliesList').append(`<li class="list-group-item">${replyText} <small class="text-muted">(Just now)</small></li>`);
                        $('#replyText').val('');
                    }
                },
                error: function () {
                    alert('Something went wrong. Please try again.');
                }
            });
        });
    });
</script>
</body>
</html>

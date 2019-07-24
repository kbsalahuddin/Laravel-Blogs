<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <!-- Core CSS - Include with every page -->
    <link href="{{asset('/')}}/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="{{asset('/')}}/admin/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="{{asset('/')}}/admin/css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{asset('/')}}/admin/css/sb-admin.css" rel="stylesheet">

    <!--ckeditor-->
    <script src="{{asset('/')}}/admin/ckeditor/ckeditor.js"></script>
    <script src="{{asset('/')}}admin/ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="{{asset('/')}}admin/ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="{{asset('/')}}admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">    

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/dashboard')}}">Admin Dashboard</a>
            </div>
            <!-- /.navbar-header -->

            @include('admin.home.admin-navbar-top')
            <!-- /.navbar-top-links -->

            @include('admin.home.admin-navbar-side')
            <!-- /.navbar-static-side -->
        </nav>
        <div>
            @yield('main-body')
         </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="{{asset('/')}}/admin/js/jquery-1.10.2.js"></script>
    <script src="{{asset('/')}}/admin/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="{{asset('/')}}/admin/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="{{asset('/')}}/admin/js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="{{asset('/')}}/admin/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="{{asset('/')}}/admin/js/demo/dashboard-demo.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>
    
    <!--category name modal-->
    <script>
        $('#editModal').on('show.bs.modal', function (event) {

          var button = $(event.relatedTarget) 
          
          var name = button.data('name')
          var id = button.data('id')
          var modal = $(this)

          
          modal.find('.modal-body #name').val(name);
          modal.find('.modal-body #id').val(id);
          
        });
    </script>
    <script type="text/javascript">
      function form_submit() {
        document.getElementById("okay").submit();
       }    
    </script>
    <!--category name modal ends-->  
    <!--ckeditor-->
        <script>
            initSample();
        </script>

</body>

</html>

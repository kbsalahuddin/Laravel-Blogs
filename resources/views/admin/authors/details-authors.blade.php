@extends('admin.master')
@section('main-body')

    <div id="wrapper">

        

        <div id="page-wrapper">
            <div class="row">
                <br/>
                <br/>
                <div class="col-lg-12">
                    <h4 class="page-header">Authors Details</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Author's Details
                        </div>
                        <!-- /.panel-heading -->
                        <h3 class="text text-success">{{ Session::get('message') }}</h3>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                        <tr class="odd gradeX">
                                            <th style="text-align:center">Author. ID</th>
                                            <td align="center">{{$detailById->authorId}}</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th style="text-align:center">Author Name</th>
                                            <td align="center">{{$detailById->authorName}}</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th style="text-align:center">Author Education</th>
                                            <td align="center">{{$detailById->authorEdu}}</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th style="text-align:center">Author Award</th>
                                            <td align="center">{{$detailById->authorAward}}</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th style="text-align:center">Author Age</th>
                                            <td align="center">{{$detailById->authorAge}}</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th style="text-align:center">Author Image</th>
                                            <td align="center"><img src="{{asset($detailById->authorImage)}}"></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th style="text-align:center">Author Email</th>
                                            <td align="center">{{$detailById->authorEmail}}</td>
                                        </tr>
                                            
                                        </tr>
                                    
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->




</body>

</html>

@endsection
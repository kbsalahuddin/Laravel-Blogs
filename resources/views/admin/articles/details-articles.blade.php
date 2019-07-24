@extends('admin.master')
@section('main-body')

    <div id="wrapper">

        

        <div id="page-wrapper">
            <div class="row">
                <br/>
                <br/>
                <div class="col-lg-12">
                    <h4 class="page-header">Article Details</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Article's Details
                        </div>
                        <!-- /.panel-heading -->
                        <h3 class="text text-success">{{ Session::get('message') }}</h3>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    	<tr class="odd gradeX">
                                            <th style="text-align:center">Category Name</th>
                                            <td align="center">{{$detailById->categoryName}}</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th style="text-align:center">Author Name</th>
                                            <td align="center">{{$detailById->authorName}}</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th style="text-align:center">Article. ID</th>
                                            <td align="center">{{$detailById->articleId}}</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th style="text-align:center">Article Name</th>
                                            <td align="center">{{$detailById->articleName}}</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th style="text-align:center">Article Sub-head</th>
                                            <td align="center">{{$detailById->articleSubHead}}</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th style="text-align:center">Article Body</th>
                                            <td align="center">{{$detailById->articleBody}}</td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <th style="text-align:center">Article Image</th>
                                            <td align="center"><img src="{{asset($detailById->articleImage)}}" height="100px" width="200px"></td>
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
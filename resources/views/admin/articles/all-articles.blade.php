@extends('admin.master')
@section('main-body')

    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <br/>
                <br/>
                <div class="col-lg-12">
                    <h4 class="page-header">All Articles</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Articles
                        </div>
                        <!-- /.panel-heading -->
                        <h3 class="text text-success">{{ Session::get('message') }}</h3>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">Article. ID</th>
                                            <th style="text-align:center">Catgory</th>
                                            <th style="text-align:center">Author</th>
                                            <th style="text-align:center">Name</th>
                                            <th style="text-align:center">Image</th>
                                            <th style="text-align:center">Status</th>
                                            <th style="text-align:center">Actions</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($articles as $artc)
                                        <tr class="odd gradeX">
                                            <td align="center">{{$artc->articleId}}</td>
                                            <td align="center">{{$artc->categoryName}}</td>
                                            <td align="center">{{$artc->authorName}}</td>
                                            <td align="center">{{$artc->articleName}}</td>
                                            
                                            <td align="center"><img src="{{asset($artc->articleImage)}}" style="height: 100px; width: 200px;" /></td>

                                            
                                            
                                            <td align="center">
                                            	@if ($artc->articleStatus=='published')
													<span class="label label-success">{{$artc->articleStatus}}</span>
												@else
													<span class="label label-danger">{{$artc->articleStatus}}</span>
												@endif
                                            </td>

                                            <td align="center">
                                            	@if($artc->articleStatus=='published')
													<a class="btn btn-danger" title="change status" href="{{url('/unpublished-articles/'. $artc->articleId)}}">
														<i class="fa fa-thumbs-down"></i>  
													</a>
												@else
													<a class="btn btn-success" title="change status" href="{{url('/published-articles/'. $artc->articleId)}}">
														<i class="fa fa-thumbs-up"> </i> 
													</a>
												@endif

                                                <!--edit-->
												<a class="btn btn-info" title="edit" href="{{url('/edit-articles/'. $artc->articleId)}}">
													<i class="fa fa-edit"></i>
												</a>
                                                <!--details-->
                                                <a class="btn btn-warning" title="details" href="{{url('/detail-articles/'. $artc->articleId)}}">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <!--delete-->
												<a class="btn btn-danger" title="delete" href="{{url('/delete-articles/'. $artc->articleId)}}" onclick="return confirm('Are you sure you want to delete this row of records?');" >
													<i class="fa fa-times-circle"></i>
												</a>
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                        
                                    </tbody>
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
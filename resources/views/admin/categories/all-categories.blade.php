@extends('admin.master')
@section('main-body')

    <div id="wrapper">

        

        <div id="page-wrapper">
            <div class="row">
                <br/>
                <br/>
                <div class="col-lg-12">
                    <h4 class="page-header">Categories</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Categories
                        </div>
                        <!-- /.panel-heading -->
                        <h3 class="text text-success">{{ Session::get('message') }}</h3>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">Cat. ID</th>
                                            <th style="text-align:center">Name</th>
                                            <th style="text-align:center">Status</th>
                                            <th style="text-align:center">Actions</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($categories as $category)
                                        <tr class="odd gradeX">
                                            <td align="center">{{$category->categoryId}}</td>
                                            <td align="center">{{$category->categoryName}}</td>
                                            <td align="center">
                                            	@if ($category->categoryStatus=='published')
													<span class="label label-success">{{$category->categoryStatus}}</span>
												@else
													<span class="label label-danger">{{$category->categoryStatus}}</span>
												@endif
                                            </td>
                                            <td align="center">
                                            	@if($category->categoryStatus=='published')
													<a class="btn btn-danger" title="change status" href="{{url('/unpublished-categories/'. $category->categoryId)}}">
														<i class="fa fa-thumbs-down"></i>  
													</a>
												@else
													<a class="btn btn-success" title="change status" href="{{url('/published-categories/'. $category->categoryId)}}">
														<i class="fa fa-thumbs-up"> </i> 
													</a>
												@endif

                                                <!--edit-->
												<button class="btn btn-info" title="edit" data-name="{{$category->categoryName}}" data-id="{{$category->categoryId}}" data-toggle="modal" data-target="#editModal">
													<i class="fa fa-edit"></i>
												</button>

                                                <!--delete-->
												<a class="btn btn-danger" title="delete" href="{{url('/delete-categories/'. $category->categoryId)}}" onclick="return confirm('Are you sure you want to delete this row of records?');" >
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


<!--edit modal -->

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Edit Category Name</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
          <form id="okay" action="{{url('/update-categoryName')}}" method="POST">
              
              @csrf
    	      <div class="modal-body">
                <input type="hidden" id="id" name="id">
                <label>Edit Category Name</label>
                <input type="text" id="name" name="name" >
    	      </div>

    	      <div class="modal-footer">
    	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    	        <button onclick="form_submit()" type="button" class="btn btn-primary">Save changes</button>
    	      </div>
          </form>
	    </div>
	  </div>
	</div>

</body>

</html>

@endsection
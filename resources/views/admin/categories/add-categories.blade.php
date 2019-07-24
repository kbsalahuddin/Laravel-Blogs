@extends('admin.master')
@section('main-body')
<body>

    <div id="wrapper">

        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <br/>
                    <br/>
                    <h4 class="page-header">Add Category</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add New Category Form
                        </div>
                        <h3 class="text text-success">{{ Session::get('message') }}</h3>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{url('/save-categories')}}" method="post">
                                    	@csrf
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" type="text" name="categoryName" required="">
                                        </div>
                                        
                                        <label>Category Status</label>
                                        <div class="form-check">
											<input class="form-check-input" type="radio" name="categoryStatus" value="published">&nbsp;Published
                                        </div>  
                                        <div class="form-check">  
                                            <input class="form-check-input" type="radio" name="categoryStatus" value="unpublished">&nbsp;Unpublished
                                        </div><br/>
  										
  										<button class="btn btn-success" type="submit" name="btn" value="Submit">Add Category</button>
                                    </form>    
                                </div>

                            </div>
                            <!-- /.row  -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection
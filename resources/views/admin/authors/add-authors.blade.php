@extends('admin.master')
@section('main-body')
<body>

    <div id="wrapper">

        

        <div id="page-wrapper">
            <div class="row">
                <br/>
                <br/>
                <div class="col-lg-12">
                    <h4 class="page-header">Add Author Form</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add New Author Form
                        </div>
                        <h3 class="text text-success">{{ Session::get('message') }}</h3>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{url('/save-authors')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <label>Author Name</label>
                                            <input class="form-control" type="text" name="authorName" required=""/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Author Education</label>
                                            <textarea rows="3"  class="form-control" type="text" name="authorEdu" required=""></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Author Award</label>
                                            <textarea id="editor" rows="4" class="form-control" type="text" name="authorAward" required=""></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Author Age</label>
                                            <input class="form-control-static" type="number" name="authorAge" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Author Image</label>
                                            <input type="file" accept="image/*" name="authorImage" />
                                        </div>
                                        <div class="form-group">
                                            <label>Author Email</label>
                                            <input class="form-control" type="email" name="authorEmail" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Author Status&nbsp;</label>
                                                <br/>
                                                <input type="radio" name="authorStatus" value="active" checked/>Active&nbsp;&nbsp;
                                                <input type="radio" name="authorStatus" value="inactive"/>Inactive
                                            
                                            
                                        </div>
                                        
                                        
                                        <button type="submit" name="btn" class="btn btn-success">Submit</button>
                                        
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
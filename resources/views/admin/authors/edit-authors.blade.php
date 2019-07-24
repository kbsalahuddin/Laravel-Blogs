@extends('admin.master')
@section('main-body')
<body>

    <div id="wrapper">

        

        <div id="page-wrapper">
            <div class="row">
                <br/>
                <br/>
                <div class="col-lg-12">
                    <h4 class="page-header">Edit Author Form</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit New Author Form
                        </div>
                        <h3 class="text text-success">{{ Session::get('message') }}</h3>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{url('/update-authors')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="authorId" value="{{$editById->authorId}}" />
                                            <label>Author Name</label>
                                            <input class="form-control" type="text" name="authorName" value="{{$editById->authorName}}"/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Author Education</label>
                                            <textarea rows="3"  class="form-control" type="text" name="authorEdu" > {{$editById->authorEdu}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Author Award</label>
                                            <textarea  rows="3" class="form-control" type="text" name="authorAward" >{{$editById->authorAward}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Author Age</label>
                                            <input class="form-control-static" type="number" name="authorAge" value="{{$editById->authorAge}}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Author Image</label>
                                            <input type="file" accept="image/*" name="authorImage"/>
                                            <img src="{{asset($editById->authorImage)}}" alt="{{$editById->authorName}}" height="80px" width="60px" />
                                        </div>
                                        <div class="form-group">
                                            <label>Author Email</label>
                                            <input class="form-control" type="email" name="authorEmail" required=""  value="{{$editById->authorEmail}}"/>
                                        </div>
                                        <button type="submit" name="btn" class="btn btn-success">Update</button>
                                        
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
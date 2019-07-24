@extends('admin.master')
@section('main-body')
<body>

    <div id="wrapper">

        

        <div id="page-wrapper">
            <div class="row">
                <br/>
                <br/>
                <div class="col-lg-12">
                    <h4 class="page-header">Add Article Form</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add New Article Form
                        </div>
                        <h3 class="text text-success">{{ Session::get('message') }}</h3>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{url('/save-articles')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                        <div class="form-group">
                                            <label>Article Category</label>
                                            <select class="form-control" name="categoryId">
                                                
                                                <option>Select Category Name</option>
                                                
                                                @foreach($categories as $category)
                                                <option value="{{$category->categoryId}}">{{$category->categoryName}}</option>
                                                @endforeach

                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Article Author</label>
                                            <select class="form-control" name="authorId">
                                                
                                                <option>Select Author Name</option>
                                                
                                                @foreach($authors as $author)
                                                <option value="{{$author->authorId}}">{{$author->authorName}}</option>
                                                @endforeach
                                                
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Article Name</label>
                                            <input class="form-control" type="text" name="articleName" required=""/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Article Sub-heading</label>
                                            <textarea rows="3"  class="form-control" type="text" name="articleSubHead" required=""></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Article Body</label>
                                            <textarea id="editor" rows="4" class="form-control" type="text" name="articleBody" required=""></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Article Image</label>
                                            <input type="file" accept="image/*" name="articleImage"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Article Status&nbsp;</label>
                                                <br/>
                                                <input type="radio" name="articleStatus" value="published" checked/>Published&nbsp;&nbsp;
                                                <input type="radio" name="articleStatus" value="unpublished"/>Unpublished
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
@endsectionArticle
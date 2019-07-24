@extends('admin.master')
@section('main-body')
<body>

    <div id="wrapper">

        

        <div id="page-wrapper">
            <div class="row">
                <br/>
                <br/>
                <div class="col-lg-12">
                    <h4 class="page-header">Edit Article Form</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit New Article Form
                        </div>
                        <h3 class="text text-success">{{ Session::get('message') }}</h3>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{url('/update-articles')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    	<div class="form-group">
                                            <label>Article Category</label>
                                            <select class="form-control" name="categoryId">
                                                
                                                <option>Currently-->{{$articleInfo->categoryName}}</option>
                                                
                                                @foreach($categories as $category)
                                                <option value="{{$category->categoryId}}">{{$category->categoryName}}</option>
                                                @endforeach

                                            </select>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Article Author</label>
                                            <select class="form-control" name="authorId">
                                                
                                                <option>Currently-->{{$articleInfo->authorName}}</option>
                                                
                                                @foreach($authors as $author)
                                                <option value="{{$author->authorId}}">{{$author->authorName}}</option>
                                                @endforeach

                                            </select>
                                            
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="articleId" value="{{$articleInfo->articleId}}" />
                                            <label>Article Name</label>
                                            <input class="form-control" type="text" name="articleName" value="{{$articleInfo->articleName}}"/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Article Sub-head</label>
                                            <textarea rows="3"  class="form-control" type="text" name="articleSubHead" > {{$articleInfo->articleSubHead}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Article Body</label>
                                            <textarea  id="editor" rows="5" class="form-control" type="text" name="articleBody">{{$articleInfo->articleBody}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Article Image</label>
                                            <input type="file" accept="image/*" name="articleImage"/>
                                            <img src="{{asset($articleInfo->articleImage)}}" alt="{{$articleInfo->articleName}}" height="100px" width="200px" />
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
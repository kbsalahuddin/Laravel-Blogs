@extends('front-page')
@section('articles')
<div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{$read->articleName}}</h1>

        <!-- Author -->
        <p class="lead">
          Written by:
          <a href="#">{{$read->authorName}}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted On: <i>{{$read->created_at}}</i></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{asset($read->articleImage)}}" alt="" height="180" width="700">

        <hr>
        <blockquote class="blockquote">
          <p class="mb-0">{{$read->articleSubHead}}</p>
          <footer class="blockquote-footer">Latest from <b><i>{{$read->categoryName}}</i></b>

        </blockquote>
        <!-- Post Content -->
        <p class="lead">{{$read->articleBody}}</p>



        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            @php $i = 1 @endphp
            <div class="row">
            
              <div class="col-lg-6">
                @foreach($categories as $category)
                <ul class="list-unstyled mb-0">
                  @if($category->categoryId==$i)
                  <li>
                    <a href="#" value="{{$category->categoryId}}">{{$category->categoryName}}</a>
                  </li>
                  @php $i=$i+2 @endphp
                  @endif
                </ul>
                @endforeach
              </div>
            
 
              <div class="col-lg-6">
                @php  $i = 2 @endphp
                @foreach($categories as $category)
                <ul class="list-unstyled mb-0">
                  @if($category->categoryId==$i)
                  <li>
                    <a href="#" value="{{$category->categoryId}}">{{$category->categoryName}}</a>
                  </li>
                  @php $i=$i+2 @endphp
                  @endif 
                </ul>
                @endforeach
              </div>
              
            </div>
            
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Author Insight</h5>
          <div class="card-body">
            <b>Author Education</b>:<br/>{{$authors->authorEdu}}<br/>
            <b>Author Awards</b>:<br/>{{$authors->authorAward}}
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
@endsection  
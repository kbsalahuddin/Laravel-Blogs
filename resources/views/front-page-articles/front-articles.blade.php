@extends('front-page')
@section('articles')
<!-- Heading Row -->
    
 

      

    <!--<div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="http://placehold.it/900x400" alt="">
      </div>-->
      <!-- /.col-lg-8 -->

      <!--<div class="col-lg-5">
        <h1 class="font-weight-light">Business Name or Tagline</h1>
        <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
        <a class="btn btn-primary" href="#">Call to Action!</a>
      </div>-->
      <!-- /.col-md-4 -->
    <!--</div>-->
    <br/>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('/')}}/front-end/gm-kader.jpg" alt="First slide" height="370px" width="600px">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color:yellow; font-size: 22px;"><b>First</b></h5>
              <p style="color:grey; font-size: 28px;"><b>Nulla vitae elit libero, a pharetra augue mollis interdum</b></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('/')}}/front-end/sudanA.png" alt="Second slide" height="370px" width="600px">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color:yellow; font-size: 22px;"><b>Second</b></h5>
              <p style="color:grey; font-size: 28px;"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('/')}}/front-end/hamid.jpg" alt="Third slide" height="370px" width="600px">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color:yellow; font-size: 22px;"><b>Third</b></h5>
              <p style="color:grey; font-size: 28px;"><b>Nulla vitae elit libero, a pharetra augue mollis interdum</b></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>





    <!-- /.row -->
    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
      </div>
    </div>

    <!-- Content Row -->

    <div class="row text-center">
    @foreach($article as $art)
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="{{asset($art->articleImage)}}" alt="" />
          <div class="card-body">
            <h2 class="card-title">{{$art->articleName}}</h2>
            <p class="card-text">{{$art->articleSubHead}}</p>
          </div>
          <div class="card-footer">
            <a href="{{url('/read-more/'.$art->articleId)}}" class="btn btn-primary btn-sm">Read More</a>
          </div>
        </div>
      </div>
    @endforeach

    </div>
 @endsection 



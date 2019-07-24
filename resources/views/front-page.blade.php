<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>The Evening Standard</title>
  <link rel="icon" href="{{asset('/')}}/front-end/icon.jpg" type="image/gif" sizes="16x16">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('/')}}/front-end/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS for single page-->
  <link href="{{asset('/')}}/front-end/individual-page/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('/')}}/front-end/individual-page/css/blog-post.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('/')}}/front-end/css/small-business.css" rel="stylesheet">

</head>

    @include('includes.front-page-navbar')

  <!-- Page Content -->
  <div class="container">
    
 
    
    <!-- Call to Action Well -->
    <!--<div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
      </div>
    </div>-->

    <!-- Content Row -->
      @yield('articles')
    <!-- /.row -->

  </div>
  <!-- /.container -->

@include('includes.front-page-footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('/')}}/front-end/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('/')}}/front-end/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap core JavaScript posts page-->
  <script src="{{asset('/')}}/front-end/individual-page/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('/')}}/front-end/individual-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>


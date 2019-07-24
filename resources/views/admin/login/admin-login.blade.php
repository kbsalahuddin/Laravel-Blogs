<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login</title>

    <!-- Core CSS - Include with every page -->
    <link href="{{asset('/')}}/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{asset('/')}}/admin/css/sb-admin.css" rel="stylesheet">

<!-- nav parts-->
    <link rel="icon" href="{{asset('/')}}/front-end/icon.jpg" type="image/gif" sizes="16x16">
  <!-- Bootstrap core CSS -->
    <link href="{{asset('/')}}/front-end/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
    <link href="{{asset('/')}}/front-end/css/small-business.css" rel="stylesheet">

</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

      <a href="{{url('/')}}" class="navbar-brand"><img alt="" src="{{asset('/')}}/front-end/icon.jpg"></a>
      
      <a class="navbar-brand" href="{{url('/')}}">The Evening Standard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('login') }}">Login
              <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          

        </ul>
      </div>

  </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{url('/login')}}">
                        {{csrf_field()}}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email" type="email" autofocus>
                                    
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                	@enderror

                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" type="password" is-invalid>
                                    
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                	@enderror

                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <div class="form-group">
                                    <input class="btn btn-success btn-block" name="btn" type="submit" value="Submit">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="{{asset('/')}}/admin/js/jquery-1.10.2.js"></script>
    <script src="{{asset('/')}}/admin/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="{{asset('/')}}/admin/js/sb-admin.js"></script>


    <script src="{{asset('/')}}/front-end/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('/')}}/front-end/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

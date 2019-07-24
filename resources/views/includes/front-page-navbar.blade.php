

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

      <a href="{{url('/')}}" class="navbar-brand"><img alt="" src="{{asset('/')}}/front-end/icon.jpg"></a>
      
      <a class="navbar-brand" href="{{url('/')}}">The Evening Standard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          @php 
            
            $categories=DB::table('categories')
                      ->where('categoryStatus','published')
                      ->get();
          @endphp            
          
          @foreach ($categories as $cats)
            <li class="nav-item">
              <a class="nav-link" href="{{url('/articles-by-category/'.$cats->categoryId)}}">{{$cats->categoryName}}
                <span class="sr-only"></span>
              </a>
            </li>
          @endforeach
           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
          
          <li class="nav-item">
            <a class="nav-link" href="{{url('/show-contributors')}}">Contributors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact &nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" title="DD-MM-YYYY">
            <?php
              date_default_timezone_set("Asia/Dhaka");
              echo date("d/m/y");
            ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" title="BD Local Time">
            <?php
              date_default_timezone_set("Asia/Dhaka");
              echo date("h:i:sa");
            ?>
            </a>
          </li>

        </ul>
      </div>
  </div>
  </nav>
  
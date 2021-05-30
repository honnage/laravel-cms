<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    @yield('title')

    <!-- Styles -->
    <link href="{{asset('css/page.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset('img/favicon.png')}}">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="../index.html">
            <img class="logo-dark" src="{{asset('img/logo-dark.png')}}" alt="logo">
            <img class="logo-light" src="{{asset('img/logo-light.png')}}" alt="logo">
          </a>
        </div>
        <a class="btn btn-xs btn-round btn-success" href="login">Login</a>
      </div>
    </nav><!-- /.navbar -->

    @yield('header')


    @yield('content')
    <!-- Main Content -->
    {{-- <main class="main-content">
      <div class="section bg-gray">
        <div class="container">
          <div class="row">


            <div class="col-md-4 col-xl-3">
              <div class="sidebar px-4 py-md-0">

                <h6 class="sidebar-title">Search</h6>
                <form class="input-group" target="#" method="GET">
                  <input type="text" class="form-control" name="s" placeholder="Search">
                  <div class="input-group-addon">
                    <span class="input-group-text"><i class="ti-search"></i></span>
                  </div>
                </form>

                <hr>

                <h6 class="sidebar-title">Categories</h6>
                <div class="row link-color-default fs-14 lh-24">
                    @foreach($categories as $category)
                        <div class="col-6"><a href="#">{{$category->name}}</a></div>
                    @endforeach
                </div>

                <hr>

                <h6 class="sidebar-title">Tags</h6>
                <div class="gap-multiline-items-1">
                    @foreach($tags as $tag)
                        <a class="badge badge-secondary" href="#">{{$tag->name}}</a>
                    @endforeach
                </div>

                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main> --}}

    <!-- Scripts -->
    <script src="{{asset('js/page.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>

  </body>
</html>

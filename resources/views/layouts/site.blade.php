<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="Tài liệu doanh nghiệp, văn bản pháp luật, thông tin doanh nghiệp">
    <meta name="Description" content="Tra cứu thông tin doanh nghiệp, văn bản pháp luật">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/site.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>Tra cứu thông tin doanh nghiệp, văn bản pháp luậ</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

<body cz-shortcut-listen="true">
  <header>
    <div class="container">
      <div class="row mobile-container">
        <div class="col-sm-4">
          <div class="logo">
            <h1><a href="" style="color:#fff">doanhnghiep.net</a></h1>
          </div>
        </div>
        <div class="col-sm-8 topnav">
          <ul class="nav justify-content-end" id="myLinks">
            <li class="nav-item">
              <a class="nav-link active" href="#">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Văn bản pháp luật</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tài liệu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shop</a>
            </li>
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
          <a href="javascript:void(0);" class="icon hidden-laptop" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>

      </div>
    </div>
  </header>
  <section class="search-form">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <form action="/tim-kiem" method="get">
            <div class="input-group input-group-lg">
              <input class="form-control search-form-input" type="text" placeholder="Gõ từ khóa tìm kiếm..">
              <div class="input-group-btn search-icon">
                <button class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <main id="content">
    <section class="container">
      <div class="row">
        <section class="col-md-9 col-sm-12">
            <div class="post">
              <h4 class="title text-uppercase">
                this is title
              </h4>
              <div class="content-main">
                content-main content-main content-main content-main content-main content-main content-main content-main
                content-main content-main content-main content-main content-main content-main content-main content-main
                content-main content-main content-main content-main content-main content-main content-main content-main
              </div>
            </div>
            <div class="post">
              <h4 class="title text-uppercase">
                this is title
              </h4>
              <div class="content-main">
                content-main content-main content-main content-main content-main content-main content-main content-main
                content-main content-main content-main content-main content-main content-main content-main content-main
                content-main content-main content-main content-main content-main content-main content-main content-main
              </div>
            </div>
            <div class="post">
              <h4 class="title text-uppercase">
                this is title
              </h4>
              <div class="content-main">
                content-main content-main content-main content-main content-main content-main content-main content-main
                content-main content-main content-main content-main content-main content-main content-main content-main
                content-main content-main content-main content-main content-main content-main content-main content-main
              </div>
            </div>
            <div class="post">
              <h4 class="title text-uppercase">
                this is title
              </h4>
              <div class="content-main">
                content-main content-main content-main content-main content-main content-main content-main content-main
                content-main content-main content-main content-main content-main content-main content-main content-main
                content-main content-main content-main content-main content-main content-main content-main content-main
              </div>
            </div>
            <div class="post">
              <h4 class="title text-uppercase">
                this is title
              </h4>
              <div class="content-main">
                content-main content-main content-main content-main content-main content-main content-main content-main
                content-main content-main content-main content-main content-main content-main content-main content-main
                content-main content-main content-main content-main content-main content-main content-main content-main
              </div>
            </div>
        </section>
        <aside class="col-md-3 col-sm-12">
          <div class="block">
            <div class="block-header bg-gray-lighter">
              <h3 class="block-title">TỈNH / THÀNH PHỐ</h3>
            </div>
            <div class="block-content block-content-full">
              <ul class="nav nav-pills nav-stacked push">
                <li><a href="#">Văn bản pháp luật <span class="badge pull-right">191,524</span></a></li>
                <li class="active"><a href="#">Công văn <span class="badge pull-right">99,911</span></a></li>
                <li><a href="#">TCVN <span class="badge pull-right">14,786</span></a></li>
                <li><a href="#">Dự thảo văn bản <span class="badge pull-right">693</span></a></li>
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </section>
  </main>
  <footer>
    <div class="page-footer container">
      <div class="">
        <div class="row mgtop-30">
          <div class="col-sm-3">
            <h6 class="font-w600 text-uppercase push-20">Truy cập nhanh</h6>
            <ul class="list font-s13">
              <li><a class="font-w600" href="/">Trang chủ</a></li>
              <li><a class="font-w600" href="/gioi-thieu">Giới thiệu</a></li>
              <li><a class="font-w600" href="/dieu-khoan-su-dung">Điều khoản sử dụng</a></li>
              <li><a class="font-w600" href="/lien-he">Liên hệ</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h6 class="font-w600 text-uppercase push-20">Liên kết</h6>
            <ul class="list font-s13">
              <li>
                <a href="#" class="font-w600" target="_blank">Thiết kế website</a>
              </li>
              <li>
                <a href="#" class="font-w600" target="_blank">Thiết kế branding</a>
              </li>
              <li>
                <a href="#" class="font-w600" target="_blank">Marketing online</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h6 class=" font-w600 text-uppercase push-20">Truy cập nhanh</h6>
            <div class="font-s13">
              <ul class="list font-s13">
                <li><a class="font-w600" href="#">Tra cứu thông tin doanh nghiệp</a></li>
                <li><a class="font-w600" href="#">Văn bản pháp luật</a></li>
                <li><a class="font-w600" href="#">Tài liệu doanh nghiệp</a></li>
                <li><a class="font-w600" href="#">Shop</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <h6 class=" font-w600 text-uppercase push-20">Tiện ích</h6>
            <div class="font-s13">
              <ul class="list font-s13">
                <li><a class="font-w600" href="#">Tra cứu thông tin doanh nghiệp</a></li>
                <li><a class="font-w600" href="#">Văn bản pháp luật</a></li>
                <li><a class="font-w600" href="#">Tài liệu doanh nghiệp</a></li>
                <li><a class="font-w600" href="#">Shop</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <hr class="mg0">
        <div class="fs12">
          <div class="">
            <div class="pull-right">Develop with <i class="fa fa-heart text-city"></i> by <a class="font-w600">websitedep.com.vn</a></div>
            <div class="pull-left"><a class="font-w600" href="http://doanhnghiep.net">doanhnghiep.net</a> © <span>2018</span></div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script>
  function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
  </script>
</body>

</html>

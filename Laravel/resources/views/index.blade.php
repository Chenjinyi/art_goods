<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$index->title}}</title>

    <!-- Bootstrap core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="./css/landing-page.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">{{$index->brand}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">首页</a>
            </li>
            <li class="nav-item">
                @if(Auth::check())
                <a class="nav-link" href="/home">用户中心</a>
            </li>
                @else
                <a class="nav-link" href="/login">登陆</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">注册</a>
            </li>
                @endif
        </ul>
    </div>
</nav>

<!-- Header -->
<header class="intro-header">
    <div class="container">
        <div class="intro-message">
            <h1>{{$index->message}}</h1>
            <h3>{{$index->message_2}}</h3>
            <hr class="intro-divider">
            <ul class="list-inline intro-social-buttons">
                <li class="list-inline-item">
                    <a href="{{$index->viedo}}" class="btn btn-secondary btn-lg">
                        <i class="fa fa-youtube-play fa-fw"></i>
                        <span class="network-name">{{$index->viedo_name}}</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="{{$index->contact}}" class="btn btn-secondary btn-lg">
                        <i class="fa fa-weibo fa-fw"></i>
                        <span class="network-name">{{$index->contact_name}}</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="{{$index->image}}" class="btn btn-secondary btn-lg">
                        <i class="fa  fa-picture-o fa-fw"></i>
                        <span class="network-name">{{$index->image_name}}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

<!-- Page Content -->
<section class="content-section-a">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 ml-auto">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">{{$index->heading}}</h2>
                <p class="lead">{!! $index->heading!!}</p>
            </div>
            <div class="col-lg-5 mr-auto">
                <img class="img-fluid" src="./img/ipad.png" alt="">
            </div>
        </div>

    </div>
    <!-- /.container -->
</section>

<section class="content-section-b">

    <div class="container">

        <div class="row">
            <div class="col-lg-5 mr-auto order-lg-2">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">{{$index->heading_2}}</h2>
                <p class="lead">{!! $index->heading_2!!}</p>
            </div>
            <div class="col-lg-5 ml-auto order-lg-1">
                <img class="img-fluid" src="./img/dog.png" alt="">
            </div>
        </div>

    </div>
    <!-- /.container -->

</section>
<!-- /.content-section-b -->

<section class="content-section-a">

    <div class="container">

        <div class="row">
            <div class="col-lg-5 ml-auto">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">{{$index->heading_3}}</h2>
                <p class="lead">{!! $index->heading_3!!}</p>
            </div>
            <div class="col-lg-5 mr-auto ">
                <img class="img-fluid" src="./img/phones.png" alt="">
            </div>
        </div>

    </div>
    <!-- /.container -->

</section>
<!-- /.content-section-a -->

<aside class="banner">

    <div class="container">

        <div class="row">
            <div class="col-lg-6 my-auto">
                <h2>{{$index->footer}}</h2>
            </div>
        </div>

    </div>
    <!-- /.container -->

</aside>
<!-- /.banner -->

<!-- Footer -->
<footer>
    <div class="container">
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="/">首页</a>
            </li>
            <li class="footer-menu-divider list-inline-item">&sdot;</li>
            <li class="list-inline-item">
                <a href="/login">登陆</a>
            </li>
            <li class="footer-menu-divider list-inline-item">&sdot;</li>
            <li class="list-inline-item">
                <a href="/register">注册</a>
            </li>
            <li class="footer-menu-divider list-inline-item">&sdot;</li>
            <li class="list-inline-item">
                <a href="/home">个人中心</a>
            </li>

        </ul>
        <p class="copyright text-muted small">Copyright &copy; <a href="http://fblog.club">Franary</a> 2017. All Rights Reserved</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/popper/popper.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>

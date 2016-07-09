<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="interno 12 - interior, jewels design & fashion">
    <meta name="author" content="Chiara Dal Ben Designer">

    <meta property="og:title" content="interno 12" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="interno 12 - interior, jewels design & fashion" />
    <meta property="og:url" content="http://www.interno12.net/" />
    <meta property="og:image" content="http://www.interno12.net/img/logo.png" />
    <meta property="og:image" content="http://www.interno12.net/img/logo600x600.png" />
    <meta property="og:image" content="http://www.interno12.net/img/logo600x314.png" />
    <meta property="og:sitename" content="www.interno12.net" />
    <meta property="og:url" content="http://www.interno12.net" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>interno 12 Jewels</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>


</head>



<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}" title="Home Page"><b>interno 12</b></a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url ('/') }}" title="Home" class="smoothScroll">{{ trans('adminlte_lang::message.home') }}</a></li>
                <li><a href="{{ url('/interior') }}" class="smoothScroll">Interior</a></li>
                <li class="active"><a href="#jewels" class="smoothScroll">Jewels</a></li>
                <li><a href="{{ url('/fashion') }}" title="Fashion" class="smoothScroll">Fashion</a></li>
                <li><a href="#contact" title="Contact" class="smoothScroll">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                    <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                @else
                    <li><a href="/home">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<section id="jewels" name="jewels"></section>
<div id="desc-jewels">
    <div class="container">
        <div class="row">
            <h4 class="centered">"... è il collier che valorizza il collo, il viso e il decolletè delle donne, adagiandosi proprio vicino al cuore: perchè è al cuore che la bellezza può e deve parlare..."</h4>
            <br>
            <div class="col-lg-8 col-lg-offset-2">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('/img/interno12/jewels/home_05.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/interno12/jewels/home_01.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/interno12/jewels/home_02.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/interno12/jewels/home_03.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/interno12/jewels/home_04.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/interno12/jewels/home_06.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div><!--/ .container -->
</div>


<section id="contact" name="contact"></section>
<div id="footerwrap">
    <div class="container">
        <div class="col-lg-5">
            <h3>{{ trans('adminlte_lang::message.address') }}</h3>
            <p>
                <a href="{{ url('/me') }}" title="Me">Chiara Dal Ben</a>,<br/>
                Italy,<br/>
                +39 340 6224008<br/>
                chiara.dalben@interno12.net
            </p>
        </div>

        <div class="col-lg-7">
            <h3>{{ trans('adminlte_lang::message.dropus') }}</h3>
            <br>
            <form role="form" action="#" method="post" enctype="plain">
                <div class="form-group">
                    <label for="name1">{{ trans('adminlte_lang::message.yourname') }}</label>
                    <input type="name" name="Name" class="form-control" id="name1" placeholder="{{ trans('adminlte_lang::message.yourname') }}">
                </div>
                <div class="form-group">
                    <label for="email1">{{ trans('adminlte_lang::message.emailaddress') }}</label>
                    <input type="email" name="Mail" class="form-control" id="email1" placeholder="{{ trans('adminlte_lang::message.enteremail') }}">
                </div>
                <div class="form-group">
                    <label>{{ trans('adminlte_lang::message.yourtext') }}</label>
                    <textarea class="form-control" name="Message" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-large btn-success">{{ trans('adminlte_lang::message.submit') }}</button>
            </form>
        </div>
    </div>
</div>
<div id="c">
    <div class="container">
        <p>
            <strong>Copyright &copy; 2016 by interno 12 All Rights Reserved.</strong> {{ trans('adminlte_lang::message.createdby') }} <a href="#" title="+F">+F</a>.
            <br>
            Vat No. 01735080937
        </p>

    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>

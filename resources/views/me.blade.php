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

    <title>interno 12 Chiara Dal Ben</title>

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
                <li><a href="{{ url('/') }}" title="Home" class="smoothScroll">{{ trans('adminlte_lang::message.home') }}</a></li>
                <li><a href="{{ url('/interior') }}" title="Interior" class="smoothScroll">Interior</a></li>
                <li><a href="{{ url('/jewels') }}" title="Jewels" class="smoothScroll">Jewels</a></li>
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


<section id="me" name="me"></section>
<div id="desc-me">
    <div class="container">
        <div class="row">
            <h1 class="centered">Me</h1>
            <br>
            <div class="col-lg-12">
                <img src="{{ asset('/img/interno12/me/profile_01.jpg') }}" alt="me, Chiara Dal Ben">
                <p>Mi chiamo <b>Chiara Dal Ben</b> e sono un'Interior Designer con la passione per la Moda ed i Gioielli.</p>
                <p>Con Studio&Laboratorio a Pordenone, nel cuore della Zona del Mobile nel Nord-Est d'Italia, da più di dieci anni mi dedico con entusiasmo e passione alla professione di <b>Consulente di Arredamento e Visual Merchandising</b>.</p>
                <p>Da sempre attratta dallo studio dei canoni estetici e della loro applicazione al Design, agli Interni e alla Moda, dopo il conseguimento della Maturità d’Arte Applicata mi sono laureata in Architettura allo Iuav di Venezia e in seguito ho frequentato il corso di perfezionamento per <b>Store Manager al Politecnico di Milano</b>.
                    Da alcuni anni mi occupo anche di Contract attraverso alcuni progetti per strutture alberghiere in Paesi stranieri.</p>
                <p>Alla passione per l'arredamento si affianca, più recentemente, quella per il <b>Jewels Design</b> con la creazione di diverse linee di gioielli inediti.
                    Nel 2014 le Collezioni, selezionate dalla commissione di Artex di Firenze (Italia) presieduta dalla Dott.ssa Burrini, sono state esposte a Milano, nell'area <b>Sperimenta Fashion&Jewels di Homi</b>, dedicata alle attività di ricerca emergenti del settore.</p>
                <p>Come ulteriore applicazione dei canoni estetici e ricerca della Bellezza mi piace consigliare e supportare le persone nella scelta della propria immagine vincente.
                    Per praticare al meglio questa attività seguo costantemente Corsi di perfezionamento in <b>Image Consulting a Milano</b>, capitale della Moda.</p>
                <br>
                <br>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div><!-- /container -->
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
</body>
</html>

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

    <title>interno 12 Fashion</title>

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
                <li class="active"><a href="#fashion" title="Fashion" class="smoothScroll">Fashion</a></li>
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


<section id="fashion" name="fashion"></section>
<div id="desc-fashion">
    <div class="container">
        <div class="row">
            <h1 class="centered">Fashion style</h1>
            <br>
            <div class="col-lg-12">
                <img src="{{ asset('/img/interno12/fashion/fashion_01.jpg') }}" alt="fashion">
                <p>Come Consulente di Immagine mi prendo cura dei desideri e dei bisogni di coloro che riconoscono l'<b>alto valore comunicativo della propria immagine</b> e intendono rafforzarla strategicamente.
                    Ma anche di coloro che hanno compreso che per avere successo e stare bene con gli altri occorrre stare prima bene con se stessi e vogliono dedicarsi all'<b>accrescimento della propria autostima</b> passando attraverso la valorizzazione dela propria immagine.</p>
                <p>Attraverso l'applicazione delle regole di base della Consulenza di Immagine delineerò l'<b>Immagine armonica</b> della persona e insieme costruiremo una nuova immagine più aderente alla sua personalità.</p>
                <br>
                <br>
                <h3 class="centered">Consigli di Bellezza</h3>
                <ul>
                    <li><b>Analisi del Colore</b> con identificazione dei "colori Amici" e della palette colori di riferimento.</li>
                    <li><b>Consigli sul Make-up</b> più adatto in relazione ai colori di pelle e capelli.</li>
                    <li>Suggerimenti sul <b>taglio di capelli</b> più coerente con la forma del viso.</li>
                    <li>Supporto alla <b>scelta di gioelli, accessori e occhiali da sole.</b></li>
                </ul>
                <br>
                <br>
                <h3 class="centered">Consigli di Eleganza</h3>
                <ul>
                    <li><b>Analisi della figura</b> e Individuazione della propria Body Shape con le relative caratteristiche.</li>
                    <li>Suggerimenti sull'<b>abbigliamento strategico</b> in base ai punti di forza e di debolezza.</li>
                    <li>Studio e definizione dello <b>stile di riferimento</b>, in sintonia con la personalità, il lifestyle e l'età della Cliente.</li>
                    <li><b>Supporto nella scelta di tessuti, colori e accessori</b> che valorizzano le proprie caratteristiche fisiche e loro relativi abbinamenti.</li>
                    <li><b>Guida alla scelta di borse, scarpe e accessori</b> chiave per un total look di successo.</li>
                </ul>
                <br>
                <br>
                <h3 class="centered">Il Metodo</h3>
                <p>Il percorso, condiviso con i Clienti, prevede le seguenti fasi:</p>
                <ul>
                    <li><b>Incontro personale conoscitivo</b> (gratuito e senza impegno) nel corso del quale i Clienti mi spiegano le loro esigenze e ciò che si aspettano dal mio intervento ed io illustro loro il mio metodo di lavoro e spiego ciò in cui posso essere loro utile.</li>
                    <li>Elaborazione di un <b>piano di consulenza personalizzato</b> accompagnato dalla presentazione di costi e metodo. I tempi per il raggiungimento dell'obiettivo possono poi variare a seconda della persona e delle sue esigenze nonchè dal tempo che la stessa può dedicare a questa attività.</li>
                </ul>
                <br>
                <br>
                <h3 class="centered">Quanto Costa</h3>
                <p>Le tariffe per una Consulenza d'Immagine sono in linea con le normali tariffe corrisposte per una qualsiasi consulenza fornita da un professionista competente ed affidabile che mette a disposizione la propria esperienza maturata in anni di applicazione ed impegno.</p>
                <p>In ogni casa l'ordine di grandezza è di poche centinaia di euro ma naturalemte questo può dipendere sensibilmente dalle richieste del Cliente che vengono di volta in volta valutate insieme.</p>
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

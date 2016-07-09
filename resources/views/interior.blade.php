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

    <title>interno 12 Interior</title>

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
                <li class="active"><a href="#interior" title="Interior" class="smoothScroll">Interior</a></li>
                <li><a href="{{ url('/jewels') }}" title="Jewles" class="smoothScroll">Jewels</a></li>
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


<section id="interior" name="interior"></section>
<div id="desc-interior">
    <div class="container">
        <div class="row centered">
            <h1>Interior Design, a luxuries intimate pleasure.</h1>
            <br>
            <br>
            <div class="col-lg-6">
                <a href="#home-design" title="Home Design"><img src="{{ asset('/img/interno12/home-design/home_01_s.jpg') }}" alt="Home Design" title="Home Design"></a>
                <h3>Home Design</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('/img/interno12/office-design/home_02_s.jpg') }}" alt="Office Design" title="Office Design">
                <h3>Office Design & Visual Merchandising</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
        <br>
        <hr>
    </div> <!--/ .container -->
</div>


<section id="home-design" name="home-design"></section>
<div id="desc-home-design">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <img src="{{ asset('/img/interno12/home-design/privates_01.jpg') }}" alt="home design">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>L'ascolto e l'analisi delle esigenze del Cliente mi permetterà di identificare la sua Home Image grazie all'applicazione delle regole di base della Consulenza d'Interni:</p>
                <ol>
                    <li>Individuare i problemi legati alla <b>gestione funzionale</b> degli spazi abitativi (dove e come organizzare al meglio i vari ambienti) e proporre la soluzione più adeguata.</li>
                    <li>Conferire agli interni un carattere estetico (come scegliere gli arredi, le luci, i tessuti, i colori, i complementi) coerente con la personalità delle persone che lo vivono.</li>
                </ol>
                <br>
                <br>
                <h3 class="centered">Gli Ambiti di Intervento</h3>
                <p><b style="color:#007575;">Home Design</b> – Quando si è alle prese con l'arredamento di una nuova casa o quando si desidera rinnovare quello di un ambiente è spesso complicato comprendere da cosa iniziare e con quali priorità.
                    <br>
                    Sarà mia cura seguirvi con passione e attenzione in questa entusiasmante avventura, indicandovi passo per passo le fasi da seguire per arrivare senza sorprese all’obiettivo.
                    <br>
                    Vi consiglierò <b>le disposizioni degli arredi più funzionali</b> e vi guiderò nella scelta <b>dei mobili, imbottiti, tendaggi</b>, esteticamente in linea con il vostro gusto.
                    <br>
                    Sceglieremo insieme colori e illuminazione per creare ambienti altamente personalizzati e sofisticati!</p>
                <p><b style="color:#007575;">Interior Decoration</b> – Decorare significa aggiungere quel tocco di stile assolutamente personale al nostro ambiente che ci avvolge e ci fa sentire a casa. E’ il momento in cui finalmente tutto comincia a parlare di noi e del nostro mondo di emozioni e di desideri.
                    <br>
                    Decorare è <b>aggiungere Bellezza</b> attraverso la selezione di oggettistica, complementi, opere d’arte, wallpaper, tessuti, pitture murarie scelti con cura e con lo sguardo sempre attento all'<b>armonia dell'insieme</b>.
                    <br>
                    Decorando, ogni progetto stilisticamente perfetto, ma ancora un po’ troppo asettico, inizia a vivere!
                    <br>
                    Vi accompagnerò in questo viaggio verso la scoperta del vostro Decor Style e vi darò utili suggerimenti per la sua corretta applicazione.</p>
                <p><b style="color:#007575;">Interior Restyling</b> – A volte bastano poche mosse per cambiare il look di un ambiente sia esso la casa dove viviamo o l’ufficio dove lavoriamo.
                    <br>
                    O, ancora, il locale che gestiamo e che ha bisogno, periodicamente di rinfrescare la propria immagine per continuare ad essere attrattivo.
                    <br>
                    In questi casi non è necessario stravolgere il layout ma solo migliorare l’impatto estetico valorizzando certi angoli o mimetizzando delle zone o prospettive che abbiamo capito essere penalizzanti.
                    <br>
                    La consulenza di Interior Restyling ha l'obiettivo di <b>restituire ad un ambiente un'immagine attuale</b> che, rispecchiando i canoni estetici in vigore indipendentemente dallo stile, trasmetta alle persone che ci vivono una sensazione di benessere.
                    <br>
                    Ciò avviene attraverso pochi e mirati interventi relativi a illuminazione, colori, rivestimenti e, quando serve, anche agli arredi attraverso il loro recupero intelligente (SmartRestyling).</p>
                <br>
                <br>
                <h3 class="centered">Il Metodo</h3>
                <p>Il percorso, condiviso con i Clienti, prevede le seguenti fasi:</p>
                <ul>
                    <li><b style="color:#007575;">Incontro personale conoscitivo</b> (gratuito e senza impegno) nel corso del quale i Clienti mi spiegano le loro esigenze e ciò che si aspettano dal mio intervento ed io illustro loro il mio metodo di lavoro.
                        <br>
                        Questo incontro può avvenire anche in casa dei Clienti, qualora lo preferiscano, o ricorrendo alle e-mail.</li>
                    <li><b style="color:#007575;">Raccolta della documentazione</b> (piante,sezioni e fotografie dell’oggetto dell’intervento) necessaria all’elaborazione di un piano di progetto e del relativo preventivo.</li>
                    <li>Presentazione e discussione del planning e del <b style="color:#007575;">preventivo</b>.</li>
                    <li><b style="color:#007575;">Rilievo</b> dello stato di fatto.</li>
                    <li>Presentazione e discussione del <b style="color:#007575;">progetto di massima</b> (almeno due varianti) supportato da render fotorealistici.</li>
                    <li>Aggiornamento del progetto di massima ed elaborazione del <b style="color:#007575;">progetto definitivo</b> supportato da render fotorealistici.</li>
                </ul>
                <br>
                <br>
                <h3 class="centered">Servizi Supplementari</h3>
                <p><b style="color:#007575;">Visite agli showroom</b> dove si possono vedere e "toccare con mano" gli arredi che sono stati proposti ed insieme pre-selezionati. L'esperienza diretta dei prodotti è sempre estremamente efficace, oltre che entusiasmante, perché aiuta ad entrare nel vivo del progetto immaginando l'esito finale.</p>
                <p><b style="color:#007575;">Elaborazione dei preventivi relativi agli arredi</b> e alle varie opere previste dal progetto. Questo supporto è molto utile quando si desidera evitare il lungo e delicato lavoro di ricerca e selezione delle maestranze e la relativa gestione.</p>
                <p><b style="color:#007575;">Direzione del cantiere</b> con il coordinamento delle maestranze interessate. Questa fase è sempre piuttosto impegnativa per il Cliente da seguire direttamente perché mettere d’accordo tutti relativamente ai tempi e ai modi non è cosa facile e richiede tempo e molta pazienza!</p>            </div>
        </div>
    </div> <!-- / .container -->
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

<ul class="nav navbar-nav navbar-right">
    @if (Auth::guest())
        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
        <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
    @else
        <li><a href="/home">{{ Auth::user()->name }}</a></li>
    @endif
</ul>

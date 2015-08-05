@extends('master')

@section('content')
    <header class="text">
        <div class="hero">
            <div class="container-narrow">
                <h1>Sponsors</h1>
            </div>
        </div>
    </header>

    <main class="static">
        <section class="container-narrow">
            <ul class="row sponsors">
                <li class="col-sm-6 margin-bottom-double" id="adbrain">
                    <a href="http://www.adbrain.com/" target="_blank"><strong>Adbrain</strong></a>
                </li>
                <li class="col-sm-6 margin-bottom-double" id="gocardless">
                    <a href="https://gocardless.com/" target="_blank"><strong>GOCARDLESS</strong></a>
                </li>
            </ul>
            <ul class="row sponsors">
                <li class="col-sm-4 margin-bottom-double" id="deskbeers">
                    <a href="https://www.deskbeers.com/" target="_blank"><strong>DeskBeers</strong></a>
                </li>
                {{--<li class="col-sm-4" id="lyst">--}}
                {{--<a href="https://www.lyst.co.uk/" target="_blank"><strong>lyst</strong></a>--}}
                {{--</li>--}}
                <li class="col-sm-4" id="balsamiq">
                    <a href="https://balsamiq.com/" target="_blank"><strong>balsamiq</strong></a>
                </li>
                <li class="col-sm-4" id="hirespace">
                    <a href="https://hirespace.com/" target="_blank"><strong>Hire Space</strong></a>
                </li>
            </ul>

            <hr class="margin-top-triple margin-bottom-triple is-hidden">

            <ul class="row sponsors is-hidden">
                <li class="col-sm-2" id="treehouse">
                    <a href="https://teamtreehouse.com/" target="_blank"><strong>Treehouse</strong></a>
                </li>
                <li class="col-sm-2" id="bohemiancoding">
                    <a href="http://bohemiancoding.com/" target="_blank"><strong>Bohemian Coding</strong></a>
                </li>
                <li class="col-sm-2" id="marvelapp">
                    <a href="https://marvelapp.com/" target="_blank"><strong>Marvel App</strong></a>
                </li>
                <li class="col-sm-2" id="podio">
                    <a href="https://podio.com/" target="_blank"><strong>Podio</strong></a>
                </li>
                <li class="col-sm-2" id="dotgrid">
                    <a href="http://www.adbrain.com/" target="_blank"><strong>dotgrid</strong></a>
                </li>
            </ul>
        </section>
    </main>
@endsection
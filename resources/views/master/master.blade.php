<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! SEO::generate() !!}

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('images/favicons/manifest.json')}}">
    <link rel="mask-icon" href="{{asset('images/favicons/safari-pinned-tab.svg')}}" color="#006eb9">
    <meta name="theme-color" content="#ffffff">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('assets.css')

    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
    </script>
</head>
<body class="page-{{Route::currentRouteName()}}">
    <header id="wb-header" class="navbar {{(Route::currentRouteName() == 'index') ? 'is-primary' : ''}}">
        <div class="container">
            <div class="navbar-brand">
                <a href="{{route('index')}}" class="navbar-item logo">
                    <img src="{{asset('images/logo_blue.svg')}}" alt="Webblue Media" />
                    <span class="has-text-primary">Webblue Media</span>
                </a>
                <span class="navbar-burger burger" data-target="main-nav">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
            </div>
            <div id="main-nav" class="navbar-menu">
                <div class="navbar-end">
                    <a href="{{route('index')}}" class="navbar-item {{(Route::currentRouteName() == 'index') ? 'is-active' : ''}}">
                        Willkommen
                    </a>
                    <a href="{{route('projects')}}" class="navbar-item {{(Route::currentRouteName() == 'projects') ? 'is-active' : ''}}">
                        Projekte
                    </a>
                    <a href="{{route('about')}}" class="navbar-item {{(Route::currentRouteName() == 'about') ? 'is-active' : ''}}">
                        Über mich
                    </a>
                    <span class="navbar-item">
                      <a href="mailto:hello@webblue.media" class="button is-primary is-inverted">
                        <span class="icon">
                          <i class="fa fa-envelope"></i>
                        </span>
                        <span>Kontaktieren</span>
                      </a>
                    </span>
                </div>
            </div>
        </div>
    </header>

    <main id="wb-main">
        @yield('main')
    </main>

    <footer id="wb-footer" class="footer">
        <div class="container">
            <div class="content has-text-centered">
               <a href="{{route('imprint')}}">Impressum</a> - <a href="{{route('agb')}}">Geschäftsbedingungen</a> - <a href="{{route('legal')}}">Datenschutz</a>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-5432087960417862",
            enable_page_level_ads: true
        });
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-112256447-1', 'auto');
        ga('set', 'anonymizeIP', true);
        ga('send', 'pageview');
    </script>
    @yield('assets.js')
</body>
</html>
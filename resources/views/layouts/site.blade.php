<!DOCTYPE html>
<html lang="zh_TW" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="description" content="{{ setting('site.description') }}" />
    @yield('seo')
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('page_title') | {{ setting('site.title') }}</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{Voyager::image(setting('site.favicon'))}}" rel="icon">
    {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/components-font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/et-line-font/et-line-font.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/flexslider/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-text-rotator/simpletextrotator.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css?version='.now()) }}" rel="stylesheet">
    <link id="color-scheme" href="{{ asset('assets/css/colors/default.css') }}" rel="stylesheet">

    @yield('css')

    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{URL::to('/')}}" />
    <meta property="og:image" content="{{ setting('site.image') }}" />
    <meta property="og:description" content="{{ setting('site.description') }}" />

    @if(env('APP_ENV') == 'production')
    {!! setting('site.gtm_head') !!}
    @endif
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    @if(env('APP_ENV') == 'production')
    {!! setting('site.gtm_body') !!}
    @endif
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top @yield('header_class')">
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo float-left">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <span>{{ setting('site.title') }}</span>
                        </a>
                        <!-- Uncomment below if you prefer to use an image logo -->
                        {{-- @if(setting('site.logo'))
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ Voyager::image(setting('site.logo'),'storage/images/logo.png') }}" alt="{{ setting('site.title') }}" class="img-fluid">
                        </a>
                        @endif --}}
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="custom-collapse">
                    {{ menu('frontend','partials.priNav_classic') }}
                </div>
                <!-- .nav-menu -->
            </div>
        </nav>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @yield('page_top')

    <!-- End Hero -->

    <main id="main">
        <div class="page-loader">
            <div class="loader">載入中...</div>
        </div>
        @yield('body')
        
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer bg-dark">
        <div class="footer-top module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-info">
                        <div class="widget">
                            <h5 class="widget-title font-alt">關於我們</h5>
                            <p>{!! setting('site.description') !!}</p>
                            <div class="footer-social-links">
                                @if (setting('site.fb_id') != null)
                                <a href="https://www.facebook.com/{{ setting('site.fb_id') }}" class="facebook"><i class="fa fa-facebook"></i></a>
                                @endif
                                @if (setting('site.ig_id') != null)
                                <a href="https://www.instagram.com/{{ setting('site.ig_id') }}" class="instagram"><i class="fa fa-instagram"></i></a>
                                @endif
                            </div>
                            @if(setting('site.address'))
                            <p>{!! setting('site.address') !!}</p>
                            @endif
                            @if(setting('site.phone'))
                            <p><strong>電話:</strong> {{ setting('site.phone') }}</p>
                            @endif
                            @if(setting('site.service_mail'))
                            <p><strong>Email:</strong><a href="mailto:{{ setting('site.service_mail') }}">{{ setting('site.service_mail') }}</a></p>
                            @endif
                        </div>
                    </div>
                    {{ menu('frontend_footer','partials.menu_footer') }}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <p class="copyright font-alt">{!! setting('site.copyright') !!}</p>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/wow/dist/wow.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope/dist/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('assets/vendor/flexslider/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/smoothscroll.js') }}"></script>
    <script src="{{ asset('assets/vendor/magnific-popup/dist/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-text-rotator/jquery.simple-text-rotator.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js?version='.now()) }}"></script>
    @yield('js')
    {!! setting('site.javascript_embedded') !!}
</body>

</html>

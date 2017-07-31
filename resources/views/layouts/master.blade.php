<!DOCTYPE html>
<html lang="en">

<head>
    <!--You can Place your SEO Meta Tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- YOUR TITLE -->
    <title>Diamond705 - Laravel User Membership Page </title>


    <!-- GOOGLE FONT -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,200,300,400,600" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>

    <!-- STYLESHEETS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Icon-Fonts -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <!-- Main Stylesheet -->
    {{--Custom Stylesheet--}}
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">

    <link rel="stylesheet" href="{{ asset('css/demo.css') }}">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

</head>

<body data-spy="scroll" data-offset="80">

    <!-- Pre-loader -->
    <div class="preloader">

        <div class="status">&nbsp;</div>

    </div>

    <!-- header start -->
    <header id="header" class="navbar-fixed-top">



    </header>
    <!-- header end -->


    <!-- Intro section start -->

    <section id="intro" class="section">

        <!-- Background image -->
        <div class="bg-img"></div>

        <div class="container">

            @yield('welcome-section')

            <!-- .row -->

            @yield('regform')


        </div>
        <!-- .container -->

    </section>

    <!-- Intro section end -->

    <section class="section_wrapper section bg-gray">

        @yield('content')

    </section>





    <footer id="footer" class="bg-gray">

        <!--begin footer_box -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin twelvecol -->
                <div class="twelvecol up_fade animated fadeInUp text-center">

                    <!--begin footer_social -->
                    <ul class="footer_social fade_in animated fadeIn list-inline">
                        <li>
                            <a href="http://twitter.com/uchendububa">
	                                    <i class="fa fa-twitter"></i>
	                                </a>
                        </li>
                        <li>
                            <a href="https://medium.com/@n.diamond.705">
	                                    <i class="fa fa-medium"></i>
	                                </a>
                        </li>
                        <li>
                            <a href="http://web.skype.com">
	                                    <i class="fa fa-skype"></i>
	                                </a>
                        </li>

                        <li>
                            <a href="http://github.com/Diamond705">
	                                    <i class="fa fa-github"></i>
	                                </a>
                        </li>
                    </ul>
                    <!--end footer_social -->

                    <!--begin copyright -->
                    <div class="copyright ">
                        <p>Uche Ndububa - @Diamond705</p>
                    </div>
                    <!--end copyright -->

                </div>
                <!--end twelvecol -->

            </div>
            <!--end row -->

        </div>
        <!--end footer_box -->

    </footer>



    <!-- JQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Background slider -->
    <script src="{{ asset('js/jquery.backstretch.min.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}" type="text/javascript"></script>
    <!-- WOW - Reveal Animations When You Scroll -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Smooth scroll -->
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <!-- Custom Javascript -->
    <script src="{{ asset('js/my-app.js') }}"></script>

    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
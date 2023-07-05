<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>STASIUN METEOROLOGI KELAS III RAOES KETAPANG</title>
    <!-- Stylesheets -->
    <link href="{{ url('public') }}/assets_front/css/bootstrap.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets_front/css/revolution-slider.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets_front/css/style.css" rel="stylesheet">

    <!-- news-slide -->
    <link rel="stylesheet" href="{{ url('public') }}/assets_front/news-slide/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets_front/news-slide/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets_front/news-slide/css/style.css">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ url('public') }}/assets_front/images/logo-bmkg.png" type="image/x-icon">
    <link rel="icon" href="{{ url('public') }}/assets_front/images/logo-bmkg.png" type="image/x-icon">

    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{ url('public') }}/assets_front/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="/assets_front/js/respond.js"></script><![endif]-->

    @stack('style')
</head>

<body>
    <div class="page-wrapper">


        <!-- Main Header-->
        <header class="main-header header-style-two">
            <x-template-web.header />
        </header>
        <!--End Main Header -->

        <section class="page-title"
            style="background-image:url({{ url('public') }}/assets_front/images/background/bmkg.png);">
            <div class="auto-container">
                <h1 style="color: #ffffff;">{{ $title }}</h1>
            </div>

            <!--page-info-->
            <div class="page-info">
                <div class="auto-container">
                    <div class="row clearfix">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <ul class="bread-crumb clearfix">
                                {{ $breadcrumb }}
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--Sidebar blog Page-->
        <!--Content Side-->
        {{ $slot }}
        <!--Content Side-->
        <!--Main Footer-->
        <x-template-web.footer />
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header">
        <span
            class="icon fa fa-long-arrow-up">
        </span>
    </div>

    <script src="{{ url('public') }}/assets_front/js/jquery.js"></script>
    <script src="{{ url('public') }}/assets_front/js/bootstrap.min.js"></script>
    <script src="{{ url('public') }}/assets_front/js/revolution.min.js"></script>
    <script src="{{ url('public') }}/assets_front/js/jquery.fancybox.pack.js"></script>
    <script src="{{ url('public') }}/assets_front/js/jquery.fancybox-media.js"></script>
    <script src="{{ url('public') }}/assets_front/js/owl.js"></script>
    <script src="{{ url('public') }}/assets_front/js/wow.js"></script>
    <script src="{{ url('public') }}/assets_front/js/script.js"></script>
    <script src="{{ url('public') }}/assets_front/js/isotope.js"></script>
    <script src="{{ url('public') }}/assets_front/news-slide/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets_front/news-slide/js/popper.js"></script>
    <script src="{{ url('public') }}/assets_front/news-slide/js/bootstrap.min.js"></script>
    <script src="{{ url('public') }}/assets_front/news-slide/js/owl.carousel.min.js"></script>
    <script src="{{ url('public') }}/assets_front/news-slide/js/main.js"></script>
    @stack('script')
</body>

</html>

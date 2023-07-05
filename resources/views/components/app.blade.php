<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> {{ $title }} | STASIUN METEOROLOGI KELAS III RAOES KETAPANG </title>
    <link rel="icon" type="image/x-icon" href="{{ url('public') }}/assets/img/logobmkghitam.png" />
    <link href="{{ url('public') }}/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="{{ url('public') }}/assets/js/loader.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ url('public') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="{{ url('public') }}/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/font-icons/fontawesome/css/regular.css">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/font-icons/fontawesome/css/fontawesome.css">
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/plugins/table/datatable/custom_dt_custom.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/plugins/dropify/dropify.min.css">
    <link href="{{ url('public') }}/assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{ url('public') }}/assets/css/components/cards/card.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/assets/css/angin.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/assets/css/elements/avatar.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/plugins/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/plugins/editors/quill/quill.snow.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />
    <style>
        .layout-px-spacing {
            min-height: calc(100vh - 166px) !important;
        }
    </style>
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body data-spy="scroll">
    <!--  BEGIN NAVBAR  -->
    <x-template.header />
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <x-template.sub-header />
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <x-template.sidebar />
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <x-template.notif />
                {{ $slot }}
            </div>
            <x-template.footer />
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- ICON -->
    <script src="{{ url('public') }}/assets/js/scrollspyNav.js"></script>
    <script src="{{ url('public') }}/plugins/font-icons/feather/feather.min.js"></script>
    <script type="text/javascript">
        feather.replace();
    </script>
    <!-- END ICON -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ url('public') }}/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="{{ url('public') }}/bootstrap/js/popper.min.js"></script>
    <script src="{{ url('public') }}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ url('public') }}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ url('public') }}/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ url('public') }}/assets/js/custom.js"></script>
    <script src="{{ url('public') }}/plugins/highlight/highlight.pack.js"></script>
    <script src="{{ url('public') }}/plugins/dropify/dropify.min.js"></script>
    <script src="{{ url('public') }}/plugins/blockui/jquery.blockUI.min.js"></script>
    <script src="{{ url('public') }}/assets/js/users/account-settings.js"></script>
    <script src="{{ url('public') }}/plugins/select2/select2.min.js"></script>
    <script src="{{ url('public') }}/plugins/editors/quill/quill.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
    <script>
        var quill = new Quill('#editor-container', {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, false]
                    }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block']
                ]
            },
            placeholder: 'Silahkan Masukkan Text...',
            theme: 'snow' // or 'bubble'
        });
    </script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ url('public') }}/plugins/table/datatable/datatables.js"></script>
    <script>
        c3 = $('#style-3').DataTable({
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5
        });

        multiCheck(c3);
    </script>
    <script>
        c4 = $('#style-4').DataTable({
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5
        });

        multiCheck(c4);
    </script>
    <script>
        var slides = document.querySelectorAll('#slides .slide');
        var currentSlide = 0;
        var slideInterval = setInterval(nextSlide, 600);

        function nextSlide() {
            slides[currentSlide].className = 'slide';
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].className = 'slide showing';
        }

        var playing = true;
        var pauseButton = document.getElementById('pause');

        function pauseSlideshow() {
            pauseButton.innerHTML = '<i data-feather="pause-circle">';
            playing = false;
            clearInterval(slideInterval);
        }

        function playSlideshow() {
            pauseButton.innerHTML = '<i data-feather="play-circle">';
            playing = true;
            slideInterval = setInterval(nextSlide, 600);
        }

        pauseButton.onclick = function() {
            if (playing) {
                pauseSlideshow();
            } else {
                playSlideshow();
            }
        };
    </script>
    @stack('script')
    <script>
        var ss = $(".basic").select2({
            tags: true,
        });
    </script>
      <script type="text/javascript">
        window.onload = function() { jam(); }

        function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s, t;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            e.innerHTML = h +':'+ m +':'+ s;

            setTimeout('jam()', 1000);
        }

        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script>
</body>

</html>

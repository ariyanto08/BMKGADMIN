<x-webase title="Prakiraan Angin 3000 Feet">
    @push('style')
        <style>
            .page-title .page-info .bread-crumb li:nth-child(2)::after {
                position: absolute;
                content: '\f105';
                font-family: 'FontAwesome';
                right: -18px;
                top: 1px;
            }

            .sidebar-page-container {
                display: flex;
                justify-content: space-between;
                align-items: stretch;
            }

            .sidebar {
                height: 100%;
            }

            .tabs-section {
                height: 100%;
            }
        </style>
        <link rel="stylesheet" href="{{ url('public') }}/assets_front/css/animasi.css">
    @endpush

    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Prakiraan" url="home" />
        <x-template-web.bread-crumb.bread bread="Cuaca" />
        <x-template-web.bread-crumb.crumb crumb="Prakiraan Angin 3000 Feet" />
    @endslot

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <!--tabs-section-->
                    <section class="tabs-section" style="padding: 0%;">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <div class="column content-column col-lg-11 col-md-12 col-sm-12">
                                    <!--Tabs Box-->
                                    <div class="tabs-box tabs-style-one">
                                        <h3 class="text-center" style="padding: 3%; letter-spacing: .2em;">ANGIN 3000
                                            FEET</h3><br>
                                        <!--Tabs Content-->
                                        <div class="tabs-content">
                                            <div class="showing" id="slides">

                                                @foreach ($list_angin as $angin)
                                                    <div class="slide">
                                                        <img src="{{ url("public/$angin->gambar1") }}"
                                                            style="width:100%">
                                                    </div>
                                                    <div class="slide">
                                                        <img src="{{ url("public/$angin->gambar2") }}"
                                                            style="width:100%">
                                                    </div>
                                                    <div class="slide">
                                                        <img src="{{ url("public/$angin->gambar3") }}"
                                                            style="width:100%">
                                                    </div>
                                                    <div class="slide">
                                                        <img src="{{ url("public/$angin->gambar4") }}"
                                                            style="width:100%">
                                                    </div>
                                                    <div class="slide">
                                                        <img src="{{ url("public/$angin->gambar5") }}"
                                                            style="width:100%">
                                                    </div>
                                                    <div class="slide">
                                                        <img src="{{ url("public/$angin->gambar6") }}"
                                                            style="width:100%">
                                                    </div>
                                                    <div class="slide">
                                                        <img src="{{ url("public/$angin->gambar7") }}"
                                                            style="width:100%">
                                                    </div>
                                                    <div class="slide">
                                                        <img src="{{ url("public/$angin->gambar8") }}"
                                                            style="width:100%">
                                                    </div>
                                                    <div class="slide">
                                                        <img src="{{ url("public/$angin->gambar9") }}"
                                                            style="width:100%">
                                                    </div>
                                                    <div class="slide">
                                                        <img src="{{ url("public/$angin->gambar10") }}"
                                                            style="width:100%">
                                                    </div>
                                                @endforeach

                                            </div>
                                            <div class="text-center">
                                                <button class="controls btn btn-default" style="margin-top: 25px;"
                                                    id="pause"><i class="fa fa-pause"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--Content Side-->

                <!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar news-sidebar">
                        <!-- Recent Posts -->
                        <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">

                            <div class="sec-title-seven">
                                <h2>Peringatan Cuaca</h2>
                            </div>

                            <article class="post" style="padding: 0%; min-height: 33px;">
                                <!--post-meta-->
                                <h4><a href="#">Peringatan Dini Cuaca 3 Hari Ke Depan</a></h4>
                            </article>

                            <article class="post" style="padding: 0%; min-height: 33px;">
                                <!--post-meta-->
                                <h4><a href="#">Kebakaran Hutan dan Lahan</a></h4>
                            </article>

                            <article class="post" style="padding: 0%; min-height: 33px;">
                                <!--post-meta-->
                                <h4><a href="#">Siklon Tropis</a></h4>
                            </article>

                            <article class="post" style="padding: 0%; min-height: 33px;">
                                <!--post-meta-->
                                <h4><a href="#">Prakiraan Cuaca Berbasis Dampak</a></h4>
                            </article>

                            <article class="post" style="padding: 0%; min-height: 33px;">
                                <!--post-meta-->
                                <h4><a href="#">Gelombang Tinggi</a></h4>
                                <hr>
                            </article>
                        </div>

                        <!-- Recent Posts -->
                        <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">

                            <div class="sec-title-seven">
                                <h2>Index Model Prakiraan</h2>
                            </div>

                            <article class="post" style="padding: 0%; min-height: 33px;">
                                <!--post-meta-->
                                <h4><a href="#">Potensi Pertumbuhan Awan</a></h4>
                            </article>

                            <article class="post" style="padding: 0%; min-height: 33px;">
                                <!--post-meta-->
                                <h4><a href="#">Prakiraan Angin</a></h4>
                            </article>

                            <article class="post" style="padding: 0%; min-height: 33px;">
                                <!--post-meta-->
                                <h4><a href="#">Potensi Hujan Harian</a></h4>
                            </article>

                            <article class="post" style="padding: 0%; min-height: 33px;">
                                <!--post-meta-->
                                <h4><a href="#">MJO</a></h4>
                            </article>

                        </div>

                    </aside>


                </div>
                <!--Sidebar-->


            </div>
        </div>
    </div>

    @push('script')
        <script>
            var slides = document.querySelectorAll('#slides .slide');
            var currentSlide = 0;
            var slideInterval = setInterval(nextSlide, 1200);

            function nextSlide() {
                slides[currentSlide].className = 'slide';
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].className = 'slide showing';
            }

            var playing = true;
            var pauseButton = document.getElementById('pause');

            function pauseSlideshow() {
                pauseButton.innerHTML = '<i class="fa fa-play">';
                playing = false;
                clearInterval(slideInterval);
            }

            function playSlideshow() {
                pauseButton.innerHTML = '<i class="fa fa-pause">';
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
    @endpush
</x-webase>

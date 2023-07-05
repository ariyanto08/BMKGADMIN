@push('style')
    <style>
        .page-title .page-info .bread-crumb li:nth-child(2)::after {
            position: absolute;
            content: '\f105';
            font-family: 'FontAwesome';
            right: -18px;
            top: 1px;
        }
    </style>
@endpush
<x-webase title="Prakiraan Tinggi Gelombang">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Prakiraan" url="home" />
        <x-template-web.bread-crumb.bread bread="Maritim" />
        <x-template-web.bread-crumb.crumb crumb="Prakiraan Tinggi Gelombang" />
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
                                        <h3 class="text-center" style="padding: 3%; letter-spacing: .2em;">PRAKIRAAN TINGGI GELOMBANG</h3><br>
                                        <!--Tabs Content-->
                                        <div class="tabs-content">
                                            <!--Tab / Active Tab-->
                                            <div class="tab active-tab">
                                                <div class="image-box">
                                                    <img src="https://cdn.bmkg.go.id/DataMKG/MEWS/maritim/gelombang_maritim.png" alt="" />
                                                </div>
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
                        <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                            <div class="sec-title-seven"><h2>Peringatan Cuaca</h2></div>

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
                        <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                            <div class="sec-title-seven"><h2>Index Model Prakiraan</h2></div>

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

</x-webase>


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
@endpush
<x-webase title="Potensi Kemudahan Kebakaran Hutan dan Lahan">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Prakiraan" url="home" />
        <x-template-web.bread-crumb.bread bread="Cuaca" />
        <x-template-web.bread-crumb.crumb crumb="Potensi Kemudahan Kebakaran Hutan dan Lahan" />
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
                                <h2>Sistem Peringatan Kebakaran Hutan dan Lahan</h2><br>
                                <div class="column content-column col-lg-11 col-md-12 col-sm-12">
                                    {{-- <div class="row">
                                        <div class="shop-form col-md-6">
                                            <div class="form-group">
                                                <h4>PRODUK</h4>
                                                <select>
                                                    <option>Fine Fuel Moisture Code</option>
                                                    <option>Duff Moisture Code</option>
                                                    <option>Drought Code</option>
                                                    <option>Build Up Index</option>
                                                    <option>Initial Spread Index</option>
                                                    <option>Fire Weather Index</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="shop-form col-md-6">
                                            <div class="form-group">
                                                <h4>HARI</h4>
                                                <select>
                                                    <option>Observasi</option>
                                                    <option>Hari Ini</option>
                                                    <option>Besok</option>
                                                    <option>H+2</option>
                                                    <option>H+3</option>
                                                    <option>H+4</option>
                                                    <option>H+5</option>
                                                    <option>H+6</option>
                                                    <option>H+7</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <img src="http://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/20_kalbar_ffmc_00.png"
                                        alt="">
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

            </div>
        </div>
    </div>
</x-webase>

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
<x-webase title="Prakiraan Curah Hujan Dasarian">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Prakiraan" url="home" />
        <x-template-web.bread-crumb.bread bread="Iklim" />
        <x-template-web.bread-crumb.crumb crumb="Prakiraan Curah Hujan Dasarian" />
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
                                            <h3 class="text-center" style="padding: 3%; letter-spacing: .2em;">PRAKIRAAN HUJAN DASARIAN</h3><br>
                                            <!--Tab Buttons-->
                                            <ul class="tab-buttons clearfix">
                                                <li data-tab="#tab-one" class="tab-btn active-btn">Prakiraan Curah Hujan Dasarian</li>
                                            </ul>

                                            <!--Tabs Content-->
                                            <div class="tabs-content">
                                                <!--Tab / Active Tab-->
                                                <div class="tab active-tab" id="tab-one">
                                                    <div class="image-box">
                                                        <img src="https://iklim.kalbar.bmkg.go.id/images/klimat/peta-prakiraan-hujan-dasarian.jpeg" alt="" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--Sidebar-->

                    <div class=" col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <aside class="sidebar news-sidebar">
                            <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="sec-title-seven"><h2>Iklim</h2></div>

                                <article class="post">
                                    <figure class="post-thumb"><img src="{{ url('public') }}/assets_front/images/resource/post-thumb-3.jpg" alt=""></figure>
                                    <h4><a href="#">Prakiraan Hujan Bulanan</a></h4>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><img src="{{ url('public') }}/assets_front/images/resource/post-thumb-4.jpg" alt=""></figure>
                                    <h4><a href="#">Analisis Hujan Bulanan</a></h4>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><img src="{{ url('public') }}/assets_front/images/resource/post-thumb-5.jpg" alt=""></figure>
                                    <h4><a href="#">Potensi Banjir</a></h4>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><img src="{{ url('public') }}/assets_front/images/resource/post-thumb-4.jpg" alt=""></figure>
                                    <h4><a href="#">Informasi Suhu Muka Laut</a></h4>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><img src="{{ url('public') }}/assets_front/images/resource/post-thumb-5.jpg" alt=""></figure>
                                    <h4><a href="#">Proyeksi Perubahan Iklim</a></h4>
                                </article>
                            </div>
                        </aside>
                    </div>

                    <!--Sidebar-->
                </div>
            </div>
        </div>
</x-webase>

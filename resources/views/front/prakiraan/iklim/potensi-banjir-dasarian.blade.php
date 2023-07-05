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
<x-webase title="Potensi Banjir Dasarian">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Prakiraan" url="home" />
        <x-template-web.bread-crumb.bread bread="Iklim" />
        <x-template-web.bread-crumb.crumb crumb="Potensi Banjir Dasarian" />
    @endslot
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div style="margin-left: 100px;">
                        <h3>Potensi Banjir Dasarian</h3>
                    </div><br>
                    <!--shop-single-->
                    <div class="shop-single">
                        <div class="product-details">
                            <!--Basic Details-->
                            <div class="basic-details">
                                <div class="row clearfix">
                                    <div class="image-column col-md-11 col-sm-12 col-xs-12">
                                        <!--item-tabs-->
                                        <div class="item-tabs">
                                            <div class="tabs-box tabs-style-two">
                                                <!--Tabs Content-->
                                                <div class="tabs-content">
                                                    <!--Tab / Active Tab-->
                                                    <div class="tab active-tab" id="tab-one">
                                                        <embed
                                                            src="https://iklim.kalbar.bmkg.go.id/images/klimat/banjir_dasa1.pdf"
                                                            width="100%" height="900">
                                                    </div>
                                                </div>
                                                <a href="https://iklim.kalbar.bmkg.go.id/images/klimat/banjir_dasa1.pdf"><button
                                                        class="btn btn-info btn-tone bs-tooltip">Download PDF</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Basic Details-->
                        </div>
                    </div>

                </div>
                <!--Content Side-->

                <!--Sidebar-->

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar news-sidebar">
                        <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="sec-title-seven">
                                <h2>Iklim</h2>
                            </div>

                            <article class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-3.jpg" alt="">
                                </figure>
                                <h4><a href="#">Prakiraan Hujan Bulanan</a></h4>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-4.jpg" alt="">
                                </figure>
                                <h4><a href="#">Analisis Hujan Bulanan</a></h4>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-5.jpg" alt="">
                                </figure>
                                <h4><a href="#">Potensi Banjir</a></h4>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-4.jpg" alt="">
                                </figure>
                                <h4><a href="#">Informasi Suhu Muka Laut</a></h4>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-5.jpg" alt="">
                                </figure>
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

<x-webase title="Edukasi Cuaca">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Publikasi" url="" />
        <x-template-web.bread-crumb.crumb crumb="Edukasi Cuaca" />
    @endslot
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-md-8">
                    <!--shop-single-->
                    <div class="shop-single">
                        <div class="product-details">
                            <!--Basic Details-->
                            <div class="basic-details">
                                <div class="image-column col-md-10">
                                    <!--item-tabs-->
                                    <div class="item-tabs">
                                        <!--Tabs Content-->
                                        <div class="tabs-content">
                                            @foreach ($list_edukasi as $edukasi)
                                                <!--Tab / Active Tab-->
                                                <div class="tab active-tab">
                                                    <img style="margin-bottom: 40px;"
                                                        src="{{ url("public/$edukasi->file") }}" alt="">
                                                </div>
                                            @endforeach
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
                <div class="col-lg-3 col-md-4">
                    <aside class="sidebar news-sidebar">
                        <!-- Recent Posts -->
                        <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">

                            <div class="sec-title-seven">
                                <h2>Berita Lainnya</h2>
                            </div>

                            @foreach ($recent_berita as $berita)
                                <article class="post">
                                    <figure class="post-thumb"><img src="{{ url("public/$berita->gambar") }}"
                                            alt="">
                                    </figure>
                                    <h4><a
                                            href="{{ url('berita/detail-berita', $berita->id) }}">{{ $berita->judul }}</a>
                                    </h4>
                                    <!--post-meta-->
                                    <ul class="post-meta">
                                        <li>{{ $berita->created_at->format('d F Y') }}</li>
                                    </ul>
                                </article>
                            @endforeach

                        </div>

                    </aside>
                </div>
                <!--Sidebar-->


            </div>
        </div>
    </section>
</x-webase>

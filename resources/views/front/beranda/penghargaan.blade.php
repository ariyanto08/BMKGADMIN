<x-webase title="Penghargaan">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Beranda" url="home" />
        <x-template-web.bread-crumb.crumb crumb="Penghargaan" />
    @endslot

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <section class="news-outer">
                        <div class="row clearfix">
                            @foreach ($list_penghargaan as $penghargaan)
                                <div class="news-style-two col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <figure class="image" style="max-height: 350px; overflow: hidden;">
                                            <img style="object-fit:cover; width: 100%; height: 350px;" src="{{ url("public/$penghargaan->gambar") }}" alt="" />

                                            <div class="date">
                                                {{ $penghargaan->created_at->format('d M Y') }} <span
                                                    class="flaticon-gallery"></span>
                                            </div>
                                        </figure>

                                        <!--lower-content-->
                                        <div class="lower-content">
                                            <h3>{{ $penghargaan->ket }}</h3>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
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
                                <h2>Berita Lainnya</h2>
                            </div>
                            @foreach ($recent_berita as $berita)
                            <article class="post">
                                <figure class="post-thumb"><img src="{{ url("public/$berita->gambar") }}" alt="">
                                </figure>
                                <h4><a href="#">{{$berita->judul}}</a></h4>
                                <!--post-meta-->
                                <ul class="post-meta">
                                    <li>{{$berita->created_at->format('d M Y')}}</li>
                                </ul>
                            </article>
                            @endforeach
                        </div>
                    </aside>
                </div>
                <!--Sidebar-->

            </div>
        </div>
    </div>
</x-webase>

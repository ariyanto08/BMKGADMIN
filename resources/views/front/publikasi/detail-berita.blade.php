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
<x-webase title="Detail Berita">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Publikasi"/>
        <x-template-web.bread-crumb.crumb crumb="Berita" url="{{url('publikasi/berita')}}"/>
        <x-template-web.bread-crumb.crumb crumb="Detail Berita" />
    @endslot
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <section class="news-outer">
                        <div class="news-style-two">
                            <div class="sec-title-one">
                                <h2>{{$berita->judul}}</h2>
                            </div>
                            <div class="inner-box">

                                <figure class="image">
                                    <img src="{{ url("public/$berita->gambar") }}" alt="" />

                                    <div class="date">
                                        {{$berita->created_at->format('d M')}} <span class="flaticon-gallery"></span>
                                    </div>

                                </figure>

                                <!--lower-content-->
                                <div class="lower-content">
                                    <div class="text">{{$berita->deskripsi}}</div>
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
                                <h2>Berita Lainnya</h2>
                            </div>
                            @foreach ($recent_berita as $berita)
                            <article class="post">
                                <figure class="post-thumb"><img src="{{ url("public/$berita->gambar") }}" alt="">
                                </figure>
                                <h4><a href="{{ url('berita/detail-berita', $berita->id) }}">{{$berita->judul}}</a></h4>
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

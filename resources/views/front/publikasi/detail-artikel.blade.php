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
<x-webase title="Detail Artikel">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Publikasi" />
        <x-template-web.bread-crumb.crumb crumb="Artikel" url="{{ url('publikasi/artikel') }}" />
        <x-template-web.bread-crumb.crumb crumb="Detail Artikel" />
    @endslot
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <section class="news-outer">
                        <div class="news-style-two">
                            <div class="sec-title-one">
                                <h2>{{ $artikel->ket }}</h2>
                            </div>
                            <div class="date mb-4">
                                Tanggal Upload :<strong> {{$artikel->created_at->format('d F Y')}}</strong>
                            </div>
                            <div class="inner-box">

                                <embed width="100%" height="900" src="{{ url("public/$artikel->file") }}">

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
                                <h2>artikel Lainnya</h2>
                            </div>
                            @foreach ($recent_artikel as $artikel)
                                <article class="post">
                                    <figure class="post-thumb"><img src="{{ url("public/$artikel->gambar") }}"
                                            alt="">
                                    </figure>
                                    <h4><a
                                            href="{{ url('artikel/detail-artikel', $artikel->id) }}">{{ $artikel->judul }}</a>
                                    </h4>
                                    <!--post-meta-->
                                    <ul class="post-meta">
                                        <li>{{ $artikel->created_at->format('d F Y') }}</li>
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

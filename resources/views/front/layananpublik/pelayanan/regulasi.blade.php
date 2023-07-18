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
<x-webase title="Regulasi">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Layanan Publik" />
        <x-template-web.bread-crumb.bread bread="Pelayanan" />
        <x-template-web.bread-crumb.crumb crumb="Regulasi" />
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
                                            @foreach ($regulasi->where('kategori','Regulasi') as $item)
                                            <div class="text-center"><h3>{{$item->ket}}</h3></div><br>
                                            <!--Tab / Active Tab-->
                                            <div class="tab active-tab" id="tab-one">
                                                <embed src="{{ url("public/$item->file") }}" width="800" height="900">
                                                </div><br><br>
                                                <hr>
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
    </section>
</x-webase>

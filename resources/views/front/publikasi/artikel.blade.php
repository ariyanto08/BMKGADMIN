@push('style')
<style>
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .pagination a {
        padding: 8px 12px;
        margin: 0 5px;
        border: 1px solid #ccc;
        text-decoration: none;
    }

    .pagination a.active {
        background-color: #ccc;
    }
</style>
@endpush
<x-webase title="Artikel">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Publikasi" url="" />
        <x-template-web.bread-crumb.crumb crumb="Artikel" />
    @endslot
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <section class="news-outer">

                        @foreach ($list_artikel as $artikel)
                        <div class="news-style-two">
                            <div class="inner-box">
                                <figure class="image">
                                    <a href="{{ url('artikel/detail-artikel', $artikel->id) }}"><img src="{{ url("public/$artikel->gambar") }}" alt="" /></a>

                                    <div class="date">
                                        {{$artikel->created_at->format('d M')}} <span class="flaticon-gallery"></span>
                                    </div>

                                </figure>

                                <!--lower-content-->
                                <div class="lower-content">
                                    <h3><a href="{{ url('artikel/detail-artikel', $artikel->id) }}">{{$artikel->ket}}</a></h3>
                                </div>

                            </div>
                        </div>
                        @endforeach

                        <!-- Styled Pagination -->
                        <div class="styled-pagination text-left padd-top-30">
                            <ul class="pagination"></ul>
                        </div>

                    </section>

				</div>
                <!--Content Side-->

				<!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar news-sidebar">
                    	<!-- Recent Posts -->
                        <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                            <div class="sec-title-seven"><h2>Artikel Lainnya</h2></div>

                            @foreach ($recent_artikel as $artikel)
                            <article class="post">
                                <figure class="post-thumb"><img src="{{ url("public/$artikel->gambar") }}" alt="">
                                </figure>
                                <h4><a href="{{url('artikel/detail-artikel', $artikel->id)}}">{{$artikel->ket}}</a></h4>
                                <!--post-meta-->
                                <ul class="post-meta">
                                    <li>{{$artikel->created_at->format('d M Y')}}</li>
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
    @push('script')
    <script>
        var currentPage = 1;
        var itemsPerPage = 6; // Jumlah item per halaman
        var items = document.getElementsByClassName('news-style-two');
        var totalPages = Math.ceil(items.length / itemsPerPage);
        var pagination = document.querySelector('.pagination');

        showPage(currentPage);

        function showPage(page) {
            var startIndex = (page - 1) * itemsPerPage;
            var endIndex = startIndex + itemsPerPage;

            // Menampilkan item pada halaman yang aktif dan menyembunyikan yang lainnya
            for (var i = 0; i < items.length; i++) {
                if (i >= startIndex && i < endIndex) {
                    items[i].style.display = 'block';
                } else {
                    items[i].style.display = 'none';
                }
            }

            // Membuat tautan paginasi
            var paginationLinks = '';

            for (var j = 1; j <= totalPages; j++) {
                paginationLinks += '<li><a href="#" onclick="showPage(' + j + ')"' + (j === page ? ' class="active"' : '') + '>' + j + '</a></li>';
            }

            pagination.innerHTML = paginationLinks;
        }
    </script>
    @endpush
</x-webase>

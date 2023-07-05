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
<x-webase title="Video">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Galeri" url="" />
        <x-template-web.bread-crumb.crumb crumb="Foto" />
    @endslot
    <section class="masonary-section style-two">
    	<div class="auto-container">

            <div class="sec-title-four">
                <h2>Foto</h2>
            </div>

           	<!--Sortable Masonry-->
            <div class="sortable-masonry">

                <!--Filter-->
                <div class="filters clearfix">

                	<ul class="filter-tabs filter-btns pull-right clearfix">
                        <li class="active filter" data-role="button" data-filter=".all"><span class="txt">All</span></li>
                        <li class="filter" data-role="button" data-filter=".Penghargaan"><span class="txt">Penghargaan</span></li>
                        <li class="filter" data-role="button" data-filter=".Penerimaan Penghargaan"><span class="txt">Penerimaan Penghargaan</span></li>
                        <li class="filter" data-role="button" data-filter=".Formetika"><span class="txt">Formetika</span></li>
                        <li class="filter" data-role="button" data-filter=".Rekonsiliasi"><span class="txt">Rekonsiliasi</span></li>
                        <li class="filter" data-role="button" data-filter=".Sosialisasi"><span class="txt">Sosialisasi</span></li>
                    </ul>
                </div>

                <div class="items-container row clearfix">

                    <!--Default Portfolio Item-->
                    @foreach ($list_foto as $foto)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all {{$foto->kategori}}">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ url("public/$foto->gambar") }}" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{ url("public/$foto->gambar") }}" class="lightbox-image proj-link" target="_blank" title="{{$foto->ket}}"><span class="fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
            <!-- Styled Pagination -->
            <div class="styled-pagination text-center padd-top-50">
                <ul class="pagination"></ul>
            </div>
        </div>

    </section>
    @push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add event listener to the filter tabs
            $('.filter').click(function() {
                const category = $(this).data('filter');
                filterItems(category);
                setActiveFilter($(this));
            });

            // Filter the items based on the selected category
            function filterItems(category) {
                $('.masonry-item').hide(); // Hide all items

                // If the category is "all" or the item has the selected category class, display the item
                if (category === '.all') {
                    $('.masonry-item').show();
                } else {
                    $(category).show();
                }
            }

            // Set active filter
            function setActiveFilter(filterElement) {
                $('.filter').removeClass('active');
                filterElement.addClass('active');
            }
        });
    </script>
    <script>
        var currentPage = 1;
        var itemsPerPage = 8; // Jumlah item per halaman
        var items = document.getElementsByClassName('default-portfolio-item');
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

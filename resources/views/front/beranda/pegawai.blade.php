<x-webase title="Pegawai">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Beranda" url="home" />
        <x-template-web.bread-crumb.crumb crumb="Pegawai" />
    @endslot
    <section class="masonary-section style-two professionals">
        <div class="auto-container">

            <div class="sec-title-four">
                <h2>Pegawai</h2>
            </div>

            <!--Sortable Masonry-->
            <div class="sortable-masonry">
                <!-- Filter -->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns pull-right clearfix">
                        <li class="active filter" data-role="button" data-filter=".all"><span class="txt">All</span></li>
                        <li class="filter" data-role="button" data-filter=".ASN"><span class="txt">ASN</span></li>
                        <li class="filter" data-role="button" data-filter=".PPNPN"><span class="txt">PPNPN</span></li>
                    </ul>
                </div>

                <div class="items-container row clearfix">
                    @foreach ($list_pegawai as $pegawai)
                    <div class="team-style-one col-md-3 col-sm-6 col-xs-12 masonry-item all {{ $pegawai->kategori }}"
                        style="padding-bottom: 50px;">
                        <!-- inner-box -->
                        <div class="inner-box" style="max-width: 100%; max-height: 100%;">
                            <figure class="image" style="max-height: 300px; overflow: hidden;">
                                <img style="width: 100%; height: auto;" src="{{ url("public/$pegawai->foto") }}" alt="" />
                            </figure>
                            <div class="overlay-box" style="margin-top: -10;">
                                <div class="lower-content">
                                    <h3>{{ $pegawai->nama }}</h3>
                                    <div class="designation">{{ $pegawai->kategori }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!--End Sortable Masonry-->
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
    @endpush
</x-webase>

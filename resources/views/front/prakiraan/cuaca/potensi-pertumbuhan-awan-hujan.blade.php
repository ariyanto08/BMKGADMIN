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
<x-webase title="Potensi Pertumbuhan Awan Hujan">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Prakiraan" url="home" />
        <x-template-web.bread-crumb.bread bread="Cuaca" />
        <x-template-web.bread-crumb.crumb crumb="Potensi Pertumbuhan Awan Hujan" />
    @endslot
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-12 col-md-8 col-sm-12 col-xs-12">
                    <!--tabs-section-->
                    <section class="tabs-section" style="padding: 0%;">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <div class="column content-column col-lg-11 col-md-12 col-sm-12">
                                    <!--Tabs Box-->
                                    <div class="tabs-box tabs-style-one">
                                        <h3 class="text-center" style="padding: 3%; letter-spacing: .2em;">PRAKIRAAN CUACA BERBASIS DAMPAK</h3><br>
                                        <!--Tab Buttons-->
                                        <ul class="tab-buttons clearfix">
                                            <li data-tab="#tab-one" class="tab-btn active-btn">Hari Ini</li>
                                            <li data-tab="#tab-two" class="tab-btn">Besok</li>
                                            <li data-tab="#tab-three" class="tab-btn">Lusa</li>
                                        </ul>

                                        <!--Tabs Content-->
                                        <div class="tabs-content">
                                            <!--Tab / Active Tab-->
                                            <div class="tab active-tab" id="tab-one">
                                                <div class="image-box">
                                                    <img src="https://web.meteo.bmkg.go.id//media/data/bmkg/mfy/ecmwf/awan_d0.png" alt="" />
                                                </div>
                                            </div>

                                            <!--Tab-->
                                            <div class="tab" id="tab-two">
                                                <div class="image-box">
                                                    <img src="https://web.meteo.bmkg.go.id//media/data/bmkg/mfy/ecmwf/awan_d1.png" alt="" />
                                                </div>
                                            </div>

                                            <!--Tab-->
                                            <div class="tab" id="tab-three">
                                                <div class="image-box">
                                                    <img src="https://web.meteo.bmkg.go.id//media/data/bmkg/mfy/ecmwf/awan_d2.png" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

				</div>

            </div>
        </div>
    </div>
</x-webase>

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
<x-webase title="Peringatan Dini Cuaca">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Prakiraan" url="home" />
        <x-template-web.bread-crumb.bread bread="Cuaca" />
        <x-template-web.bread-crumb.crumb crumb="Peringatan Dini Cuaca" />
    @endslot
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->

                <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div style="margin-left: 100px;"><h2>Peringatan Dini Cuaca</h2></div><br>
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
                                                    @foreach ($list_dini as $dini)
                                                    <div class="tab active-tab" id="tab-one">
                                                        <embed src="{{ url("public/$dini->file") }}" width="100%" height="900">
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Basic Details-->
                        </div>
                    </div>

				</div>

            </div>
        </div>
    </div>
</x-webase>

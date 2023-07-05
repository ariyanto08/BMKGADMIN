@push('style')
<style>
    .page-title .page-info .bread-crumb li:nth-child(2)::after {
        position: absolute;
        content: '\f105';
        font-family: 'FontAwesome';
        right: -18px;
        top: 1px;
    }
    .sidebar-page-container {
        display: flex;
        justify-content: space-between;
        align-items: stretch;
    }

    .sidebar {
        height: 100%;
    }

    .tabs-section {
        height: 100%;
    }
</style>
@endpush
<x-webase title="Prakiraan Cuaca Berbasis Dampak">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Prakiraan" url="home" />
        <x-template-web.bread-crumb.bread bread="Cuaca" />
        <x-template-web.bread-crumb.crumb crumb="Prakiraan Cuaca Berbasis Dampak" />
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
                                <div class="column content-column col-lg-12 col-md-12 col-sm-12">
                                    <!--Tabs Box-->
                                    <div class="tabs-box tabs-style-one">
                                        <div class="row">
                                            <div class="shop-form col-md-3">
                                                <div class="form-group">
                                                    <select name="country" >
                                                        <option>Pilih Kabupaten/ Kecamatan</option>
                                                        <option>Ketapang</option>
                                                        <option>Benua Kayong</option>
                                                        <option>Simpang Hilir</option>
                                                        <option>Sukadana</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <h3><strong>Kabupaten Ketapang</strong></h3>
                                        <!--Tab Buttons-->
                                        <ul class="tab-buttons clearfix">
                                            <li data-tab="#tab-one" class="tab-btn active-btn">Kam, 08 Des</li>
                                            <li data-tab="#tab-two" class="tab-btn">Jum, 09 Des</li>
                                            <li data-tab="#tab-three" class="tab-btn">Sab, 10 Des</li>
                                        </ul>

                                        <!--Tabs Content-->
                                        <div class="tabs-content">
                                            <!--Tab / Active Tab-->
                                            <div class="tab active-tab" id="tab-one">
                                                <table class="table table-striped">
                                                    <thead class="thead-dark" style="background-color: #135589; ">
                                                      <tr style="color: #ffffff;">
                                                        <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">No</th>
                                                        <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">Kecamatan</th>
                                                        <th colspan="18" scope="col" style="text-align: center;">Kondisi Cuaca</th>
                                                        <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">Suhu Udara (°C)</th>
                                                        <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">Arah Angin</th>
                                                        <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">Kec. Angin (km/jam)</th>
                                                        <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">Kelembapan (%)</th>
                                                      </tr>
                                                      <tr style="color: #ffffff;">
                                                        <th scope="col" style="text-align: center;">Icon</th>
                                                        <th scope="col" style="text-align: center;">07.00</th>
                                                        <th scope="col" style="text-align: center;">Icon</th>
                                                        <th scope="col" style="text-align: center;">10.00</th>
                                                        <th scope="col" style="text-align: center;">Icon</th>
                                                        <th scope="col" style="text-align: center;">13.00</th>
                                                        <th scope="col" style="text-align: center;">Icon</th>
                                                        <th scope="col" style="text-align: center;">16.00</th>
                                                        <th scope="col" style="text-align: center;">Icon</th>
                                                        <th scope="col" style="text-align: center;">19.00</th>
                                                        <th scope="col" style="text-align: center;">Icon</th>
                                                        <th scope="col" style="text-align: center;">22.00</th>
                                                        <th scope="col" style="text-align: center;">Icon</th>
                                                        <th scope="col" style="text-align: center;">01.00</th>
                                                        <th scope="col" style="text-align: center;">Icon</th>
                                                        <th scope="col" style="text-align: center;">04.00</th>
                                                        <th scope="col" style="text-align: center;">Icon</th>
                                                        <th scope="col" style="text-align: center;">07.00</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                       @foreach ($list_ketapang as $ketapang)
                                                      <tr>
                                                        <td style="text-align: center;">{{$loop->iteration}}</td>
                                                        <td style="text-align: center;">{{$ketapang->kecamatan}}</td>
                                                        <td style="text-align: center;">@switch($ketapang->cuaca_jam_7)
                                                            @case('CERAH')
                                                                <img src="https://www.bmkg.go.id/asset/img/icon-cuaca/cerah-am.png" alt="CERAH">
                                                                @break
                                                            @case('BERAWAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Berawan-am.png" alt="BERAWAN">
                                                                @break
                                                            @case('HUJAN RINGAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Cerah%20Berawan-am.png" alt="HUJAN RINGAN">
                                                                @break
                                                            @case('HUJAN SEDANG')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%20Sedang-am.png" alt="HUJAN SEDANG">
                                                                @break
                                                            @case('HUJAN SEI')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%2.png" alt="HUJAN SE">
                                                                @break
                                                            @default
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/default-am.png" alt="Cuaca Default">
                                                        @endswitch</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_7}}</td>
                                                        <td style="text-align: center;">@switch($ketapang->cuaca_jam_10)
                                                            @case('CERAH')
                                                                <img src="https://www.bmkg.go.id/asset/img/icon-cuaca/cerah-am.png" alt="CERAH">
                                                                @break
                                                            @case('BERAWAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Berawan-am.png" alt="BERAWAN">
                                                                @break
                                                            @case('HUJAN RINGAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Cerah%20Berawan-am.png" alt="HUJAN RINGAN">
                                                                @break
                                                            @case('HUJAN SEDANG')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%20Sedang-am.png" alt="HUJAN SEDANG">
                                                                @break
                                                            @case('HUJAN SEI')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%2.png" alt="HUJAN SE">
                                                                @break
                                                            @default
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/default-am.png" alt="Cuaca Default">
                                                        @endswitch</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_10}}</td>
                                                        <td style="text-align: center;">@switch($ketapang->cuaca_jam_13)
                                                            @case('CERAH')
                                                                <img src="https://www.bmkg.go.id/asset/img/icon-cuaca/cerah-am.png" alt="CERAH">
                                                                @break
                                                            @case('BERAWAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Berawan-am.png" alt="BERAWAN">
                                                                @break
                                                            @case('HUJAN RINGAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Cerah%20Berawan-am.png" alt="HUJAN RINGAN">
                                                                @break
                                                            @case('HUJAN SEDANG')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%20Sedang-am.png" alt="HUJAN SEDANG">
                                                                @break
                                                            @case('HUJAN SEI')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%2.png" alt="HUJAN SE">
                                                                @break
                                                            @default
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/default-am.png" alt="Cuaca Default">
                                                        @endswitch</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_13}}</td>
                                                        <td style="text-align: center;">@switch($ketapang->cuaca_jam_16)
                                                            @case('CERAH')
                                                                <img src="https://www.bmkg.go.id/asset/img/icon-cuaca/cerah-am.png" alt="CERAH">
                                                                @break
                                                            @case('BERAWAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Berawan-am.png" alt="BERAWAN">
                                                                @break
                                                            @case('HUJAN RINGAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Cerah%20Berawan-am.png" alt="HUJAN RINGAN">
                                                                @break
                                                            @case('HUJAN SEDANG')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%20Sedang-am.png" alt="HUJAN SEDANG">
                                                                @break
                                                            @case('HUJAN SEI')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%2.png" alt="HUJAN SE">
                                                                @break
                                                            @default
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/default-am.png" alt="Cuaca Default">
                                                        @endswitch</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_16}}</td>
                                                        <td style="text-align: center;">@switch($ketapang->cuaca_jam_19)
                                                            @case('CERAH')
                                                                <img src="https://www.bmkg.go.id/asset/img/icon-cuaca/cerah-am.png" alt="CERAH">
                                                                @break
                                                            @case('BERAWAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Berawan-am.png" alt="BERAWAN">
                                                                @break
                                                            @case('HUJAN RINGAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Cerah%20Berawan-am.png" alt="HUJAN RINGAN">
                                                                @break
                                                            @case('HUJAN SEDANG')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%20Sedang-am.png" alt="HUJAN SEDANG">
                                                                @break
                                                            @case('HUJAN SEI')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%2.png" alt="HUJAN SE">
                                                                @break
                                                            @default
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/default-am.png" alt="Cuaca Default">
                                                        @endswitch</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_19}}</td>
                                                        <td style="text-align: center;">@switch($ketapang->cuaca_jam_22)
                                                            @case('CERAH')
                                                                <img src="https://www.bmkg.go.id/asset/img/icon-cuaca/cerah-am.png" alt="CERAH">
                                                                @break
                                                            @case('BERAWAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Berawan-am.png" alt="BERAWAN">
                                                                @break
                                                            @case('HUJAN RINGAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Cerah%20Berawan-am.png" alt="HUJAN RINGAN">
                                                                @break
                                                            @case('HUJAN SEDANG')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%20Sedang-am.png" alt="HUJAN SEDANG">
                                                                @break
                                                            @case('HUJAN SEI')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%2.png" alt="HUJAN SE">
                                                                @break
                                                            @default
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/default-am.png" alt="Cuaca Default">
                                                        @endswitch</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_22}}</td>
                                                        <td style="text-align: center;">@switch($ketapang->cuaca_jam_01)
                                                            @case('CERAH')
                                                                <img src="https://www.bmkg.go.id/asset/img/icon-cuaca/cerah-am.png" alt="CERAH">
                                                                @break
                                                            @case('BERAWAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Berawan-am.png" alt="BERAWAN">
                                                                @break
                                                            @case('HUJAN RINGAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Cerah%20Berawan-am.png" alt="HUJAN RINGAN">
                                                                @break
                                                            @case('HUJAN SEDANG')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%20Sedang-am.png" alt="HUJAN SEDANG">
                                                                @break
                                                            @case('HUJAN SEI')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%2.png" alt="HUJAN SE">
                                                                @break
                                                            @default
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/default-am.png" alt="Cuaca Default">
                                                        @endswitch</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_01}}</td>
                                                        <td style="text-align: center;">@switch($ketapang->cuaca_jam_04)
                                                            @case('CERAH')
                                                                <img src="https://www.bmkg.go.id/asset/img/icon-cuaca/cerah-am.png" alt="CERAH">
                                                                @break
                                                            @case('BERAWAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Berawan-am.png" alt="BERAWAN">
                                                                @break
                                                            @case('HUJAN RINGAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Cerah%20Berawan-am.png" alt="HUJAN RINGAN">
                                                                @break
                                                            @case('HUJAN SEDANG')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%20Sedang-am.png" alt="HUJAN SEDANG">
                                                                @break
                                                            @case('HUJAN SEI')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%2.png" alt="HUJAN SE">
                                                                @break
                                                            @default
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/default-am.png" alt="Cuaca Default">
                                                        @endswitch</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_04}}</td>
                                                        <td style="text-align: center;">@switch($ketapang->cuaca_jam_07)
                                                            @case('CERAH')
                                                                <img src="https://www.bmkg.go.id/asset/img/icon-cuaca/cerah-am.png" alt="CERAH">
                                                                @break
                                                            @case('BERAWAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Berawan-am.png" alt="BERAWAN">
                                                                @break
                                                            @case('HUJAN RINGAN')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Cerah%20Berawan-am.png" alt="HUJAN RINGAN">
                                                                @break
                                                            @case('HUJAN SEDANG')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%20Sedang-am.png" alt="HUJAN SEDANG">
                                                                @break
                                                            @case('HUJAN SEI')
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/Hujan%2.png" alt="HUJAN SE">
                                                                @break
                                                            @default
                                                                <img src="https://www.bmkg.go.id/asset/img/weather_icon/ID/default-am.png" alt="Cuaca Default">
                                                        @endswitch</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_07}}</td>
                                                        <td style="text-align: center;">{{$ketapang->suhu_udara}}</td>
                                                        <td style="text-align: center;">{{$ketapang->arah_angin}}</td>
                                                        <td style="text-align: center;">{{$ketapang->kec_angin}}</td>
                                                        <td style="text-align: center;">{{$ketapang->kelembapan}}</td>
                                                      </tr>
                                                    @endforeach
                                                    </tbody>
                                                  </table>
                                            </div>

                                            <!--Tab-->
                                            <div class="tab" id="tab-two">
                                                <table class="table table-striped">
                                                    <thead class="thead-dark" style="background-color: #135589; ">
                                                        <tr style="color: #ffffff;">
                                                          <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">No</th>
                                                          <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">Kecamatan</th>
                                                          <th colspan="9" scope="col" style="text-align: center;">Kondisi Cuaca</th>
                                                          <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">Suhu Udara (°C)</th>
                                                          <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">Arah Angin</th>
                                                          <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">Kec. Angin (km/jam)</th>
                                                          <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">Kelembapan (%)</th>
                                                        </tr>
                                                        <tr style="color: #ffffff;">
                                                          <th scope="col" style="text-align: center;">07.00</th>
                                                          <th scope="col" style="text-align: center;">10.00</th>
                                                          <th scope="col" style="text-align: center;">13.00</th>
                                                          <th scope="col" style="text-align: center;">16.00</th>
                                                          <th scope="col" style="text-align: center;">19.00</th>
                                                          <th scope="col" style="text-align: center;">22.00</th>
                                                          <th scope="col" style="text-align: center;">01.00</th>
                                                          <th scope="col" style="text-align: center;">04.00</th>
                                                          <th scope="col" style="text-align: center;">07.00</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($list_ketapang as $ketapang)
                                                      <tr>
                                                        <td style="text-align: center;">{{$loop->iteration}}</td>
                                                        <td style="text-align: center;">{{$ketapang->kecamatan}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_7}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_10}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_13}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_16}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_19}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_22}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_01}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_04}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_07}}</td>
                                                        <td style="text-align: center;">{{$ketapang->suhu_udara}}</td>
                                                        <td style="text-align: center;">{{$ketapang->arah_angin}}</td>
                                                        <td style="text-align: center;">{{$ketapang->kec_angin}}</td>
                                                        <td style="text-align: center;">{{$ketapang->kelembapan}}</td>
                                                      </tr>
                                                    @endforeach
                                                    </tbody>
                                                  </table>
                                            </div>

                                            <!--Tab-->
                                            <div class="tab" id="tab-three">
                                                <table class="table table-striped">
                                                    <thead class="thead-dark" style="background-color: #135589; ">
                                                        <tr style="color: #ffffff;">
                                                          <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">No</th>
                                                          <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">Kecamatan</th>
                                                          <th colspan="9" scope="col" style="text-align: center;">Kondisi Cuaca</th>
                                                          <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">Suhu Udara (°C)</th>
                                                          <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">Arah Angin</th>
                                                          <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">Kec. Angin (km/jam)</th>
                                                          <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">Kelembapan (%)</th>
                                                        </tr>
                                                        <tr style="color: #ffffff;">
                                                          <th scope="col" style="text-align: center;">07.00</th>
                                                          <th scope="col" style="text-align: center;">10.00</th>
                                                          <th scope="col" style="text-align: center;">13.00</th>
                                                          <th scope="col" style="text-align: center;">16.00</th>
                                                          <th scope="col" style="text-align: center;">19.00</th>
                                                          <th scope="col" style="text-align: center;">22.00</th>
                                                          <th scope="col" style="text-align: center;">01.00</th>
                                                          <th scope="col" style="text-align: center;">04.00</th>
                                                          <th scope="col" style="text-align: center;">07.00</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       @foreach ($list_ketapang as $ketapang)
                                                      <tr>
                                                        <td style="text-align: center;">{{$loop->iteration}}</td>
                                                        <td style="text-align: center;">{{$ketapang->kecamatan}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_7}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_10}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_13}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_16}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_19}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_22}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_01}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_04}}</td>
                                                        <td style="text-align: center;">{{$ketapang->cuaca_jam_07}}</td>
                                                        <td style="text-align: center;">{{$ketapang->suhu_udara}}</td>
                                                        <td style="text-align: center;">{{$ketapang->arah_angin}}</td>
                                                        <td style="text-align: center;">{{$ketapang->kec_angin}}</td>
                                                        <td style="text-align: center;">{{$ketapang->kelembapan}}</td>
                                                      </tr>
                                                    @endforeach
                                                    </tbody>
                                                  </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
				</div>
                <!--Content Side-->


            </div>
        </div>
    </div>
</x-webase>

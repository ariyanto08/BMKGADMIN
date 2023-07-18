<x-webase title="Informasi Layanan">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Layanan Publik" url="" />
        <x-template-web.bread-crumb.crumb crumb="Informasi Layanan" />
    @endslot
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!--tabs-section-->
                    <section class="tabs-section" style="padding: 0%;">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <div class="column content-column col-lg-11 col-md-12 col-sm-12">
                                    <!--Tabs Box-->
                                    <div class="tabs-box tabs-style-one">
                                        <!--Tab Buttons-->
                                        <!--Tabs Content-->
                                        <div class="tabs-content">
                                            <!--Tab / Active Tab-->
                                            <div class="tab active-tab">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead class="thead"
                                                            style="background-color: #135589; color: #ffffff;">
                                                            <tr>
                                                                <th colspan="7" class="text-center">JENIS PENERIMAAN
                                                                    NEGARA BUKAN PAJAK</th>
                                                            </tr>
                                                            <tr style="background-color: #fbca00; color: black;">
                                                                <th class="text-center">I</th>
                                                                <th colspan="4" class="text-center">INFORMASI
                                                                    METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA</th>
                                                                <th rowspan="2" class="text-center">SATUAN</th>
                                                                <th rowspan="2" class="text-center">TARIF</th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-center">A</th>
                                                                <th colspan="4" class="text-center">INFORMASI KHUSUS
                                                                    METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($filterBab1a as $row)
                                                                @if (isset($row['sub_isi']))
                                                                    <tr>
                                                                        <td colspan="row"
                                                                            style="vertical-align: middle; text-align:center; background-color: #669933; color: #ffffff;">
                                                                            {{ $loop->iteration }}.
                                                                        </td>
                                                                        <td colspan="7"
                                                                            style="vertical-align: middle; text-align:center; background-color: #669933; color: #ffffff;">
                                                                            {{ $row['isi'] }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="row"
                                                                            style="vertical-align: middle; text-align:center;">
                                                                        </td>
                                                                        <td colspan="4"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['sub_isi'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['satuan'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['tarif'] }}</td>
                                                                    </tr>
                                                                @else
                                                                    <tr>
                                                                        <td scope="row"
                                                                            style="vertical-align: middle; text-align:center;">
                                                                            {{ $loop->iteration }}.</td>
                                                                        <td colspan="4"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['isi'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['satuan'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['tarif'] }}</td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            <tr style="background-color: #135589; color: #ffffff;">
                                                                <th class="text-center">B</th>
                                                                <th colspan="5" class="text-center">INFORMASI KHUSUS
                                                                    METEOROLOGI , KLIMATOLGI DAN GEOFISIKA SESUAI
                                                                    PERMINTAAN</th>
                                                                <th colspan="3"></th>
                                                            </tr>
                                                            @foreach ($filterBab1b as $row)
                                                                @if (isset($row['sub_isi']))
                                                                    <tr>
                                                                        <td colspan="row"
                                                                            style="vertical-align: middle; text-align:center; background-color: #669933; color: #ffffff;">
                                                                            {{ $loop->iteration }}.
                                                                        </td>
                                                                        <td colspan="7"
                                                                            style="vertical-align: middle; text-align:center; background-color: #669933; color: #ffffff;">
                                                                            {{ $row['isi'] }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="row"
                                                                            style="vertical-align: middle; text-align:center;">
                                                                        </td>
                                                                        <td colspan="4"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['sub_isi'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['satuan'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['tarif'] }}</td>
                                                                    </tr>
                                                                @else
                                                                    <tr>
                                                                        <td scope="row"
                                                                            style="vertical-align: middle; text-align:center;">
                                                                            {{ $loop->iteration }}.</td>
                                                                        <td colspan="4"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['isi'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['satuan'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['tarif'] }}</td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            <tr style="background-color: #fbca00; color: black;">
                                                                <th class="text-center">II</th>
                                                                <th colspan="7" class="text-center">INFORMASI KHUSUS
                                                                    METEOROLOGI , KLIMATOLGI DAN GEOFISIKA SESUAI
                                                                    PERMINTAAN</th>
                                                            </tr>
                                                            <tr style="background-color: #135589; color: #ffffff;">
                                                                <th class="text-center">A</th>
                                                                <th colspan="7" class="text-center"> JASA KONSULTASI
                                                                    METEOROLOGI</th>
                                                            </tr>
                                                            @foreach ($filterBab2a as $row)
                                                                @if (isset($row['sub_isi']))
                                                                    <tr>
                                                                        <td colspan="row"
                                                                            style="vertical-align: middle; text-align:center; background-color: #669933; color: #ffffff;">
                                                                            {{ $loop->iteration }}.
                                                                        </td>
                                                                        <td colspan="7"
                                                                            style="vertical-align: middle; text-align:center; background-color: #669933; color: #ffffff;">
                                                                            {{ $row['isi'] }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="row"
                                                                            style="vertical-align: middle; text-align:center;">
                                                                        </td>
                                                                        <td colspan="4"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['sub_isi'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['satuan'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['tarif'] }}</td>
                                                                    </tr>
                                                                @else
                                                                    <tr>
                                                                        <td scope="row"
                                                                            style="vertical-align: middle; text-align:center;">
                                                                            {{ $loop->iteration }}.</td>
                                                                        <td colspan="4"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['isi'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['satuan'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['tarif'] }}</td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            <tr style="background-color: #135589; color: #ffffff;">
                                                                <th class="text-center">B</th>
                                                                <th colspan="7" class="text-center"> JASA
                                                                    KONSULTASI
                                                                    KLIMATOLOGI</th>
                                                            </tr>
                                                            @foreach ($filterBab2b as $row)
                                                                @if (isset($row['sub_isi']))
                                                                    <tr>
                                                                        <td colspan="row"
                                                                            style="vertical-align: middle; text-align:center; background-color: #669933; color: #ffffff;">
                                                                            {{ $loop->iteration }}.
                                                                        </td>
                                                                        <td colspan="7"
                                                                            style="vertical-align: middle; text-align:center; background-color: #669933; color: #ffffff;">
                                                                            {{ $row['isi'] }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="row"
                                                                            style="vertical-align: middle; text-align:center;">
                                                                        </td>
                                                                        <td colspan="4"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['sub_isi'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['satuan'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['tarif'] }}</td>
                                                                    </tr>
                                                                @else
                                                                    <tr>
                                                                        <td scope="row"
                                                                            style="vertical-align: middle; text-align:center;">
                                                                            {{ $loop->iteration }}.</td>
                                                                        <td colspan="4"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['isi'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['satuan'] }}</td>
                                                                        <td class="text-center"
                                                                            style="vertical-align: middle;">
                                                                            {{ $row['tarif'] }}</td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
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

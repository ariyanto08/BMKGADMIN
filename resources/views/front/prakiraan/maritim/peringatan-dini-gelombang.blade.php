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
<x-webase title="Peringatan Dini Gelombang">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Prakiraan" url="home" />
        <x-template-web.bread-crumb.bread bread="Maritim" />
        <x-template-web.bread-crumb.crumb crumb="Peringatan Dini Gelombang" />
    @endslot
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix ml-5">
                <!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar news-sidebar">
                        <!-- Recent Posts -->
                        <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="sec-title-seven">
                                <h2>Peringatan Dini</h2>
                            </div>

                            <article class="post" style="padding: 0%; min-height: 33px;">
                                <!--post-meta-->
                                <h4><i class="fa fa-thin fa-chevron-right"><a href="peringatan-dini-gelombang">Gelombang Tinggi</a></i></h4>
                            </article>

                        </div>
                        <!-- Recent Posts -->
                    </aside>

                </div>
                <!--Sidebar-->
                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <!--tabs-section-->
                    <section class="tabs-section" style="padding: 0%;">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <div class="column content-column col-lg-11 col-md-12 col-sm-12">
                                    <!--Tabs Box-->
                                    <div class="tabs-box tabs-style-one">
                                        <h3 class="text-center" style="padding: 3%; letter-spacing: .2em;">
                                            PERINGATAN DINI GELOMBANG TINGGI</h3>
                                        <hr>
                                        <!--Tabs Content-->
                                        <div class="tabs-content">
                                            <div>
                                                <h1>Peringatan Gelombang Tinggi</h1>
                                            </div>

                                            <div>
                                                <p>
                                                    <b>Dikeluarkan : </b>
                                                    Tuesday, 13 December 2022 00:00
                                                </p>
                                                <p>
                                                    Berlaku mulai Tuesday, 13 December 2022 07:00 Sampai Wednesday,
                                                    14 December 2022 07:00
                                                </p>
                                            </div>

                                            <div>
                                                <h3>NARASI</h3>
                                                <P>Pola angin di wilayah Indonesia bagian utara dominan bergerak
                                                    dari Barat Laut - Timur Laut dengan kecepatan angin berkisar 5 -
                                                    25 knot, sedangkan di wilayah Indonesia bagian selatan dominan
                                                    bergerak dari Tenggara - Barat Daya dengan kecepatan angin
                                                    berkisar 5 - 25 knot. Kecepatan angin tertinggi terpantau di
                                                    Selat Malaka, Perairan utara Sabang, Perairan P. Simeulue hingga
                                                    Kep. Mentawai, dan Laut Natuna Utara.</P>
                                            </div>

                                            <div>
                                                <div>
                                                    <h3>KONDISI LAUT</h3>
                                                </div>
                                                <div class="table1 mb-6">
                                                    <h4>Area perairan dengan gelombang Tinggi
                                                        <span style="text-transform:none;"> 2.50 - 4.0 m</span>
                                                    </h4>
                                                    <br>
                                                    <div>
                                                        <table text-align="left" cellspacing="0" style="width: 100%;">
                                                            <tbody>
                                                                <tr>
                                                                    <td
                                                                        style="vertical-align:top; width:262px ; height: 60pt;">
                                                                        <ul style="margin-left: 25px;">
                                                                            <li>SELAT MALAKA BAGIAN UTARA</li>
                                                                            <li>SELAT MALAKA BAGIAN SELATAN</li>
                                                                            <li>SELAT MALAKA BAGIAN BARAT</li>
                                                                            <li>SELAT MALAKA BAGIAN TIMUR</li>
                                                                            <li>SELAT MALAKA BAGIAN TENGGARA</li>
                                                                            <li>SELAT MALAKA BAGIAN TIMUR LAUT</li>
                                                                            <li>SELAT MALAKA BAGIAN BARAT LAUT</li>
                                                                            <li>SELAT MALAKA BAGIAN SELATAN LAUT
                                                                            </li>
                                                                            <li>SELAT MALAKA BAGIAN UTARA LAUT</li>
                                                                            <li>SELAT MALAKA BAGIAN BARAT DAYA</li>
                                                                        </ul>
                                                                    </td>
                                                                    <td
                                                                        style="vertical-align:top; width:262px ; height: 60pt;">
                                                                        <ul style="margin-left: 25px;">
                                                                            <li>SELAT MALAKA BAGIAN UTARA</li>
                                                                            <li>SELAT MALAKA BAGIAN SELATAN</li>
                                                                            <li>SELAT MALAKA BAGIAN BARAT</li>
                                                                            <li>SELAT MALAKA BAGIAN TIMUR</li>
                                                                            <li>SELAT MALAKA BAGIAN TENGGARA</li>
                                                                            <li>SELAT MALAKA BAGIAN TIMUR LAUT</li>
                                                                            <li>SELAT MALAKA BAGIAN BARAT LAUT</li>
                                                                            <li>SELAT MALAKA BAGIAN SELATAN LAUT
                                                                            </li>
                                                                            <li>SELAT MALAKA BAGIAN UTARA LAUT</li>
                                                                            <li>SELAT MALAKA BAGIAN BARAT DAYA</li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="table2 mt-6">
                                                    <p>&nbsp;</p>
                                                    <h4>Area perairan dengan gelombang Tinggi
                                                        <span style="text-transform:none;"> 2.50 - 4.0 m</span>
                                                    </h4>
                                                    <div class="mt-20">
                                                        <table text-align="left" cellspacing="0"
                                                            style="width: 100%; margin-top:10px">
                                                            <tbody>
                                                                <tr>
                                                                    <td
                                                                        style="vertical-align:top; width:262px ; height: 60pt;">
                                                                        <ul style="margin-left: 25px;">
                                                                            <li>PERAIRAN BARAT P. SIMEULUE HINGGA
                                                                                KEP. MENTAWAI</li>
                                                                            <li>PERAIRAN BARAT P. ENGGANO</li>
                                                                            <li>SAMUDRA HINDIA BARAT ACEH HINGGA
                                                                                KEP. NIAS</li>
                                                                        </ul>
                                                                    </td>
                                                                    <td
                                                                        style="vertical-align:top; width:262px ; height: 60pt;">
                                                                        <ul style="margin-left: 25px;">
                                                                            <li>SAMUDRA HINDIA BARAT BENGKULU HINGGA
                                                                                LAMPUNG</li>
                                                                            <li>SAMUDRA HINDIA SELATAN BANTEN HINGGA
                                                                                JAWA TENGAH</li>
                                                                            <li>PERAIRAN KEP. ANAMBAS - KEP. NATUNA
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="table3 mt-6">
                                                    <p>&nbsp;</p>
                                                    <h4>Area perairan dengan gelombang Sangat Tinggi
                                                        <span style="text-transform:none;"> 4.0 - 6.0 m</span>
                                                    </h4>
                                                    <div class="mt-20">
                                                        <table text-align="left" cellspacing="0"
                                                            style="width: 100%; margin-top:10px">
                                                            <tbody>
                                                                <tr>
                                                                    <td
                                                                        style="vertical-align:top; width:262px ; height: 60pt;">
                                                                        <ul style="margin-left: 25px;">
                                                                            <li>PERAIRAN BARAT P. SIMEULUE HINGGA
                                                                                KEP. MENTAWAI</li>
                                                                            <li>PERAIRAN BARAT P. ENGGANO</li>
                                                                            <li>SAMUDRA HINDIA BARAT ACEH HINGGA
                                                                                KEP. NIAS</li>
                                                                        </ul>
                                                                    </td>
                                                                    <td
                                                                        style="vertical-align:top; width:262px ; height: 60pt;">
                                                                        <ul style="margin-left: 25px;">
                                                                            <li>SAMUDRA HINDIA BARAT BENGKULU HINGGA
                                                                                LAMPUNG</li>
                                                                            <li>SAMUDRA HINDIA SELATAN BANTEN HINGGA
                                                                                JAWA TENGAH</li>
                                                                            <li>PERAIRAN KEP. ANAMBAS - KEP. NATUNA
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-10 mb-10">
                                                <p>&nbsp;</p>
                                                <h3>SARAN KESELAMATAN</h3>
                                                <P>Harap diperhatikan risiko tinggi terhadap keselamatan pelayaran :
                                                    <strong> Perahu Nelayan </strong>'Kecepatan angin lebih dari 15 knot dan tinggi
                                                    gelombang di atas 1.25 m', <strong> Kapal Tongkang </strong> 'Kecepatan angin lebih
                                                    dari 16 knot dan tinggi gelombang di atas 1.5 m', <strong> Kapal Ferry </strong>
                                                    'Kecepatan angin lebih dari 21 knot dan tinggi gelombang di atas
                                                    2.5 m', <strong> Kapal Ukuran Besar </strong> seperti <strong> Kapal Kargo/Kapal Pesiar </strong>
                                                    'Kecepatan angin lebih dari 27 knot dan tinggi gelombang di atas
                                                    4.0 m'.
                                                </P>
                                                <p>&nbsp;</p>
                                                <p>Dimohon kepada masyarakat yang tinggal dan beraktivitas di
                                                    pesisir sekitar area yang berpeluang terjadi gelombang tinggi
                                                    agar tetap selalu waspada.
                                                </p>
                                            </div>
                                            <div class="mt-10 mb-10">
                                                <p>&nbsp;</p>
                                                <h1>Peringatan Dini Gelombang Tinggi</h1>
                                                <hr>
                                                <P>Peringatan dini gelombang tinggi merupakan informasi prakiraan
                                                    gelombang untuk 2 hari ke depan yang akan diinformasikan jika
                                                    terjadi gelombang tinggi lebih dari 1.25 meter dan bertahan
                                                    selama 12 jam ke depan di sekitar perairan Indonesia dan berlaku
                                                    maksimal 2 hari sejak dikeluarkan dan diperbaharui setiap ada
                                                    perubahan dan sebelum masa berlakunya habis.
                                                </P>
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

@php
    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
    function checkRouteTrue($route)
    {
        if (Route::current()->uri == $route) {
            return 'true';
        }
    }
    function checkRouteShow($route)
    {
        if (Route::current()->uri == $route) {
            return 'show';
        }
    }
@endphp

<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>

        <ul class="list-unstyled menu-categories" id="accordionExample">
            <div style="padding: 1rem 1rem 0.75rem; font-weight:bold;">Beranda</div>
            <li class="menu">
                <a href="pegawai" data-active="{{ checkRouteTrue('data_manager/admin/pegawai') }}" aria-expanded="false"
                    class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Pegawai</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="penghargaan" data-active="{{ checkRouteTrue('data_manager/admin/penghargaan') }}"
                    aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="award"></i>
                        <span>Penghargaan</span>
                    </div>
                </a>
            </li>
            <div style="padding: 1rem 1rem 0.75rem; font-weight:bold;">Prakiraan</div>
            <li class="menu">
                <a href="#cuaca" data-toggle="collapse" aria-expanded="false"
                    data-active="{{ checkRouteTrue('data_manager/admin/dini') }}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="cloud"></i>
                        <span>Cuaca</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ checkRouteShow('data_manager/admin/dini') }} {{ checkRouteShow('data_manager/admin/harianktp') }} {{ checkRouteShow('data_manager/admin/hariankku') }} {{ checkRouteShow('data_manager/admin/mingguan') }} {{ checkRouteShow('data_manager/admin/angin') }} {{ checkRouteShow('data_manager/admin/potensi') }}"
                    id="cuaca" data-parent="#accordionExample">
                    <li class="{{ checkRouteActive('data_manager/admin/dini') }}">
                        <a href="dini"> Peringatan Dini Cuaca </a>
                    </li>
                    <li class="{{ checkRouteActive('data_manager/admin/harianktp') }}">
                        <a href="harianktp"> Harian Ktp-KKU </a>
                    </li>
                    <li class="{{ checkRouteActive('data_manager/admin/mingguan') }}">
                        <a href="mingguan"> Mingguan Ketapang </a>
                    </li>
                    <li class="{{ checkRouteActive('data_manager/admin/angin') }}">
                        <a href="angin"> Angin 3000 Feet </a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#maritim" data-toggle="collapse" aria-expanded="false"
                    data-active="{{ checkRouteTrue('data_manager/admin/kecepatan') }}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="droplet"></i>
                        <span>Maritim</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ checkRouteShow('data_manager/admin/kecepatan') }} {{ checkRouteShow('data_manager/admin/pelabuhan') }} {{ checkRouteShow('data_manager/admin/pasangsurut') }}"
                    id="maritim" data-parent="#accordionExample">
                    <li class="{{ checkRouteActive('data_manager/admin/kecepatan') }}">
                        <a href="kecepatan"> Kecepatan Angin Dilaut </a>
                    </li>
                    <li class="{{ checkRouteActive('data_manager/admin/pelabuhan') }}">
                        <a href="pelabuhan"> Cuaca Pelabuhan Laut </a>
                    </li>
                    <li class="{{ checkRouteActive('data_manager/admin/pasangsurut') }}">
                        <a href="pasangsurut"> Pasang Surut Kedawanangan </a>
                    </li>
                </ul>
            </li>

            <div style="padding: 1rem 1rem 0.75rem; font-weight:bold;">Penerbangan</div>
            <li class="menu">
                <a href="penerbangan" data-active="{{ checkRouteTrue('data_manager/admin/penerbangan') }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i data-feather="send"></i>
                        <span>Penerbangan</span>
                    </div>
                </a>
            </li>

            <div style="padding: 1rem 1rem 0.75rem; font-weight:bold;">Pengamatan</div>
            <li class="menu">
                <a href="#ikhtisar" data-toggle="collapse" aria-expanded="false"
                    data-active="{{ checkRouteTrue('data_manager/admin/ikhtisarharian') }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i data-feather="thermometer"></i>
                        <span>Ikhtisar Cuaca</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ checkRouteShow('data_manager/admin/ikhtisarharian') }} {{ checkRouteShow('data_manager/admin/rangkuman') }} {{ checkRouteShow('data_manager/admin/ekstrim') }} {{ checkRouteShow('data_manager/admin/suhu') }} {{ checkRouteShow('data_manager/admin/kelembapan') }} {{ checkRouteShow('data_manager/admin/kalender') }}"
                    id="ikhtisar" data-parent="#accordionExample">
                    <li class="{{ checkRouteActive('data_manager/admin/ikhtisarharian') }}">
                        <a href="ikhtisarharian"> Ikhtisar Cuaca Harian </a>
                    </li>
                    <li class="{{ checkRouteActive('data_manager/admin/rangkuman') }}">
                        <a href="rangkuman"> Rangkuman Cuaca </a>
                    </li>
                    <li class="{{ checkRouteActive('data_manager/admin/ekstrim') }}">
                        <a href="ekstrim"> Info Cuaca Exstrim Bulanan </a>
                    </li>
                    <li class="{{ checkRouteActive('data_manager/admin/suhu') }}">
                        <a href="suhu"> Grafik Profil Suhu Udara bulanan </a>
                    </li>
                    <li class="{{ checkRouteActive('data_manager/admin/kelembapan') }}">
                        <a href="kelembapan"> Grafik Profil Kelembapan Udara bulanan </a>
                    </li>
                    <li class="{{ checkRouteActive('data_manager/admin/kalender') }}">
                        <a href="kalender"> Kalender Cuaca </a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#angin" data-toggle="collapse" aria-expanded="false"
                    data-active="{{ checkRouteTrue('data_manager/admin/lapisan') }}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="wind"></i>
                        <span>Angin</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ checkRouteShow('data_manager/admin/lapisan') }} {{ checkRouteShow('data_manager/admin/windrose') }}"
                    id="angin" data-parent="#accordionExample">
                    <li class="{{ checkRouteActive('data_manager/admin/lapisan') }}">
                        <a href="lapisan"> Lapisan 925 mb </a>
                    </li>
                    <li class="{{ checkRouteActive('data_manager/admin/windrose') }}">
                        <a href="windrose"> Diagram Windrose Bulanan </a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#hujan" data-toggle="collapse" aria-expanded="false"
                    data-active="{{ checkRouteTrue('data_manager/admin/stamet30') }}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="cloud-rain"></i>
                        <span>Curah Hujan</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ checkRouteShow('data_manager/admin/stamet30') }} {{ checkRouteShow('data_manager/admin/analisis') }} {{ checkRouteShow('data_manager/admin/peta') }}"
                    id="hujan" data-parent="#accordionExample">
                    <li class="{{ checkRouteActive('data_manager/admin/stamet30') }}">
                        <a href="stamet30"> Stamet Ketapang 30 Tahun </a>
                    </li>
                    <li class="{{ checkRouteActive('data_manager/admin/analisis') }}">
                        <a href="analisis"> Analisis Curah Hujan Bulanan </a>
                    </li>
                    <li class="{{ checkRouteActive('data_manager/admin/peta') }}">
                        <a href="peta"> Peta Normal Curah Hujan 30 Tahun </a>
                    </li>
                </ul>
            </li>

            <div style="padding: 1rem 1rem 0.75rem; font-weight:bold;">Layanan Publik</div>
            <li class="menu">
                <a href="prospel" data-active="{{ checkRouteTrue('data_manager/admin/prospel') }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i data-feather="tool"></i>
                        <span>Prosedur Pelayanan</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="infolayanan" data-active="{{ checkRouteTrue('data_manager/admin/infolayanan') }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i data-feather="tool"></i>
                        <span>Informasi Pelayanan</span>
                    </div>

                </a>
            </li>
            <li class="menu">
                <a href="pelayanandata" data-active="{{ checkRouteTrue('data_manager/admin/pelayanandata') }}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="tool"></i>
                        <span>Pelayanan Data Informasi</span>
                    </div>

                </a>
            </li>
            <li class="menu">
                <a href="prosedur" data-active="{{ checkRouteTrue('data_manager/admin/prosedur') }}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="tool"></i>
                        <span>Prosedur Pembayaran Jasa Layanan</span>
                    </div>

                </a>
            </li>
            <li class="menu">
                <a href="pelayanan" data-active="{{ checkRouteTrue('data_manager/admin/pelayanan') }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i data-feather="tool"></i>
                        <span>Pelayanan</span>
                    </div>

                </a>
            </li>

            <div style="padding: 1rem 1rem 0.75rem; font-weight:bold;">Publikasi</div>
            <li class="menu">
                <a href="publikasi" data-active="{{ checkRouteTrue('data_manager/admin/publikasi') }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i data-feather="globe"></i>
                        <span>Artikel Buletin</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="berita" data-active="{{ checkRouteTrue('data_manager/admin/berita') }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i data-feather="map"></i>
                        <span>Berita</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="edukasi" data-active="{{ checkRouteTrue('data_manager/admin/edukasi') }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i data-feather="book-open"></i>
                        <span>Edukasi</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="transparansi" data-active="{{ checkRouteTrue('data_manager/admin/transparansi') }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i data-feather="square"></i>
                        <span>Transparansi Kerja</span>
                    </div>
                </a>
            </li>

            <div style="padding: 1rem 1rem 0.75rem; font-weight:bold;">Galeri</div>
            <li class="menu">
                <a href="foto" data-active="{{ checkRouteTrue('data_manager/admin/foto') }}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="image"></i>
                        <span>Foto</span>
                    </div>
                </a>
            </li>

            <div style="padding: 1rem 1rem 0.75rem; font-weight:bold;">Pengguna</div>
            <li class="menu">
                <a href="user" data-active="{{ checkRouteTrue('data_manager/admin/user') }}" aria-expanded="false"
                    class="dropdown-toggle">
                    <div class="">
                        <i data-feather="users"></i>
                        <span>Admin</span>
                    </div>
                </a>
            </li>

        </ul>

    </nav>

</div>

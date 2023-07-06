
<!-- Header Top -->
<div class="header-top">
    <div class="auto-container clearfix">
        <!--Top Left-->
        <div class="top-left pull-left">
            <ul class="links-nav clearfix">
                <li><a href="" class="fa fa-twitter" style="color: white;"></a></li>
                <li><a href="" class="fa fa-facebook" style="color: white;"></a></li>
                <li><a href="" class="fa fa-youtube" style="color: white;"></a></li>
                <li><a href="" class="fa fa-instagram" style="color: white;"></a></li>
                <li><a href="" class="fa fa-whatsapp" style="color: white;"></a></li>
            </ul>
        </div>

        <!--Top Right-->

        <!-- <div class="top-right pull-right"> -->

        <!-- Search Form -->

        <!-- <div class="search-box">
            <form method="post" action="index">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search your Keyword">
                    <button type="submit"><span class="icon fa fa-search"></span></button>
                </div>
            </form>
        </div>
    </div> -->
    </div>
</div>
<!-- Header Top End -->

<!--Header-Upper-->
<div class="header-upper">
    <div class="auto-container">
        <div class="clearfix">
            <div class="row">
                <div class="col-md-1">
                    <!--Logo-->
                    <div class="logo pull-left ml-5">
                        <a href="home" class="img-responsive"><img
                                src="{{ url('public') }}/assets_front/images/logo bmkg.png" , height="53px"
                                alt="Stasiun Meteorologi Klimatologi dan Geofisika"
                                title="Stasiun Meteorologi Klimatologi dan Geofisika"></a>
                    </div>
                </div>
                <div class="col-md-11" style="margin-top: 20px;">
                    <div class="pull-left">
                        <span>
                            <strong> BADAN METEOROLOGI,<br>KLIMATOLOGI, DAN GEOFISIKA </strong>
                        </span>
                    </div>
                    <!--Right Col-->
                    <div class="pull-right upper-right clearfix">
                        <span>
                            Stasiun Meteorologi Kelas III <br> Rahadi Oesman Ketapang
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header Top -->
<div class="header-upper" style="background-color: #103d68;">
    <div class="auto-container">
        <div class="clearfix">
            <div class="row">
                <div class="col-md-12">
                    <!--Right Col-->
                    <div class="nav justify-content-center">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown">
                                        <a href="#" style="color: white !important">Beranda</a>
                                        <ul>
                                            <li><a href="{{url('beranda/profil-kantor')}}">Profil Kantor</a></li>
                                            <li><a href="{{url('beranda/sejarah-kantor')}}">Sejarah Kantor</a></li>
                                            <li><a href="{{url('beranda/pegawai')}}">Pegawai</a></li>
                                            <li><a href="{{url('beranda/penghargaan')}}">Penghargaan</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#" style="color: white !important">Prakiraan</a>
                                        <ul>
                                            <li class="dropdown">
                                                <a>Cuaca</a>
                                                <ul>
                                                    <li><a href="{{url('prakiraan/cuaca/peringatan-dini-cuaca')}}">Peringatan Dini Cuaca</a></li>
                                                    <li><a href="{{url('prakiraan/cuaca/prakiraan-cuaca-berbasis-dampak')}}">Prakiraan
                                                            Cuaca Berbasis Dampak</a></li>
                                                    <li><a href="{{url('prakiraan/cuaca/prakiraan-harian-ketapang')}}">Prakiraan
                                                            Harian Ketapang</a></li>
                                                    <li><a href="{{url('prakiraan/cuaca/prakiraan-harian-kayong-utara')}}">Prakiraan
                                                            Harian Kayong Utara</a></li>
                                                    <li><a href="{{url('prakiraan/cuaca/prakiraan-mingguan-ketapang')}}">Prakiraan
                                                            Mingguan Ketapang</a></li>
                                                    <li><a href="{{url('prakiraan/cuaca/prakiraan-angin-3000-feet')}}">Prakiraan Angin 3000
                                                            Feet</a></li>
                                                    <li><a href="{{url('prakiraan/cuaca/potensi-hujan-indonesia')}}">Potensi Hujan
                                                            Indonesia</a></li>
                                                    <li><a href="{{url('prakiraan/cuaca/potensi-pertumbuhan-awan-hujan')}}">Potensi
                                                            Pertumbuhan Awan Hujan</a></li>
                                                    <li><a href="{{url('prakiraan/cuaca/potensi-kemudahan-karhutla')}}">Potensi
                                                            Kemudahan Karhutla</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a>Iklim</a>
                                                <ul>
                                                    <li><a href="{{url('prakiraan/iklim/prakiraan-curah-hujan-dasarian')}}">Prakiraan
                                                            Curah Hujan Dasarian</a></li>
                                                    <li><a href="{{url('prakiraan/iklim/prakiraan-curah-hujan-bulanan')}}">Prakiraan
                                                            Curah Hujan Bulanan</a></li>
                                                    <li><a href="{{url('prakiraan/iklim/prakiraan-sifat-hujan')}}">Prakiraan Sifat
                                                            Hujan</a></li>
                                                    <li><a href="{{url('prakiraan/iklim/prakiraan-musim')}}">Prakiraan Musim</a>
                                                    </li>
                                                    <li><a href="{{url('prakiraan/iklim/potensi-banjir-dasarian')}}">Potensi
                                                            Banjir Dasarian</a>
                                                    </li>
                                                    <li><a href="{{url('prakiraan/iklim/potensi-banjir-bulanan')}}">Potensi
                                                            Banjir Bulanan</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a>Maritim</a>
                                                <ul>
                                                    <li><a href="{{url('prakiraan/maritim/peringatan-dini-gelombang')}}">Peringatan
                                                            Dini Gelombang Tinggi</a></li>
                                                    <li><a href="{{url('prakiraan/maritim/prakiraan-tinggi-gelombang')}}">Prakiraan
                                                            Tinggi Gelombang</a></li>
                                                    <li><a href="{{url('prakiraan/maritim/prakiraan-cepat-angin-laut')}}">Prakiraan
                                                            Kecepatan Angin di Laut</a></li>
                                                    <li><a href="{{url('prakiraan/maritim/prakiraan-cuaca-pelabuhan-laut')}}">Prakiraan
                                                            Cuaca Pelabuhan Laut</a></li>
                                                    <li><a href="{{url('prakiraan/maritim/pasang-surut-kendawangan')}}">Pasang Surut
                                                            Kendawangan</a></li>
                                                    <li><a href="{{url('prakiraan/maritim/peta-interaktif-prakiraan-maritim')}}">Peta Interaktif Prakiraan Maritim</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#"
                                            style="color: white !important">Pengamatan</a>
                                        <ul>
                                            <li class="dropdown">
                                                <a href="">Citra Satelit</a>
                                                <ul>
                                                    <li><a href="kalimantan-barat">Kalimantan Barat</a>
                                                    </li>
                                                    <li><a href="cloud-type-wilayah-indonesia">Cloud
                                                            Type Wilayah Indonesia</a></li>
                                                    <li><a href="sebaran-asap">Sebaran Asap</a></li>
                                                    <li><a href="curah-hujan-akumulasi">Curah Hujan
                                                            Akumulasi</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Citra Radar Cuaca</a>
                                                <ul>
                                                    <li><a href="indonesia">Indonesia</a></li>
                                                    <li><a href="sintang">Sintang</a></li>
                                                    <li><a href="pontianak">Pontianak</a></li>
                                                    <li><a href="pangkalanbun">Pangkalanbun</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="titik-panas-kalimantan-barat">Titik Panas
                                                    Kalimantan Barat</a></li>
                                            <li class="dropdown">
                                                <a href="#">Ikhtisar Cuaca</a>
                                                <ul>
                                                    <li><a href="#">Ikhtisar Cuaca harian</a></li>
                                                    <li><a href="#">Rangkuman Cuaca</a></li>
                                                    <li><a href="#">Info Cuaca Ekstrim Bulanan</a></li>
                                                    <li><a href="#">Grafik Profil Suhu Udara bulanan</a>
                                                    </li>
                                                    <li><a href="#">Grafik Profil Kelembapan Udara
                                                            Bulanan</a></li>
                                                    <li><a href="#">Kalender Cuaca</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Angin</a>
                                                <ul>
                                                    <li><a href="#">Lapisan 925 mb</a></li>
                                                    <li><a href="#">Diagram Windrose Bulanan</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Curah Hujan</a>
                                                <ul>
                                                    <li><a href="#">Stamet Ketapang 30 Tahun</a></li>
                                                    <li><a href="analisis-curah-hujan-bulanan">Analisis
                                                            Curah Hujan Bulanan</a></li>
                                                    <li><a href="#">Peta Normal Curah Hujan 30 Tahun</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#"
                                            style="color: white !important">Penerbangan </a>
                                        <ul>
                                            <li class="dropdown">
                                                <a href="#">Peringatan Dini Cuaca Penerbangan</a>
                                                <ul>
                                                    <li><a href="#">Sigmet</a></li>
                                                    <li><a href="#">Abu Vulkanik</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Pengamatan Cuaca Penerbangan</a>
                                                <ul>
                                                    <li><a href="#">Cuaca Terkini Bandara</a></li>
                                                    <li><a href="#">METAR / SPECI</a></li>
                                                    <li><a href="#">Cuaca Bandara Indonesia</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Prakiraan Cuaca Penerbangan</a>
                                                <ul>
                                                    <li><a href="#">Prediksi Awan CB</a></li>
                                                    <li><a href="#">TAF</a></li>
                                                    <li><a href="#">Chart Wind/Temp</a></li>
                                                    <li><a href="#">Chart Medium SIGWX</a></li>
                                                    <li><a href="#">Chart High SIGWX</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Flight Document</a></li>
                                            <li><a href="#">Aerodrome Climatolgy Summary</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="#" style="color: white !important">Layanan
                                            Publik</a>
                                        <ul>
                                            <li><a href="#">Prosedur Layanan</a></li>
                                            <li><a href="#">Informasi Layanan</a></li>
                                            <li class="dropdown">
                                                <a href="#">Pelayanan Data Informasi</a>
                                                <ul>
                                                    <li><a href="#">Pelayanan untuk Instansi/Perusahaan</a>
                                                    </li>
                                                    <li><a href="#">Pelayanan untuk Pleajar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Prosedur Pembayaran Jasa Layanan</a></li>
                                            <li class="dropdown">
                                                <a href="#">Pelayanan</a>
                                                <ul>
                                                    <li><a href="#">Contoh Surat Pengantar</a></li>
                                                    <li><a href="#">Regulasi</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#" style="color: white !important">Publikasi</a>
                                        <ul>
                                            <li><a href="{{url('publikasi/berita')}}">Berita</a></li>
                                            <li><a href="{{url('publikasi/artikel')}}">Artikel</a></li>
                                            <li><a href="{{url('publikasi/buletin')}}">Buletin</a></li>
                                            <li><a href="{{url('publikasi/edukasi-cuaca')}}">Edukasi Cuaca</a></li>
                                            <li><a href="{{url('publikasi/transparansi-kerja')}}">Transparansi Kerja</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a style="color: white !important">Galeri</a>
                                        <ul>
                                            <li><a href="{{url('galeri/foto')}}">Foto</a></li>
                                            <li><a href="{{url('galeri/video')}}">Video</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('kontak')}}" style="color: white !important">Kontak</a></li>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Top End -->

<!--Sticky Header-->
<div class="sticky-header">
    <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left mr-5">
            <a href="home" class="img-responsive"><img src="{{ url('public') }}/assets_front/images/logo bmkg.png"
                    , height="53px" alt="Stasiun Meteorologi Klimatologi dan Geofisika"
                    title="Stasiun Meteorologi Klimatologi dan Geofisika"></a>
        </div>

        <!--Right Col-->
        <div class="right-col pull-right">
            <!-- Main Menu -->
            <nav class="main-menu">
                <div class="navbar-header">
                    <!-- Toggle Button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <li class="current dropdown"><a href="#">Beranda</a>
                            <ul>
                                <li><a href="{{url('beranda/profil-kantor')}}">Profil Kantor</a></li>
                                <li><a href="{{url('beranda/sejarah-kantor')}}">Sejarah Kantor</a></li>
                                <li><a href="{{url('beranda/pegawai')}}">Pegawai</a></li>
                                <li><a href="{{url('beranda/penghargaan')}}">Penghargaan</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Prakiraan</a>
                            <ul>
                                <li class="dropdown">
                                    <a>Cuaca</a>
                                    <ul>
                                        <li><a href="{{url('prakiraan/cuaca/peringatan-dini-cuaca')}}">Peringatan Dini Cuaca</a></li>
                                        <li><a href="{{url('prakiraan/cuaca/prakiraan-cuaca-berbasis-dampak')}}">Prakiraan Cuaca
                                                Berbasis Dampak</a></li>
                                        <li><a href="{{url('prakiraan/cuaca/prakiraan-harian-ketapang')}}">Prakiraan Harian
                                                Ketapang</a></li>
                                        <li><a href="{{url('prakiraan/cuaca/prakiraan-harian-kayong-utara')}}">Prakiraan Harian
                                                Kayong Utara</a></li>
                                        <li><a href="{{url('prakiraan/cuaca/prakiraan-mingguan-ketapang')}}">Prakiraan Mingguan Ketapang</a></li>
                                        <li><a href="{{url('prakiraan/cuaca/prakiraan-angin-3000-feet')}}">Prakiraan Angin 3000 Feet</a></li>
                                        <li><a href="{{url('prakiraan/cuaca/potensi-hujan-indonesia')}}">Potensi Hujan
                                                Indonesia</a></li>
                                        <li><a href="{{url('prakiraan/cuaca/potensi-pertumbuhan-awan-hujan')}}">Potensi
                                                Pertumbuhan Awan Hujan</a></li>
                                        <li><a href="{{url('prakiraan/cuaca/potensi-kemudahan-karhutla')}}">Potensi Kemudahan
                                                Karhutla</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a>Iklim</a>
                                    <ul>
                                        <li><a href="{{url('prakiraan/iklim/prakiraan-curah-hujan-dasarian')}}">Prakiraan Curah
                                                Hujan Dasarian</a></li>
                                        <li><a href="{{url('prakiraan/iklim/prakiraan-curah-hujan-bulanan')}}">Prakiraan Curah
                                                Hujan Bulanan</a></li>
                                        <li><a href="{{url('prakiraan/iklim/prakiraan-sifat-hujan')}}">Prakiraan Sifat Hujan</a>
                                        </li>
                                        <li><a href="prakiriklim/prakiraan-musim">aan/Prakiraan Musim</a></li>
                                        <li><a href="{{url('prakiraan/iklim/potensi-banjir-dasarian')}}">Potensi Banjir
                                                Dasarian</a></li>
                                        <li><a href="{{url('prakiraan/iklim/potensi-banjir-bulanan')}}">Potensi Banjir
                                                Bulanan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a>Maritim</a>
                                    <ul>
                                        <li><a href="{{url('prakiraan/maritim/peringatan-dini-gelombang')}}">Peringatan Dini
                                                Gelombang Tinggi</a></li>
                                        <li><a href="{{url('prakiraan/maritim/prakiraan-tinggi-gelombang')}}">Prakiraan Tinggi
                                                Gelombang</a></li>
                                        <li><a href="{{url('prakiraan/maritim/prakiraan-cepat-angin-laut')}}">Prakiraan Kecepatan
                                                Angin di Laut</a></li>
                                        <li><a href="{{url('prakiraan/maritim/prakiraan-cuaca-pelabuhan-laut')}}">Prakiraan Cuaca
                                                Pelabuhan Laut</a></li>
                                        <li><a href="{{url('prakiraan/maritim/pasang-surut-kendawangan')}}">Pasang Surut
                                                Kendawangan</a></li>
                                        <li><a href="{{url('prakiraan/maritim/peta-interaktif-prakiraan-maritim')}}">Peta Interaktif Prakiraan Maritim</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Pengamatan</a>
                            <ul>
                                <li class="dropdown">
                                    <a href="#">Citra Satelit</a>
                                    <ul>
                                        <li><a href="kalimantan-barat">Kalimantan Barat</a></li>
                                        <li><a href="cloud-type-wilayah-indonesia">Cloud Type Wilayah
                                                Indonesia</a></li>
                                        <li><a href="sebaran-asap">Sebaran Asap</a></li>
                                        <li><a href="curah-hujan-akumulasi">Curah Hujan Akumulasi</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Citra Radar Cuaca</a>
                                    <ul>
                                        <li><a href="indonesia">Indonesia</a></li>
                                        <li><a href="sintang">Sintang</a></li>
                                        <li><a href="pontianak">Pontianak</a></li>
                                        <li><a href="pangkalanbun">Pangkalanbun</a></li>
                                    </ul>
                                </li>
                                <li><a href="titik-panas-kalimantan-barat">Titik Panas Kalimantan
                                        Barat</a></li>
                                <li class="dropdown">
                                    <a href="#">Ikhtisar Cuaca</a>
                                    <ul>
                                        <li><a href="#">Ikhtisar Cuaca harian</a></li>
                                        <li><a href="#">Rangkuman Cuaca</a></li>
                                        <li><a href="#">Info Cuaca Ekstrim Bulanan</a></li>
                                        <li><a href="#">Grafik Profil Suhu Udara bulanan</a></li>
                                        <li><a href="#">Grafik Profil Kelembapan Udara Bulanan</a></li>
                                        <li><a href="#">Kalender Cuaca</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Angin</a>
                                    <ul>
                                        <li><a href="#">Lapisan 925 mb</a></li>
                                        <li><a href="#">Diagram Windrose Bulanan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Curah Hujan</a>
                                    <ul>
                                        <li><a href="#">Stamet Ketapang 30 Tahun</a></li>
                                        <li><a href="analisis-curah-hujan-bulanan">Analisis Curah Hujan
                                                Bulanan</a></li>
                                        <li><a href="#">Peta Normal Curah Hujan 30 Tahun</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Penerbangan </a>
                            <ul>
                                <li class="dropdown">
                                    <a href="#">Peringatan Dini Cuaca Penerbangan</a>
                                    <ul>
                                        <li><a href="#">Sigmet</a></li>
                                        <li><a href="#">Abu Vulkanik</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Pengamatan Cuaca Penerbangan</a>
                                    <ul>
                                        <li><a href="#">Cuaca Terkini Bandara</a></li>
                                        <li><a href="#">METAR / SPECI</a></li>
                                        <li><a href="#">Cuaca Bandara Indonesia</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Prakiraan Cuaca Penerbangan</a>
                                    <ul>
                                        <li><a href="#">Prediksi Awan CB</a></li>
                                        <li><a href="#">TAF</a></li>
                                        <li><a href="#">Chart Wind/Temp</a></li>
                                        <li><a href="#">Chart Medium SIGWX</a></li>
                                        <li><a href="#">Chart High SIGWX</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Flight Document</a></li>
                                <li><a href="#">Aerodrome Climatolgy Summary</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#">Layanan Publik</a>
                            <ul>
                                <li><a href="#">Prosedur Layanan</a></li>
                                <li><a href="#">Informasi Layanan</a></li>
                                <li class="dropdown">
                                    <a href="#">Pelayanan Data Informasi</a>
                                    <ul>
                                        <li><a href="#">Pelayanan untuk Instansi/Perusahaan</a></li>
                                        <li><a href="#">Pelayanan untuk Pleajar</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Prosedur Pembayaran Jasa Layanan</a></li>
                                <li class="dropdown">
                                    <a href="#">Pelayanan</a>
                                    <ul>
                                        <li><a href="#">Contoh Surat Pengantar</a></li>
                                        <li><a href="#">Regulasi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Publikasi</a>
                            <ul>
                                <li><a href="{{url('publikasi/berita')}}">Berita</a></li>
                                <li><a href="{{url('publikasi/artikel')}}">Artikel</a></li>
                                <li><a href="{{url('publikasi/buletin')}}">Buletin</a></li>
                                <li><a href="{{url('publikasi/edukasi-cuaca')}}">Edukasi Cuaca</a></li>
                                <li><a href="{{url('publikasi/transparansi-kerja')}}">Transparansi Kerja</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a>Galeri</a>
                            <ul>
                                <li><a href="{{url('galeri/foto')}}">Foto</a></li>
                                <li><a href="{{url('galeri/video')}}">Video</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('kontak')}}">Kontak</a></li>
                </div>
            </nav><!-- Main Menu End-->
        </div>

    </div>
</div>
<!--End Sticky Header-->

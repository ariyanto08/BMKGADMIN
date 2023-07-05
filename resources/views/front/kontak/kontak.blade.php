<x-webase title="Kontak">
    @slot('breadcrumb')
        <x-template-web.bread-crumb.bread bread="Beranda" url="home" />
        <x-template-web.bread-crumb.crumb crumb="Kontak" />
    @endslot
    <section class="contact-info-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-home-1"></span>
                        </div>

                        <h3>Alamat Kami</h3>
                        <div class="text">Jl. Pattimura, Kali Nilam, Kec. Delta Pawan, Kabupaten Ketapang,
                            Kalimantan Barat 78112</div>
                    </div>
                </div>

                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box wow zoomInStable" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-mail-3"></span>
                        </div>

                        <h3>E-mail Kami</h3>
                        <div class="text">bmkgketapang@gmail.com<br><br></div>
                    </div>
                </div>

                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box wow zoomInStable" data-wow-delay="1000ms" data-wow-duration="1500ms">
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-technology"></span>
                        </div>

                        <h3>Nomor Telepon </h3>
                        <div class="text"> 0811-5787-121 <br><br></div>
                    </div>
                </div>

                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box wow zoomInStable" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <!--icon-box-->
                        <div class="icon-box">
                            <span style="margin-top: 19px;" class="fa fa-instagram"></span>
                        </div>

                        <h3>Instagram</h3>
                        <div class="text">bmkgketapang<br><br></div>
                    </div>
                </div>

                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box wow zoomInStable" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <!--icon-box-->
                        <div class="icon-box">
                            <span style="margin-top: 19px;" class="fa fa-facebook"></span>
                        </div>

                        <h3>Facebook</h3>
                        <div class="text">Stasiun Meteorologi Ketapang<br><br></div>
                    </div>
                </div>

                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box wow zoomInStable" data-wow-delay="1000ms" data-wow-duration="1500ms">
                        <!--icon-box-->
                        <div class="icon-box">
                            <span style="margin-top: 19px;" class="fa fa-twitter"></span>
                        </div>

                        <h3>Twitter </h3>
                        <div class="text"> @BMKGKetapang <br><br></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section">
        <div class="map-outer">

            <!--Map Canvas-->
            <div class="map-canvas" style="position: relative;
                height: 100%; width: 100%;
                overflow: hidden;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15951.242907634254!2d109.9620999!3d-1.8176789!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6eaeea18dd7c08b8!2sStasiun%20Meteorologi%20Ketapang!5e0!3m2!1sid!2sid!4v1671294137770!5m2!1sid!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" style="position: absolute;
                    top: 0;
                    left: 0;
                    width: 100% !important;
                    height: 100% !important;"></iframe>
            </div>

        </div>
    </section>
</x-webase>

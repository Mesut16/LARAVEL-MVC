@extends('frontend.app')
@section('tedavi6')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('frontend/assets/img') }}/about-header.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>KAPAKLI BRAKETLER</h2>
            <ol>
                <li><a href="index.html">Anasayfa</a></li>
                <li>Kapaklı Braketler</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="slides-1 portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/img') }}/cards-7.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/img') }}/cards-8.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/img') }}/cards-9.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/img') }}/cards-10.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-description">
                        <p>
                            Klasik braketlere göre mekanik üstünlükleri olan özellikli braket sistemleridir. <br>

                            Sabit ortodontik tedavinin temelini, dişlerin üzerine yapıştırılan braketler ve bunların
                            içerisinden geçen ark teli oluşturur.<br><br>

                            Klasik braket sistemlerinde, telin braket düzeneğine ayrı küçük bir tel parçası ya da elastik
                            halka ile bağlanması gerekmektedir. Bu bağlanma arada bir sürtünme oluşmasına neden olmaktadır.
                            Kapaklı braketlerde ise özel kilit mekanizması sayesinde ilave bir bağlanma sistemine ihtiyaç
                            duyulmaz, tel braket içerisinde daha rahat hareket eder ve sürtünme azalmış olur.Böylece hafif
                            kuvvetlerle daha etkin ve daha hızlı diş hareketi elde etmek mümkün olur ve tedavi süresinin
                            kısalmasına katkıda bulunur.<br><br>

                            Kapaklı sistemlerde ark teli braket içerisinde daha uzun süre aktif kalabilmekte ve hastanın
                            randevu aralıkları dört hafta yerine, beş ya da altı haftaya kadar uzatılabilmektedir.<br><br>

                            Ayrıca kapak mekanizmaları kolaylıkla açılıp kapatılabildiği için tedavi seansları daha kısa
                            sürer, dolayısı ile hastanın koltukta geçirdiği süre kısalır.<br><br>

                            Kapaklı braketlerin tüm bu avantajları nedeniyle ortodontik tedavide kullanımları gün geçtikçe
                            yaygınlaşmaktadır. Metal, estetik ve lingual braketlerin tümünde kapaklı sistemler mevcuttur.
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection

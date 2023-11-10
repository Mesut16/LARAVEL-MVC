@extends('frontend.app')
@section('tedavi1')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('frontend/assets/img') }}/about-header.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>ORTOGNATİK CERRAHİ</h2>
            <ol>
                <li><a href="index.html">Anasayfa</a></li>
                <li>ORTOGNATİK CERRAHİ</li>
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
                                <img src="{{ asset('frontend/assets/img') }}/cards-13.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/img') }}/cards-10.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <p>
                        Birbirleriyle ve yüzün bütünüyle uyumlu olmayan çene ilişkilerinin, cerrahi operasyonlar
                        yardımıyla düzeltilmesi işlemidir.

                        Alt ve üst çene büyümesi yavaş ve aşamalı olarak gerçekleşen bir süreçtir. Bu süreçte çenelerin
                        normalden fazla ya da az büyümesi söz konusu olabilir. Büyümenin tamamıyla sona erdiği
                        bireylerde (yaklaşık 18-20 yaş) çeneleri ilgilendiren böyle bir problem var ise ancak cerrahi
                        destekli ortodontik tedavi ile düzeltilebilmektedir.
                    </p>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-description">


                        <h2>ORTOGNATİK CERRAHİNİN AŞAMALARI</h2>
                        <p>
                        <h5><Strong>KRİTİK MUAYENE</Strong></h5>
                        Ortognatik cerrahi uygulanacak hastalarda detaylı bir genel değerlendirme yapılır. Hastadan
                        röntgen filmleri, fotoğraflar ve alçı modelleri içeren kayıtlar alınır ve bu kayıtlar üzerinde
                        ölçümler yapılır. Bunu medikal bir değerlendirme takip eder ve cerrahiye veya genel anesteziye
                        engel herhangi bir durum olup olmadığı değerlendirilir.
                        </p>
                        <p>
                        <h5><Strong>CERRAHİ ÖNCESİ ORTODONTİK TEDAVİ</Strong></h5>
                        Ortodontist, belirlenen planlama doğrultusunda tedaviyi uygulayarak alt ve üst dişlerin
                        sıralanmasını sağlar. Bu aşama hastanın anomalisinin şiddetine göre ortalama olarak 10-18 ay
                        sürer. Bu süre sonunda çenelerin hangi yöne ve kaç mm hareket ettirileceği tespit edilir ve
                        ameliyat esnasında kullanılacak rehber plak hazırlanır.
                        </p>
                        <p>
                        <h5><Strong>CERRAHİ ÖNCESİ ORTODONTİK TEDAVİ</Strong></h5>
                        Genel anestezi altında, cerrah tarafından çeneler istenilen konuma getirilir. Operasyon sonrası
                        yaklaşık 3-5 gün kadar hastanede kalınır ve daha sonra hasta taburcu edilir.
                        </p>
                        <p>
                        <h5><Strong>KRİTİK MUAYENE</Strong></h5>
                        Cerrahi sonrası son düzeltmeler ortodontist tarafından tamamlanır ve 1-3 ay içerisinde hastanın
                        braketleri çıkartılarak tedavi bitirilir.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection

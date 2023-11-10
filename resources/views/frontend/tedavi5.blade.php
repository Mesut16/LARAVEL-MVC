@extends('frontend.app')
@section('tedavi5')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('frontend/assets/img') }}/about-header.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>ESTETİK BRAKETLER</h2>
            <ol>
                <li><a href="index.html">Anasayfa</a></li>
                <li>Estetik Braketler</li>
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
                            Estetik braketler, görünümleri diş rengine daha benzer olan ve klasik metal braketlere göre daha
                            az belirgin olan ortodontik tedavi araçlarıdır. Özellikle erişkin bireyler, metal brakete bağlı
                            estetik kaygıları nedeniyle ortodontik tedavilerini ertelemekte ya da protez yaptırmayı
                            düşünmektedirler. Estetik braketler bu bireyler için tedaviye ilgiyi arttıran bir çözüm olarak
                            görünmektedir. <br><br>

                            Estetik braketler porselen, safir, kompozit, gibi farklı metaryellerden üretilebilmektedir.
                            Dayanıklılıkları, işlevsellikleri ve görünürlükleri metaryele bağlı olarak değişkenlik
                            göstermekle birlikte, hepsinin ortak özelliği daha az görünür olmalarıdır. Bu braketlerle
                            birlikte diş renginde ark tellerinin kullanılabilmesi , estetik avantajları daha üst düzeye
                            taşımıştır. <br><br>

                            Estetik braketlerin dezavantajları ise daha maliyetli olmaları ve metal braketlere oranla
                            mekanik dezavantajlarının bulunmasıdır.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection

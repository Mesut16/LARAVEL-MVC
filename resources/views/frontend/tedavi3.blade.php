@extends('frontend.app')
@section('tedavi3')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('frontend/assets/img') }}/about-header.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>YETİŞKİNLERDE ORTODONTİK TEDAVİ</h2>
            <ol>
                <li><a href="index.html">Anasayfa</a></li>
                <li>Yetişkinlerde Ortodontik Tedavi</li>
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
                    <div class="portfolio-description">
                        <p>
                            Yetişkin bireylerde dişleri ilgilendiren çapraşıklık ve uyumsuzluklar, her yaşta ortodontik
                            tedavi ile düzeltilebilir. Son yıllarda ortodontik tedavi gören her 5 hastadan 1 tanesinin 21
                            yaş ve üzerinde olduğu belirlenmiştir. Çeneleri ilgilendiren iskeletsel bir anomali söz konusu
                            ise, ortodontik tedaviyi destekleyen cerrahi yaklaşımlara ihtiyaç duyulabilir. <br>

                            Güzel bir gülümsemeyle gelen özgüven, bireylerin sosyal hayatını olumlu yönde etkilemektedir.
                            Dişlerinin görünüşünden mutlu olan kişilerin yaşam kalitelerinin artmasıyla meslek hayatlarında
                            ve kişisel ilişkilerinde daha başarılı oldukları gözlemlenmiştir.<br>


                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-description">
                        <p>
                            Gülümsediğinde kötü göründüğünü düşünen bireylerin, konuşma ve gülümseme konusunda daha çekingen
                            davrandığı, problemlerini maskeleyecek biçimde dudakların kapalı olduğu bir gülümseme
                            geliştirdikleri ya da gülerken elleriyle ağızlarını gizledikleri gözlemlenmiştir.<br>

                            Erişkin bireyler, braket ve tellerin estetik görünmediğini düşünerek; ortodontik tedaviyi
                            reddetmekte ve mevcut problemiyle yaşamakta ya da dişlerin üzerine kaplama yaptırarak protezle
                            estetik görüntüye erişme yoluna gitmektedir. Her iki bakış açısı da uzun dönemde diş ve çevre
                            dokuların sağlığını olumsuz yönde etkileyen, hatalı yaklaşımlardır.
                        </p>
                        <h4 style="text-align: center; color:rgb(22, 80, 131)">GÖRÜNMEYEN TELLER VAR MI?</h4>
                        <p>
                            Günümüzde seramik braketler dediğimiz diş rengindeki braketler, oldukça estetiktir. <br>

                            Lingual ortodontik tedavi yönteminde; birtakım özel braketler ve teller dişlerin görünür ön
                            yüzeyleri yerine, iç yüzeylerine yapıştırılmaktadır.<br>

                            Invisaligne sisteminde dişlere şeffaf plaklar hazırlanmakta ve bu plaklarla tedavi
                            yürütülmektedir.<br>

                            Tüm bu tekniklerin detayları için lütfen braket çeşitleri bölümüne bakınız.
                        </p>
                        <h4 style="text-align: center; color:rgb(22, 80, 131)">TEDAVİ OLMAZSAM?</h4>
                        <p>
                            Dişler düzgün sıralanmadığından diş fırçalama esnasında tüm diş yüzeylerine ulaşmak mümkün
                            olmayabilir. Buna bağlı olarak diş çürükleri ve dişeti hastalıkları oluşabilir. Yine çenelerin
                            ve dişlerin yanlış konumlanmasına bağlı olarak çene ekleminde ağrı ve ses şikayetleri
                            gelişebilir. Tüm bunların yanı sıra tedavi olmadığı için özgüven sorunu yaşayan birçok bireyin,
                            tedavi sonrasında psikolojik olarak kendini daha iyi hissettiği bilimsel olarak da
                            kanıtlanmıştır.
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection

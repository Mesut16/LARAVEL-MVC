@extends('frontend.app')
@section('tedavi4')
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
                            Bu gruptaki çocuklar karışık dişlenme dönemindedir. Ağızda hem süt dişleri hem de daimi dişer
                            birlikte yer almaktadır. 6-7 yaşlarında ilk olarak süt kesici dişler düşer ve yerlerini daimi
                            kesici dişlere bırakırlar. Bu süreç tüm süt dişleri düşüp daimi dişler ağızda yer alıncaya kadar
                            devam eder ve ortalama olarak 11-12 yaşında sona erer. <br>

                            Bu dönemde yapılan ortodontik muayeneler, problemlerin erken tespit edilebilmesi adına
                            önemlidir. Böylece ortodontik anomalilerin oluşumu engellenebilir ya da şiddeti azaltılıp daha
                            sonraki tedavi ihtiyacı süresi kısaltılabilir.<br>

                            Karışık dişlenme döneminde yapılan ortodontik müdahaleler genellikle koruyucu ve önleyici
                            ortodontik tedavilerdir.
                        </p>
                    </div>


                </div>

                <div class="col-lg-6">
                    <div class="portfolio-description">
                        <h4 style="text-align: center; color:rgb(22, 80, 131)">KORUYUCU ORTODONTİK TEDAVİ</h4>
                        <p>
                            Dişlerde çapraşıklıkların ve dişler arası uyumsuzlukların oluşumunun engellenmesi için yapılan
                            tedavilerdir. Zamanı geldiği halde düşmeyen bir süt dişinin çekimi bu tarz bir yaklaşımdır. Yine
                            zamanından önce çekilen bir süt dişine ait yerin, daimi diş sürünceye kadar ortodontik apareyler
                            aracılığı ile korunması, koruyucu ortodontik tedavidir. Bu tür apareylere yer tutucu adı
                            verilir. Yer tutucular sabit olup dişe yapıştırılabilirler, ya da hareketli plak şeklinde
                            hazırlanabilirler.
                        </p>
                        <h4 style="text-align: center; color:rgb(22, 80, 131)">ÖNLEYİCİ ORTODONTİK TEDAVİ</h4>
                        <p>
                            Gelişmekte olan ortodontik problemlerin daha ciddi boyutlara erişmesini engellemek için yapılan
                            tedavilerdir. Amaç problemin şiddetini azaltmak ve etkeni ortadan kaldırmaktır. Ayrıca daha
                            sonra uygulanacak olan kapsamlı ortodontik tedavinin süresi kısaltılabilir.
                        </p>
                        <h4 style="text-align: center; color:rgb(22, 80, 131)">12 YAŞ VE SONRASI ORTODONTİK TEDAVİ</h4>
                        <p>
                            Bu dönem neredeyse tüm daimi dişlerin ağızda yerlerini aldığı, ergenlik dönemini de içeren
                            büyüme çağıdır. Ortodontik tedavilerin birçoğu bu yaşlarda başlar. Bu dönemde yapılan tedaviler
                            kapsamlı ortodontik tedavilerdir. Aktif büyüme döneminden istifade edilerek çeneleri
                            ilgilendiren anomaliler tedavi edilir ve dişlerde tam bir estetik sağlanır.<br>
                            Aktif büyüme dönemi ortalama olarak kızlarda 15, erkeklerde ise 16 yaşında sona erer. Büyüme
                            tamamlandıktan sonra çenelerdeki problemi sadece ortodontik yaklaşımlarla çözmek mümkün
                            değildir. Dişsel problemler ise rahatlıkla tedavi edilebilir. Dolayısıyla, büyüme sona ermiş ise
                            ortodontik tedavi yaklaşımları erişkinlerdeki ile aynıdır. <br>

                            Bu dönemde halk arasında tel takma dediğimiz sabit ortodontik tedaviler yapılmaktadır. Dişler
                            üzerine yapıştırılan braketler ve aradan geçen ark teli aracılığıyla dişlere kuvvet iletilir. Bu
                            kuvvetler sayesinde dişler hareket ettirilir ve istenilen konuma getirilir.<br>

                            Çeneleri ilgilendiren problemler mevcut ise, braketlere ilave olarak ağız dışından destek almak
                            gerekir. Aktif büyüme dönemi olan 12-15 yaşları arasında kullanılabilen bu apareyler sayesinde,
                            çenelerdeki büyümeyi yönlendirmek ve anomaliyi tedavi etmek mümkündür.
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection

@extends('frontend.app')
@section('hakkinda')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('frontend/assets/img') }}/about-header.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Hakkında</h2>
            <ol>
                <li><a href="{{ url('/') }}">Anasayfa</a></li>
                <li>Hakkında</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Hakkında Kısmı ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4" data-aos="fade-up">
                <div class="col-lg-4">
                    <img src="{{ asset('frontend/assets/img') }}/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8">
                    <div class="content ps-lg-5">
                        <h3>ORTODONTİ NEDİR?</h3>
                        <p>
                            Dişsel düzensizliklerin ve çene-yüz uyumsuzluklarının teşhis ve tedavisiyle ilgilenen diş
                            hekimliği dalıdır. Ortodonti kelime olarak latince kökenli olup, düzgün dişler anlamına
                            gelmektedir. Dişler ve çeneler ile birlikte dil, dudak ve yanaklardan oluşan çevre dokularda;
                            estetik bir uyumun ve düzenli bir işleyişin sağlanması da ortodontinin ilgi alanına girmektedir.
                        </p>
                        {{-- <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate
                                velit.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</li>
                        </ul> --}}
                    </div>
                </div>
            </div>

        </div>
    </section><!-- Hakkında Kısmı sonu -->

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Ortodontik Problemlerin Sebepleri</h2>

            </div>

            <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

                <div class="col-xl-5 img-bg"
                    style="background-image: url('{{ asset('frontend/assets/img') }}/why-us-bg.jpg')"></div>
                <div class="col-xl-7 slides  position-relative">

                    <div class="slides-1 swiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">SÜT DİŞLERİNDE ÇÜRÜKLER VE ERKEN ÇEKİMLER</h3>
                                    <p class="mb-3">Süt dişlerinin düşme zamanına kadar olan süreçte, ağızda sağlıklı bir
                                        biçimde tutulabilmesi; dişsel çapraşıklıkların oluşumunun engellenmesinde oldukça
                                        önemlidir. Çürüklerin tedavi edilmemesi, kalıcı dişlerin yerleşeceği alanda yer
                                        kaybına sebep olmaktadır. Alttan gelen daimi dişler yer bulamadıklarından çapraşık
                                        sürebilirler.</p>
                                    <p>Yine zamanından önce yapılan süt dişi çekimleri, arkadaki daimi dişlerin öne doğru
                                        kaymasına ve diğer dişlerinin yerleşeceği alanın daralmasına neden olmaktadır. Bu
                                        durum genellikle ağıza son süren köpek dişlerinin yer bulamayıp fırlak
                                        konumlanmasıyla sonuçlanmaktadır..</p>
                                </div>
                            </div><!--  slide item sonu -->

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">KÖTÜ ALIŞKANLIKLAR</h3>
                                    <p>Parmak emme, uzun süre yalancı emzik veya biberon kullanma, dil emme, dudak emme,
                                        kalem ısırma gibi kötü alışkanlıklar da diş ve çene yapılarında ortodontik
                                        bozukluklara neden olabilmektedir.</p>
                                </div>
                            </div><!-- slide item sonu -->

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">GENETİK FAKTÖRLER</h3>
                                    <p class="mb-3">Özellikle iskeletsel (çenesel) bozukluğu olan bireylerde soy geçmişte
                                        benzer bir anomalinin olup olmadığı önemlidir. Kalıtımsal diş eksiklikleri, dar üst
                                        çene, çapraşıklık problemleri de kalıtımsal olarak çocuğa geçebilmektedir. Bu
                                        durumda ortodontik sorunların ortaya çıkması kaçınılmaz olmaktadır.
                                    </p>
                                    <p>Yapılması gereken ise; çocuğu süt dişlenme döneminden başlayarak düzenli diş hekimi
                                        kontrolüne götürmektir.</p>
                                </div>
                            </div><!-- slide item sonu -->

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">KULAK BURUN BOĞAZ PROBLEMLERİ</h3>
                                    <p>Bademcik iltihabı, geniz eti varlığı, sürekli ağız solunumu gibi KBB problemleri,
                                        çene kemiklerinin şekillenmesinde engel oluşturabilir ve diş sürme bozuklukları
                                        yaratabilirler.</p>
                                </div>
                            </div><!-- slide item sonu -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

            </div>

        </div>
    </section><!-- End Why Choose Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h3>SİZE ÇOK YAKINIZ</h3>
                    <p>Merak ettiğiniz sorular ve tedaviniz hakkındaki sorularınızı bize sorabilirsiniz... </p>
                    <a class="cta-btn" href="{{route('iletisim')}}">Bize Ulaş</a>
                </div>
            </div>

        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Ekibimiz</h2>

            </div>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('frontend/assets/img') }}/team/team-5.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Mesut Yıldız</h4>
                            <span>Ortodonti Uzmanı</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('frontend/assets/img') }}/team/team-5.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Mesut Yıldız</h4>
                            <span>Diş Hekimi</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('frontend/assets/img') }}/team/team-5.jpg" class="img-fluid"
                                alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Mesut Yıldız</h4>
                            <span>Klinik Asistanı</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('frontend/assets/img') }}/team/team-5.jpg" class="img-fluid"
                                alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Mesut Yıldız</h4>
                            <span>Hasta Danışmanı</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>
    </section><!-- End Team Section -->
@endsection

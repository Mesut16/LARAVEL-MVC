@extends('frontend.app')
@section('tedavi')
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('frontend/assets/img') }}/about-header.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Tedavilerimiz</h2>
            <ol>
                <li><a href="{{ url('/') }}">Anasayfa</a></li>
                <li>Tedavilerimiz</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>ORTODONTİK PROBLEMLERİN SEBEPLERİ</h2>

            </div>

            <div class="row gy-5">

                <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="bi bi-question-circle" style="color: #f57813;"></i></div>
                    <div>
                        <h4 class="title"><a href="#" class="stretched-link">Süt dişlerinde çürütkler ve erken
                                çekimler</a></h4>
                        <p class="description">Süt dişlerinin düşme zamanına kadar olan süreçte, ağızda sağlıklı bir biçimde
                            tutulabilmesi; dişsel çapraşıklıkların oluşumunun engellenmesinde oldukça önemlidir. Çürüklerin
                            tedavi edilmemesi, kalıcı dişlerin yerleşeceği alanda yer kaybına sebep olmaktadır. Alttan gelen
                            daimi dişler yer bulamadıklarından çapraşık sürebilirler.

                            Yine zamanından önce yapılan süt dişi çekimleri, arkadaki daimi dişlerin öne doğru kaymasına ve
                            diğer dişlerinin yerleşeceği alanın daralmasına neden olmaktadır. Bu durum genellikle ağıza son
                            süren köpek dişlerinin yer bulamayıp fırlak konumlanmasıyla sonuçlanmaktadır..</p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="bi bi-question-circle" style="color: #15a04a;"></i></div>
                    <div>
                        <h4 class="title"><a href="#" class="stretched-link">Kötü alışkanlılar</a></h4>
                        <p class="description">Parmak emme, uzun süre yalancı emzik veya biberon kullanma, dil emme, dudak
                            emme, kalem ısırma gibi kötü alışkanlıklar da diş ve çene yapılarında ortodontik bozukluklara
                            neden olabilmektedir.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon flex-shrink-0"><i class="bi bi-question-circle" style="color: #d90769;"></i></div>
                    <div>
                        <h4 class="title"><a href="#" class="stretched-link">Genetik faktörler</a></h4>
                        <p class="description">Özellikle iskeletsel (çenesel) bozukluğu olan bireylerde soy geçmişte benzer
                            bir anomalinin olup olmadığı önemlidir. Kalıtımsal diş eksiklikleri, dar üst çene, çapraşıklık
                            problemleri de kalıtımsal olarak çocuğa geçebilmektedir. Bu durumda ortodontik sorunların ortaya
                            çıkması kaçınılmaz olmaktadır.

                            Yapılması gereken ise; çocuğu süt dişlenme döneminden başlayarak düzenli diş hekimi kontrolüne
                            götürmektir.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon flex-shrink-0"><i class="bi bi-question-circle" style="color: #15bfbc;"></i></div>
                    <div>
                        <h4 class="title"><a href="#" class="stretched-link">Kulak burun boğaz problemleri</a></h4>
                        <p class="description">Bademcik iltihabı, geniz eti varlığı, sürekli ağız solunumu gibi KBB
                            problemleri, çene kemiklerinin şekillenmesinde engel oluşturabilir ve diş sürme bozuklukları
                            yaratabilirler.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Cards Section ======= -->
    <section id="services-cards" class="services-cards">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{ asset('frontend/assets/img') }}/cards-7.jpg);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="{{ route('tedavi1') }}">ORTOGNATİK CERRAHİ</a></h4>
                                    <p>Birbirleriyle ve yüzün bütünüyle uyumlu olmayan çene ilişkilerinin, cerrahi
                                        operasyonlar yardımıyla düzeltilmesi işlemidir.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{ asset('frontend/assets/img') }}/cards-6.jpg);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="{{ route('tedavi3') }}">YETİŞKİNLERDE ORTODONTİK
                                            TEDAVİ</a></h4>
                                    <p>Yetişkin bireylerde dişleri ilgilendiren çapraşıklık ve uyumsuzluklar, her yaşta
                                        ortodontik tedavi ile düzeltilebilir. Son yıllarda ortodontik tedavi gören her 5
                                        hastadan 1 tanesinin 21 yaş ve üzerinde olduğu belirlenmiştir.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{ asset('frontend/assets/img') }}/cards-5.jpg);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title"> <a href="{{ route('tedavi4') }}">ÇOCUKLARDA TEDAVİ</a></h4>
                                    <p>Bu gruptaki çocuklar karışık dişlenme dönemindedir. Ağızda hem süt dişleri hem de
                                        daimi dişer birlikte yer almaktadır.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{ asset('frontend/assets/img') }}/cards-11.jpg);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="{{ route('tedavi6') }}">KAPAKLI BRAKETLER</a></h4>
                                    <p>Klasik braketlere göre mekanik üstünlükleri olan özellikli braket sistemleridir.Sabit
                                        ortodontik tedavinin temelini, dişlerin üzerine yapıştırılan braketler ve bunların
                                        içerisinden geçen ark teli oluşturur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{ asset('frontend/assets/img') }}/cards-9.jpg);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="{{ route('tedavi2') }}">ÇENE EKLEMİ</a></h4>
                                    <p>Çene eklemi, kulağın hemen önünde yer alır ve vücuttaki diğer eklemlere göre daha
                                        özellikli bir yapıya sahiptir. Üstte kafaya ait bir kemik bölümü, altta alt çene
                                        kemiği ve bunların arasında yer alan eklem diskinden oluşmaktadır.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{ asset('frontend/assets/img') }}/cards-10.jpg);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="{{ route('tedavi5') }}">ESTETİK BRAKETLER</a></h4>
                                    <p>Estetik braketler, görünümleri diş rengine daha benzer olan ve klasik metal
                                        braketlere göre daha az belirgin olan ortodontik tedavi araçlarıdır.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>
    </section><!-- End Services Cards Section -->
@endsection

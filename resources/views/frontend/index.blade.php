@extends('frontend.app')
@section('main')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h2 data-aos="fade-up">SAĞLIKLI GÜLÜMSEMELER</h2>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        <p>Ortodontik tedavide en önemli hedeflerden biri estetik görünüme katkıda bulunmakla beraber,kendi
                            dişlerinizle daha sağlıklı gülümsemeyi mümkün kılmasıdır. </p>
                    </blockquote>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ route('frontend.randevu') }}" class="btn-get-started">Randevu Al</a>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>ORTODONTİ NEDİR</span></a>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

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
                            </div><!-- End slide item -->

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">KÖTÜ ALIŞKANLIKLAR</h3>
                                    <p>Parmak emme, uzun süre yalancı emzik veya biberon kullanma, dil emme, dudak emme,
                                        kalem ısırma gibi kötü alışkanlıklar da diş ve çene yapılarında ortodontik
                                        bozukluklara neden olabilmektedir.</p>
                                </div>
                            </div><!-- End slide item -->

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
                            </div><!-- End slide item -->

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">KULAK BURUN BOĞAZ PROBLEMLERİ</h3>
                                    <p>Bademcik iltihabı, geniz eti varlığı, sürekli ağız solunumu gibi KBB problemleri,
                                        çene kemiklerinin şekillenmesinde engel oluşturabilir ve diş sürme bozuklukları
                                        yaratabilirler.</p>
                                </div>
                            </div><!-- End slide item -->

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

    {{-- <!-- ======= Features Section ======= -->
      <section id="features" class="features">
  
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
              <h3>Powerful Features for <br>Your Business</h3>
  
              <div class="row gy-4">
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="ri-store-line" style="color: #ffbb2c;"></i>
                    <span>Easy Cart Features</span>
                  </div>
                </div><!-- End Icon List Item-->
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                    <span>Sit amet consectetur adipisicing</span>
                  </div>
                </div><!-- End Icon List Item-->
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                    <span>Ipsum Rerum Explicabo</span>
                  </div>
                </div><!-- End Icon List Item-->
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                    <span>Easy Cart Features</span>
                  </div>
                </div><!-- End Icon List Item-->
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="ri-database-2-line" style="color: #47aeff;"></i>
                    <span>Easy Cart Features</span>
                  </div>
                </div><!-- End Icon List Item-->
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                    <span>Sit amet consectetur adipisicing</span>
                  </div>
                </div><!-- End Icon List Item-->
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                    <span>Ipsum Rerum Explicabo</span>
                  </div>
                </div><!-- End Icon List Item-->
  
                <div class="col-md-6">
                  <div class="icon-list d-flex">
                    <i class="ri-base-station-line" style="color: #ff5828;"></i>
                    <span>Easy Cart Features</span>
                  </div>
                </div><!-- End Icon List Item-->
              </div>
            </div>
            <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
              <div class="phone-wrap">
                <img src="{{ asset('frontend/assets/img') }}/iphone.png" alt="Image" class="img-fluid">
              </div>
            </div>
          </div>
  
        </div>
  
        <div class="details">
          <div class="container" data-aos="fade-up" data-aos-delay="300">
            <div class="row">
              <div class="col-md-6">
                <h4>Labore Sdio Lidui<br>Bonde Naruto</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam nostrum molestias doloremque quae delectus odit minima corrupti blanditiis quo animi!</p>
                <a href="#about" class="btn-get-started">Get Started</a>
              </div>
            </div>
  
          </div>
        </div>
  
      </section><!-- End Features Section -->
   --}}
    <!-- ======= Recent Blog Posts Section ======= -->
    {{-- <section id="recent-posts" class="recent-posts">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Recent Blog Posts</h2>

            </div>

            <div class="row gy-5">

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('frontend/assets/img') }}/blog/blog-1.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Tue, December 12</span>
                            <span class="post-author"> / Julia Parker</span>
                        </div>
                        <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
                        <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum
                            ipsa est officiis. Modi qui magni est...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('frontend/assets/img') }}/blog/blog-2.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Fri, September 05</span>
                            <span class="post-author"> / Mario Douglas</span>
                        </div>
                        <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
                        <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda.
                            Quisquam omnis doloribus...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('frontend/assets/img') }}/blog/blog-3.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Tue, July 27</span>
                            <span class="post-author"> / Lisa Hunter</span>
                        </div>
                        <h3 class="post-title">Quia assumenda est et veritati</h3>
                        <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis repellat
                            sed quae consectetur magnam...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('frontend/assets/img') }}/blog/blog-4.jpg"
                                class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Tue, Sep 16</span>
                            <span class="post-author"> / Mario Douglas</span>
                        </div>
                        <h3 class="post-title">Pariatur quia facilis similique deleniti</h3>
                        <p>Et consequatur eveniet nam voluptas commodi cumque ea est ex. Aut quis omnis sint ipsum earum
                            quia eligendi...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Recent Blog Posts Section --> --}}
@endsection

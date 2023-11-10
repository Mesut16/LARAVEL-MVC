@extends('frontend.app')
@section('iletisim')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('frontend/assets/img') }}/about-header.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>İLETİŞİM</h2>
            <ol>
                <li><a href="{{ url('/') }}">Ansayfa</a></li>
                <li>İletişim</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container position-relative" data-aos="fade-up">

            <div class="row gy-4 d-flex justify-content-end">

                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Konum:</h4>
                            <p>DOĞANBEY MH. 1. <br>
                                DOĞANBEY SK. BERK İŞHANI <br>
                                NO:1/203 Kat:2 <br>
                                Osmangazi | BURSA | TÜRKİYE</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>uludagbilisim@uludagbilisim.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Telefon:</h4>
                            <p>0850 888 6297</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form id="contact-form" name="contact-form" action="{{ route('yorumekle') }}" method="POST">
                        @csrf
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="name" class="">Adınız</label>
                                    <input type="text" id="ad_soyad" name="ad_soyad" type="text" class="form-control">
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="email" class="">Mail</label>
                                    <input type="text" id="mail" name="mail" type="mail" class="form-control">
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="subject" class="">Konu</label>
                                    <input type="text" id="konu" name="konu" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <label for="message">Mesaj</label>
                                    <textarea type="text" id="yazi" name="yazi" rows="2" class="form-control md-textarea"
                                        style="height: 100px"></textarea>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <p><br></p>
                                    <input type="submit" value="Gönder" class="btn btn-info">
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection

@extends('frontend.app')
@section('yorum')
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('frontend/assets/img') }}/about-header.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Yorumlar</h2>
            <ol>
                <li><a href="{{url('/')}}">Anasayfa</a></li>
                <li>Yorumlar</li>
            </ol>

        </div>
    </div>

    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>DEĞERLENDİRMELER</h2>

            </div>

            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @if ($yorum)
                        @foreach ($yorum as $y)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <h3>{{ $y->konu }}</h3>
                                    <p>
                                        {{ $y->yazi }}
                                    </p>
                                    <div class="profile mt-auto">
                                        <img src="{{ asset('frontend/assets/img') }}/testimonials/testimonials-6.jpg"
                                            class="testimonial-img" alt="">
                                        <h3>{{ $y->ad_soyad }}</h3>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach
                    @endif


                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

@endsection

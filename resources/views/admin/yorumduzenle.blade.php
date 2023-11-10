@extends('admin.app')
@section('yorumlar')
    <main class="content">
        @if (session('success'))
            <div class=" container p-3 mb-2 alert alert-info bg-info" role="alert" style="border-radius: 15px">
                {{ session('success') }}
            </div>
        @endif
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Yorum</strong> Düzenleme</h1>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

                <form id="contact-form" name="contact-form" action="{{ route('yorumduzenle-post', $yorumBilgisi->id) }}"
                    method="POST">
                    @csrf
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="">Adınız</label>
                                <input type="text" id="ad_soyad" name="ad_soyad" value="{{ $yorumBilgisi->ad_soyad }}"
                                    class="form-control">
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">Mail</label>
                                <input type="text" id="mail" name="mail" value="{{ $yorumBilgisi->mail }}"
                                    class="form-control">
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
                                <input type="text" id="konu" name="konu" value="{{ $yorumBilgisi->konu }}"
                                    class="form-control">
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
                                <textarea type="text" id="yazi" name="yazi" value="" rows="2" class="form-control md-textarea"
                                    style="height: 100px">{{ $yorumBilgisi->yazi }}</textarea>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Yorum Yayınlama</label>
                                <select class="form-control" id="aktif" name="aktif" required>
                                    <option selected value="">{{ $yorumBilgisi->aktif }}</option>
                                    <option>0</option>
                                    <option>1</option>
                                </select>
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
                                <input type="submit" value="Yorumu Düzenle" class="btn btn-info">
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

            </div><!-- End Contact Form -->

        </div>
    </main>
@endsection

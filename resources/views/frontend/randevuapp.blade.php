@extends('frontend.app')
@section('randevu')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('frontend/assets/img')}}/about-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Randevu Al</h2>
      <ol>
        <li><a href="{{url('/')}}">Anasayfa</a></li>
        <li>Randevu Al</li>
      </ol>

    </div>
  </div>
    <div class="container p-3 mb-4 mt-4 bg-info text-light" style="border-radius: 15px;text-align: center">
        RANDEVU FORMU
    </div>
    <div class="container p-3 mb-4 mt-4 bg-light text-dark" style="border-radius: 15px">

        {{-- @if ($errors->any())
            @foreach ($errors->all() as $hatalar)
                <div class="alert alert-danger">
                    {{ $hatalar }}
                </div>
            @endforeach
        @endif --}}
        @if (session('hata'))
            <div class="alert alert-danger">
                {{ session('hata') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form class="row g-3" action="{{ route('randevuekle') }}" method="POST">
            @csrf
            <div class="col-md-12">
                <label for="validationDefault01" class="form-label">Ad</label>
                <input type="text" class="form-control" id="ad" name="ad">
            </div>
            <div class="col-md-12">
                <label for="validationDefault02" class="form-label">Soyad</label>
                <input type="text" class="form-control" id="soyad" name="soyad">
            </div>
            <div class="col-md-12">
                <label for="validationDefaultUsername" class="form-label">Telefon</label>
                <div class="input-group">
                    {{-- <span class="input-group-text" id="inputGroupPrepend2">@</span> --}}
                    <input type="text" class="form-control" placeholder="(500)(000 00 00)" minlength="10" maxlength="10"
                        id="telefon" aria-describedby="inputGroupPrepend2" name="telefon" required>
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationDefault03" class="form-label">Email</label>
                <input type="email" class="form-control" id="mail" name="mail" >
            </div>
            <div class="col-md-12">
                <label for="validationDefault04" class="form-label">Saat</label>
                <select class="form-select" id="saat" name="saat" required>
                    <option selected disabled value="">Randevu Saati Seçiniz</option>
                    <option>10:00</option>
                    <option>10:30</option>
                    <option>11:00</option>
                    <option>11:30</option>
                    <option>12:00</option>
                    <option>12:30</option>
                    <option>13:00</option>
                    <option>13:30</option>
                    <option>14:00</option>
                    <option>14:30</option>
                    <option>15:00</option>
                    <option>15:30</option>
                    <option>16:00</option>
                    <option>16:30</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="validationDefault05" class="form-label">Tarih</label>
                <input type="date" class="form-control" id="tarih" name="tarih" required>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                       <a href="https://www.resmigazete.gov.tr/eskiler/2018/03/20180310-5.htm">KVKK </a>Kabul Ediyorum
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-success" type="submit">Randevu Al</button>
            </div>
        </form>
    </div>
@endsection

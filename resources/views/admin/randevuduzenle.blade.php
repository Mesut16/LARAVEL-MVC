@extends('admin.app')
@section('randevuduzenle')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="container p-3 mb-4 mt-4 bg-info text-dark" style="text-align: center; border-radius: 15px">
                RANDEVU DÜZENLEME FORMU
            </div>
            @if (session('hata'))
                <div style="color: white; border-radius: 15px " class=" container p-3 mb-2 alert alert-info bg-danger" role="alert" >
                    {{ session('hata') }}
                </div>
            @endif
            @if (session('success'))
                <div class=" container p-3 mb-2 alert alert-info bg-success" role="alert" style="border-radius: 15px">
                    {{ session('success') }}
                </div>
            @endif
            <div class="container p-3 mb-2 bg-primary text-dark" style="border-radius: 15px">

                <form class="row g-3" action="{{ route('randevu-duzenle-post', $randevuBilgisi->id) }}" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <label for="validationDefault01" class="form-label">Ad</label>
                        <input type="text" class="form-control" id="ad" name="ad"
                            value="{{ $randevuBilgisi->ad }}" required>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault02" class="form-label">Soyad</label>
                        <input type="text" class="form-control" id="soyad" name="soyad"
                            value="{{ $randevuBilgisi->soyad }}" required>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefaultUsername" class="form-label">Telefon</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="(500)(000 00 00)" minlength="10"
                                maxlength="10" id="telefon" aria-describedby="inputGroupPrepend2" name="telefon"
                                value="{{ $randevuBilgisi->telefon }}" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault03" class="form-label">Email</label>
                        <input type="email" class="form-control" id="mail" name="mail"
                            value="{{ $randevuBilgisi->mail }}" required>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault04" class="form-label">Saat</label>
                        <select class="form-select" id="saat" name="saat" value="" required>
                            <option selected value="">{{ $randevuBilgisi->saat }}</option>
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
                        <input type="date" class="form-control" id="tarih" name="tarih"
                            value="{{ $randevuBilgisi->tarih }}" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-success" type="submit">Randevu Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection

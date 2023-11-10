@extends('admin.app')
@section('tedaviekle')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="container p-3 mb-4 mt-4 bg-info text-dark" style="text-align: center; border-radius: 15px">
                Tedavi ekle
            </div>
            @if (session('success'))
                <div class=" container p-3 mb-2 alert alert-info bg-success" role="alert" style="border-radius: 15px">
                    {{ session('success') }}
                </div>
            @endif
            <div class="container p-3 mb-2 bg-primary text-dark" style="border-radius: 15px">

                <form class="row g-3" action="{{route("tedavieklepost")}}" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <label for="validationDefault01" class="form-label">Ad</label>
                        <input type="text" class="form-control" id="ad" name="ad"
                            value="{{$tedavi->ad}}" readonly>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault02" class="form-label">Soyad</label>
                        <input type="text" class="form-control" id="soyad" name="soyad"
                            value="{{$tedavi->soyad}}" readonly>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault05" class="form-label">Tarih</label>
                        <input type="date" class="form-control" id="randevu_tarih" name="randevu_tarih" required>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault03" class="form-label">Tedavi</label>
                        <textarea type="text" id="tedavi" name="tedavi" value="" rows="2" class="form-control md-textarea"
                                    style="height: 100px" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault03" class="form-label">Hasta Id</label>
                        <input type="text" class="form-control" id="id" name="id"
                            value="{{$tedavi->id}}" readonly>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-success" type="submit">Tedavi Ekle</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection

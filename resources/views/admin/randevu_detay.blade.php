@extends('admin.app')
@section('randevu_detay')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Hasta</strong> Detay</h1>

            @if (session('success'))
                <div class=" container p-3 mb-2 alert alert-info bg-success" role="alert" style="border-radius: 15px">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Soyad</th>
                            <th>Tarih</th>
                            <th>Tedavi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($detayListe == null)
                            <div class=" container p-3 mb-2 alert alert-info bg-alert" role="alert"
                                style="border-radius: 15px">
                                Seçtiğiniz hastanın hiç bir tedavisi bulunmamaktadır.
                            </div>
                        @else
                            @foreach ($detayListe as $detay)
                                <tr>
                                    <td>{{ $detay->ad }}</td>
                                    <td>{{ $detay->soyad }}</td>
                                    <td>{{ $detay->randevu_tarih }}</td>
                                    <td>{{ $detay->tedavi }}</td>
                                </tr>
                            @endforeach
                        @endif
                        {{-- @if ($detayListe != null)
                            @foreach ($detayListe as $detay)
                                <tr>
                                    <td>{{ $detay->ad }}</td>
                                    <td>{{ $detay->soyad }}</td>
                                    <td>{{ $detay->randevu_tarih }}</td>
                                    <td>{{ $detay->tedavi }}</td>
                                </tr>
                            @endforeach
                        @endif --}}

                    </tbody>
                </table>
            </div>

        </div>
    </main>
@endsection

@extends('admin.app')
@section('randevuliste')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Randevu</strong> Listesi</h1>

            <div class="row">
                @if (session('success'))
                    <div class=" container p-3 mb-2 alert alert-info bg-success" role="alert" style="border-radius: 15px">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Randevular</h5>
                        </div>
                        <input style="border-radius: 50px; m-10;" type="text" class="form-control" id="filtre"
                            placeholder="Search...">
                        <table class="table table-hover table-striped my-0">

                            <thead>
                                <tr>
                                    <th>AD</th>
                                    <th>Soyad</th>
                                    <th class="d-none d-xl-table-cell">Telefon</th>
                                    <th class="d-none d-xl-table-cell">Mail</th>
                                    <th class="d-none d-md-table-cell">Saat</th>
                                    <th class="d-none d-md-table-cell">Tarih</th>
                                    <th class="d-none d-md-table-cell">Detay</th>
                                    <th class="d-none d-md-table-cell">Düzenle</th>
                                    <th class="d-none d-md-table-cell">Tedavi Ekle</th>
                                </tr>
                            </thead>
                            <tbody id="filtreleme">
                                @if ($randevular)
                                    @foreach ($randevular as $randevu)
                                        <tr>
                                            <td>{{ $randevu->ad }}</td>
                                            <td>{{ $randevu->soyad }}</td>
                                            <td class="d-none d-xl-table-cell">{{ $randevu->telefon }}</td>
                                            <td class="d-none d-xl-table-cell">{{ $randevu->mail }}</td>
                                            <td class="d-none d-md-table-cell">{{ $randevu->saat }}</td>
                                            <td class="d-none d-md-table-cell">{{ $randevu->tarih }}</td>
                                            <td class="d-none d-md-table-cell"><button type="button"
                                                    class="btn btn-info"><a href="{{ route('detay', $randevu->id) }}"
                                                        style="color: aliceblue">Detay</a></button></td>
                                            <td class="d-none d-md-table-cell"><button type="button"
                                                    class="btn btn-success"><a
                                                        onclick="return confirm('Randevu düzenlemek istediğinize emin misiniz?')"
                                                        href="{{ route('randevu-duzenle', $randevu->id) }}"
                                                        style="color: aliceblue">Düzenle</a></button></td>
                                            <td class="d-none d-md-table-cell"><button type="button"
                                                    class="btn btn-secondary"><a
                                                        href="{{ route('tedaviekle', $randevu->id) }}"
                                                        style="color: aliceblue">Tedavi Ekle</a></button></td>

                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6 col-xxl-2 d-flex order-1 order-xxl-1">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Calendar</h5>
                        </div>
                        <div class="card-body d-flex">
                            <div class="align-self-center w-100">
                                <div class="chart">
                                    <div id="datetimepicker-dashboard"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#filtre").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#filtreleme tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
    </main>
@endsection

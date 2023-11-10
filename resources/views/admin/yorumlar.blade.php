@extends('admin.app')
@section('yorumlar')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Yorum</strong> Sayfası</h1>
            @if (session('success'))
                <div class=" container p-3 mb-2 alert alert-info bg-success" role="alert" style="border-radius: 15px">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>Mail</th>
                            <th>Konu</th>
                            <th>Yorum</th>
                            <th>Aktif</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($yorumlar)
                            @foreach ($yorumlar as $yorum)
                                <tr>
                                    <td>{{ $yorum->ad_soyad }}</td>
                                    <td>{{ $yorum->mail }}</td>
                                    <td>{{ $yorum->konu }}</td>
                                    <td>{{ $yorum->yazi }}</td>
                                    <td>
                                        @if ($yorum->aktif == 0)
                                            <i class="align-middle" data-feather="x"></i>
                                        @else
                                            <i class="align-middle" data-feather="check"></i>
                                        @endif
                                    </td>
                                    <td><button type="button" class="btn btn-success"><a href="{{route('yorumduzenle',$yorum->id)}}"
                                                style="color: aliceblue">Düzenle</a></button></td>
                                    <td><button type="button" class="btn btn-danger"><a
                                                href="{{ route('yorumsil', $yorum->id) }}" onclick="return confirm('Silmek istediğinize emin misiniz?')" style="color: aliceblue"><i
                                                    data-feather="trash-2"></i></a></button></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </main>
@endsection

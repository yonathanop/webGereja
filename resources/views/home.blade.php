@extends('layouts.main')
{{-- Hero Section --}}
@section('container')
    <section id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($banners as $key => $bnr)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="d-flex align-items-center ratio ratio-16x9 justify-content-center text-white img-fluid"
                        style="background-image: url('{{ asset('storage/' . $bnr->image) }}'); background-size: cover; background-position: center;">
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Chevron (prev/next) -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>
    <section>
        <div class="container mt-4">
    <div class="row justify-content-center">
        @if($jadwal->count())
        <div class="{{ $kegiatan->count() ? 'col-md-6' : 'col-md-14' }}">
            <h5 class="text-center fw-bold">Jadwal Ibadah</h5>
            <table class="table table-bordered table-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Informasi</th>
                        <th>Pendeta</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwal as $item)
                    <tr>
                        <td>{{ $item->informasi }}</td>
                        <td>{{ $item->namaPendeta }}</td>
<<<<<<< HEAD
                        <td>{{ \Carbon\Carbon::parse($item->waktu)->timezone('Asia/Jakarta')->locale('id')->isoFormat('dddd, D MMMM Y HH:mm') }}</td>
=======
                        <td>{{ \Carbon\Carbon::parse($item->waktu)->translatedFormat('d F Y H:i') }}</td>
>>>>>>> 55a0739001c6560ded527621d22083f0e5eda8a9
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif

        @if($kegiatan->count())
        <div class="{{ $jadwal->count() ? 'col-md-6' : 'col-md-14' }}">
            <h5 class="text-center fw-bold">Kegiatan Gereja</h5>
            <table class="table table-bordered table-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Informasi</th>
                        <th>Organisasi</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kegiatan as $item)
                    <tr>
                        <td>{{ $item->informasi }}</td>
                        <td>{{ $item->organisasi }}</td>
<<<<<<< HEAD
                        <td>{{ \Carbon\Carbon::parse($item->waktu)->timezone('Asia/Jakarta')->locale('id')->isoFormat('dddd, D MMMM Y HH:mm') }}</td>
=======
                        <td>{{ \Carbon\Carbon::parse($item->waktu)->translatedFormat('d F Y H:i') }}</td>
>>>>>>> 55a0739001c6560ded527621d22083f0e5eda8a9
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>



    </section>
@endsection

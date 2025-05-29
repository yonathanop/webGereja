@extends('layouts.main')

@section('container')
    <form method="post" action="/dashboard/kontak">
        @csrf
        <h2 style="text-align:center">{{ $title }}</h2>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissable col-lg-8" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close'"></button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-lg-8">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No. HP</label>
                <input type="number" name="no_HP" class="form-control" id="exampleFormControlInput1"
                    placeholder="nomor handphone">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-4">Kirim</button>
        </div>
    </form>
@endsection

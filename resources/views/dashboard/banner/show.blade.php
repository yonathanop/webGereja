@extends('dashboard.layouts.main')
@section('container')

    <div class="container">
            <div class="row">
                <div class="col-lg-8">

                </div>
            </div>
        </div>
        <h2>{{ $banner->keterangan }}</h2>

        <a href="/dashboard/banner" class="btn btn-success"><i class="bi bi-arrow-left"></i>Daftar Banner</a>
        <a href="/dashboard/banner/{{ $banner->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
        <form action="/dashboard/banner/{{ $banner->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ?')"><i
                    class="bi bi-x-circle"></i>Delete</button>
        </form>
        
@endsection

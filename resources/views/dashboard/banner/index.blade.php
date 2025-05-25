@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Banner</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <div class="table-responsive col-lg-8">
        <a href="/dashboard/banner/create" class="btn btn-primary mb-3">Buat Baru</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">keterangan</th>
                    <th scope="col">Banner</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($banner as $bnr)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $bnr->keterangan }}</td>
                        <td>{{ $bnr->image }}</td>
                        <td>
                            <a href="/dashboard/banner/{{ $bnr }}" class="badge bg-info"><i
                                    class="bi bi-eye"></i></a>
                            <a href="/dashboard/banner/{{ $bnr }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                            <form action="/dashboard/banner/{{ $bnr }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin akan menghapus data ?')"><i class="bi bi-x-circle"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Jadwal Gereja</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <div class="table-responsive col-lg-8">
        <a href="/dashboard/jadwal/create" class="btn btn-primary mb-3">Buat Baru</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Informasi</th>
                    <th scope="col">Nama Pendeta</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwal as $jdwl)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $jdwl->informasi }}</td>
                        <td>{{ $jdwl->pendeta->namaPendeta ?? '-' }}</td>
                        <td>{{ \Carbon\Carbon::parse($jdwl->waktu)->timezone('Asia/Jakarta')->locale('id')->isoFormat('dddd, D MMMM Y HH:mm') }}</td>
                        <td>
                            <a href="/dashboard/jadwal/{{ $jdwl->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                            <form action="/dashboard/jadwal/{{ $jdwl->id }}" method="post" class="d-inline">
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
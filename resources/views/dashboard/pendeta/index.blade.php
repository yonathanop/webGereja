@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Pendeta</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <div class="table-responsive col-lg-8">
        <a href="/dashboard/pendeta/create" class="btn btn-primary mb-3">Buat Baru</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pendeta</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendeta as $pdt)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pdt->namaPendeta }}</td>
                        <td>
                            <a href="{{ route('pendeta.edit', $pdt->id) }}" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                            <form action="{{ route('pendeta.destroy', $pdt->id) }}" method="post" class="d-inline">
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
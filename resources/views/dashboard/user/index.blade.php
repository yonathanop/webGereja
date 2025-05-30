@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manajemen User</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissable col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close'"></button>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger alert-dismissable">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close'"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">User</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                            @if ($user->is_admin)
                                <span class="badge bg-success">Admin</span>
                            @else
                                <span class="badge bg-secondary">User</span>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('user.destroy', $user->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Apakah anda yakin akan menghapus data?')">
                                    <i class="bi bi-x-circle"></i>
                                </button>
                            </form>

                            {{-- Tombol toggle admin --}}
                            @if (auth()->id() !== $user->id)
                                <form action="{{ route('user.toggleAdmin', $user->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('patch')
                                    <button class="badge bg-info border-0"
                                        onclick="return confirm('Ubah status admin pengguna ini?')">
                                        @if ($user->is_admin)
                                            Jadikan User
                                        @else
                                            Jadikan Admin
                                        @endif
                                    </button>
                                </form>
                            @else
                                <span class="badge bg-light text-dark">Tidak bisa ubah diri sendiri</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection

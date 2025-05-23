@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pesan untuk Admin</h1>
    </div>

    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kontak as $ktk)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $ktk->nama }}</td>
                        <td>{{ $ktk->no_HP }}</td>
                        <td>{{ $ktk->pesan }}</td>
                        <td>
                            <form action="{{ route('kontak.destroy', $ktk->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Apakah anda yakin akan menghapus data ?')"><i
                                        class="bi bi-x-circle"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

</html>

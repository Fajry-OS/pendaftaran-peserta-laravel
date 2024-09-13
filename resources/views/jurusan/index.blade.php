@extends('layouts.app')
@section('title', 'Jurusan')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <a href="{{ route('jurusan.create') }}"><i class="fas fa-plus"></i> Tambah</a>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jurusans as $jurusan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $jurusan->nama_jurusan }}</td>
                            <td>
                                <a href="{{ route('jurusan.edit', $jurusan->id) }}" class="btn btn-success btn-sm">Edit</a>
                                <form action="{{ route('jurusan.destroy', $jurusan->id) }}" class="d-inline" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

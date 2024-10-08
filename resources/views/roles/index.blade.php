@extends('layouts.app')
@section('title', 'Roles')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <a href="{{ route('roles.create') }}"><i class="fas fa-plus"></i> Tambah</a>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($levels as $level)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $level->nama_level }}</td>
                            <td>
                                <a href="{{ route('roles.edit', $level->id) }}" class="btn btn-success btn-sm">Edit</a>
                                <form action="{{ route('roles.destroy', $level->id) }}" class="d-inline" method="POST">
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

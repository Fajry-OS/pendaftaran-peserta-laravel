@extends('layouts.app')
@section('title', 'Gelombang')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <a href="{{ route('gelombang.create') }}"><i class="fas fa-plus"></i> Tambah</a>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Gelombang</th>
                        <th>Aktif</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gelombang as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_gelombang }}</td>
                            <td>
                                <form action="{{ route('updateStatus', $item->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <select class="form-control" name="aktif" onchange="this.form.submit()">
                                        <option value="0" {{ $item->aktif == 0 ? 'selected' : '' }}>Tidak Aktif
                                        </option>
                                        <option value="1" {{ $item->aktif == 1 ? 'selected' : '' }}>Aktif</option>
                                    </select>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('gelombang.edit', $item->id) }}" class="btn btn-success btn-sm">Edit</a>
                                <form action="{{ route('gelombang.destroy', $item->id) }}" class="d-inline" method="POST">
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

@extends('layouts.app')
@section('title', 'Edit Jurusan')
@section('content')
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Edit Jurusan</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="" class="form-label">Nama Jurusan</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama_jurusan" placeholder="Nama Jurusan"
                            value="{{ $jurusan->nama_jurusan }}">
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Save</button>
                    <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection

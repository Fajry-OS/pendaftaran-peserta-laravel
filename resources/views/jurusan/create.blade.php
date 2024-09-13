@extends('layouts.app')
@section('title', 'Add Jurusan')
@section('content')
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Add Jurusan</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('jurusan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="" class="form-label">Nama Jurusan</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama_jurusan" placeholder="Nama Jurusan">
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Save</button>
                    <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

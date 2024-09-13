@extends('layouts.app')
@section('title', 'Add Gelombang')
@section('content')
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Add Gelombang</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('gelombang.store') }}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="" class="form-label">Nama Gelombang</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama_gelombang"
                            placeholder="Masukkan Nama Gelombang">
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Save</button>
                    <a href="{{ route('gelombang.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

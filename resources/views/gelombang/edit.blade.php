@extends('layouts.app')
@section('title', 'Edit Gelombang')
@section('content')
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Edit Gelombang</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('gelombang.update', $gelombang->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="" class="form-label">Nama Gelombang</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama_gelombang"
                            value="{{ $gelombang->nama_gelombang }}">
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Save</button>
                    <a href="{{ route('gelombang.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection

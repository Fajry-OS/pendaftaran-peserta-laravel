@extends('layouts.app')
@section('title', 'Edit Role')
@section('content')
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Edit Role</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('roles.update', $level->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="" class="form-label">Role</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama_level" placeholder="Nama Level"
                            value="{{ $level->nama_level }}">
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Save</button>
                    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('title', 'Edit User')
@section('content')
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Edit User</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="" class="form-label">Nama Lengkap</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap"
                            value="{{ $user->nama_lengkap }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="" class="form-label">Email</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" name="email" placeholder="Masukkan Email Anda"
                            value="{{ $user->email }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="" class="form-label">Role</label>
                    </div>
                    <div class="col-sm-5">
                        <select class="form-select form-control" name="id_level" id="defaultSelect">
                            <option value="" selected>Pilih Role User</option>
                            @foreach ($level as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $user->id_level ? 'selected' : '' }}>
                                    {{ $item->nama_level }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="" class="form-label">Password</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
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

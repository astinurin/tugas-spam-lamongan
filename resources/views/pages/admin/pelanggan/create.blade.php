@extends('layouts.admin.dashboard')

@section('title', 'Tambah Pelanggan')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0">Tambah Pelanggan</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.pelanggan.store') }}" method="POST" class="pt-2">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">Nama</label>
                            <input type="text" name="nama" id="nama"
                                class="form-control form-control-lg @error('nama') is-invalid @enderror"
                                value="{{ old('nama') }}" placeholder="Nama lengkap" required>
                            @error('nama')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label fw-semibold">Alamat</label>
                            <input type="text" name="alamat" id="alamat"
                                class="form-control form-control-lg @error('alamat') is-invalid @enderror"
                                value="{{ old('alamat') }}" placeholder="Alamat lengkap" required>
                            @error('alamat')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="no_meter" class="form-label fw-semibold">No. Meter</label>
                            <input type="text" name="no_meter" id="no_meter"
                                class="form-control form-control-lg @error('no_meter') is-invalid @enderror"
                                value="{{ old('no_meter') }}" placeholder="12345678" required>
                            @error('no_meter')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.pelanggan.index') }}" class="btn btn-outline-secondary">
                                <i class="bx bx-arrow-back"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bx bx-save"></i> Simpan
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

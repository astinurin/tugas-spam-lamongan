@extends('layouts.admin.dashboard')

@section('title', 'Edit Pelanggan')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-semibold mb-0">Edit Pelanggan</h4>
        <a href="{{ route('admin.pelanggan.index') }}" class="btn btn-secondary">
            <i class="bx bx-arrow-back"></i> Kembali
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.pelanggan.update', $pelanggan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" id="nama"
                               class="form-control"
                               value="{{ old('nama', $pelanggan->nama) }}"
                               required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat" id="alamat"
                               class="form-control"
                               value="{{ old('alamat', $pelanggan->alamat) }}"
                               required>
                    </div>
                </div>

                <div class="row mb-4">
                    <label for="no_meter" class="col-sm-2 col-form-label">No. Meter</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_meter" id="no_meter"
                               class="form-control"
                               value="{{ old('no_meter', $pelanggan->no_meter) }}"
                               required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">
                            <i class="bx bx-save"></i> Simpan Perubahan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

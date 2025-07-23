@extends('layouts.admin.dashboard')

@section('title', 'Data Pelanggan')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold">Data Pelanggan</h4>
        <a href="{{ route('admin.pelanggan.create') }}" class="btn btn-primary">
            <i class="bx bx-plus me-1"></i> Tambah Pelanggan
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <h5 class="card-header">Daftar Pelanggan</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-nowrap">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. Meter</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pelanggan as $index => $p)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td class="d-flex align-items-center">
                                
                                <span class="fw-semibold">{{ $p->nama }}</span>
                            </td>
                            <td>{{ $p->alamat }}</td>
                            <td>{{ $p->no_meter }}</td>
                           
                            <td class="text-center align-middle">
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <a href="{{ route('admin.pelanggan.edit', $p->id) }}"
                                        class="btn btn-sm btn-warning btn-icon text-white">
                                            <i class="bx bx-edit-alt"></i>
                                        </a>

                                        <form action="{{ route('admin.pelanggan.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger btn-icon text-white">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">Belum ada data pelanggan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

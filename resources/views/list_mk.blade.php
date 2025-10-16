@extends('layouts.app')

@section('title', 'Daftar Mata Kuliah')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100" 
     style="background: linear-gradient(135deg, #eef2f7 0%, #ffffff 100%);">

    <div class="card shadow-lg border-0 rounded-4 p-4" 
         style="width: 100%; max-width: 800px; background-color: #ffffff;">

        <h2 class="fw-bold text-center mb-4" 
            style="color: #2c3e50; letter-spacing: 1px; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">
            📚 Daftar Mata Kuliah
        </h2>

        <div class="text-center mb-4">
            <a href="{{ route('matakuliah.create') }}" 
               class="btn btn-success px-4 py-2 shadow-sm fw-semibold" 
               style="border-radius: 25px; transition: 0.3s;">
                <i class="fa-solid fa-plus me-1"></i> Tambah Mata Kuliah
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle text-center mb-0 rounded-3 overflow-hidden" 
                   style="border: 1px solid #e0e0e0;">
                <thead class="text-white" style="background: linear-gradient(90deg, #1abc9c, #16a085);">
                    <tr>
                        <th style="width: 10%">ID</th>
                        <th style="width: 45%">Nama Mata Kuliah</th>
                        <th style="width: 10%">SKS</th>
                        <th style="width: 25%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mks as $mk)
                        <tr style="transition: background-color 0.2s ease;">
                            <td class="text-muted small fw-semibold">{{ $mk->id }}</td>
                            <td class="fw-semibold text-start ps-4" style="color: #2c3e50;">{{ $mk->nama_mk }}</td>
                            <td class="fw-semibold">{{ $mk->sks }}</td>
                            <td>
                                <a href="{{ route('matakuliah.edit', $mk->id) }}" 
                                   class="btn btn-sm btn-warning text-white me-2 px-3 fw-semibold"
                                   style="border-radius: 20px; transition: 0.3s;">
                                    <i class="fa-solid fa-pen-to-square me-1"></i> Edit
                                </a>
                                <form action="{{ route('matakuliah.destroy', $mk->id) }}" 
                                      method="POST" 
                                      style="display:inline-block"
                                      onsubmit="return confirm('Yakin ingin menghapus mata kuliah ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-sm btn-danger text-white px-3 fw-semibold"
                                            style="border-radius: 20px; transition: 0.3s;">
                                        <i class="fa-solid fa-trash-can me-1"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-muted fst-italic py-4" style="font-size: 0.95rem;">
                                Belum ada data mata kuliah.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="text-center mt-4">
            <p class="text-muted small mb-0">
                Total Mata Kuliah: <span class="fw-bold text-success">{{ count($mks) }}</span>
            </p>
        </div>
    </div>
</div>

<style>
.table tbody tr:hover {
    background-color: #f9fdfd !important;
}
.btn-success:hover {
    background-color: #148f77 !important;
    transform: scale(1.05);
}
.btn-warning:hover, .btn-danger:hover {
    opacity: 0.9;
    transform: translateY(-2px);
}
</style>
@endsection

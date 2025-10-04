@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-center">➕ Buat Pengguna Baru</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama">
                </div>

                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" id="npm" name="npm" class="form-control" placeholder="Masukkan NPM">
                </div>

                <div class="mb-3">
                    <label for="kelas_id" class="form-label">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-select">
                        @foreach ($kelas as $kelasm)
                            <option value="{{ $kelasm->id }}">{{ $kelasm->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

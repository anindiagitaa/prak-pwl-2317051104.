@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mb-4 text-center" style="font-family: Poppins; color:#2c3e50;">Edit Mata Kuliah</h1>

    {{-- ALERT SUKSES / ERROR --}}
    @if (session('success'))
        <div style="background-color: #d4edda; color:#155724; border-left:5px solid #28a745; padding:10px; margin-bottom:15px; border-radius:8px;">
            ✅ {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div style="background-color: #f8d7da; color:#721c24; border-left:5px solid #dc3545; padding:10px; margin-bottom:15px; border-radius:8px;">
            ❌ {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST"
        style="background:#ffffff; padding:30px; border-radius:15px; box-shadow:0 4px 12px rgba(0,0,0,0.1); max-width:600px; margin:auto;">
        @csrf
        @method('PUT')

        <div style="margin-bottom:20px;">
            <label for="nama_mk" style="font-weight:600;">Nama Mata Kuliah:</label><br>
            <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" required
                style="width:100%; padding:10px; border-radius:8px; border:1px solid #ccc; margin-top:5px;">
        </div>

        <div style="margin-bottom:25px;">
            <label for="sks" style="font-weight:600;">SKS:</label><br>
            <input type="number" id="sks" name="sks" value="{{ $mk->sks }}" required
                style="width:100%; padding:10px; border-radius:8px; border:1px solid #ccc; margin-top:5px;">
        </div>

        <button type="submit"
            style="background: linear-gradient(135deg, #007bff, #00c6ff); color:white; border:none; padding:12px 25px; border-radius:10px; font-weight:600; letter-spacing:0.5px; cursor:pointer; transition: all 0.3s ease;">
            ✨ Update
        </button>
    </form>
</div>

{{-- ANIMASI HOVER --}}
<style>
    button:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(0, 123, 255, 0.4);
    }
</style>

@endsection

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header text-center bg-dark text-white rounded-top-4">
            <h3>Buat Pengguna Baru</h3>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold">Nama</label>
                    <input type="text" class="form-control rounded-3" id="nama" name="nama" placeholder="Masukkan nama lengkap">
                </div>

                <!-- NPM -->
                <div class="mb-3">
                    <label for="nim" class="form-label fw-semibold">NPM</label>
                    <input type="text" class="form-control rounded-3" id="nim" name="nim" placeholder="Masukkan NPM">
                </div>

                <!-- Kelas -->
                <div class="mb-4">
                    <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                    <select class="form-select rounded-3" name="kelas_id" id="kelas_id">
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Submit -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary rounded-3">
                        <i class="bi bi-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

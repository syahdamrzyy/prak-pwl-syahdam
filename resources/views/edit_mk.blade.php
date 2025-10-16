@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 flex items-center justify-center py-10">
    <div class="bg-white w-full max-w-lg shadow-md rounded-2xl p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-gray-800 flex items-center gap-2">
                ✏️ Edit Mata Kuliah
            </h1>
            <a href="{{ route('matakuliah.index') }}"
               class="text-sm bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1.5 rounded-lg transition">
               ← Kembali
            </a>
        </div>

        {{-- Notifikasi sukses --}}
        @if(session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="nama_mk" class="block text-gray-700 font-medium mb-1">
                    Nama Mata Kuliah
                </label>
                <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}"
                       class="w-full border border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 rounded-lg p-2.5 outline-none"
                       required>
            </div>

            <div>
                <label for="sks" class="block text-gray-700 font-medium mb-1">
                    Jumlah SKS
                </label>
                <input type="number" id="sks" name="sks" value="{{ $mk->sks }}"
                       class="w-full border border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 rounded-lg p-2.5 outline-none"
                       required>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2.5 rounded-lg shadow-sm transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

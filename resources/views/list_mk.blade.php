@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-10">
    <div class="max-w-5xl mx-auto bg-white shadow-md rounded-2xl p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-gray-800 flex items-center gap-2">
                📚 Daftar Mata Kuliah
            </h1>
            <a href="{{ route('matakuliah.create') }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-4 py-2 rounded-lg shadow transition">
               + Tambah Mata Kuliah
            </a>
        </div>

        {{-- Pesan sukses --}}
        @if(session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        {{-- Alert sukses --}}
@if(session('success'))
    <div class="mb-4 flex items-center gap-2 bg-green-100 border border-green-400 text-green-800 px-4 py-3 rounded-lg">
        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M5 13l4 4L19 7" />
        </svg>
        <span>{{ session('success') }}</span>
    </div>
@endif

{{-- Alert error --}}
@if ($errors->any())
    <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-indigo-600 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Nama Mata Kuliah</th>
                        <th class="px-4 py-2 text-left">SKS</th>
                        <th class="px-4 py-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($mks as $mk)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-4 py-2 text-gray-700">{{ $mk->id }}</td>
                            <td class="px-4 py-2 text-gray-800 font-medium">{{ $mk->nama_mk }}</td>
                            <td class="px-4 py-2 text-gray-700">{{ $mk->sks }}</td>
                            <td class="px-4 py-2 flex gap-2">
                                {{-- Tombol Edit --}}
                                <a href="{{ route('matakuliah.edit', $mk->id) }}"
                                   class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded">
                                   Edit
                                </a>

                                {{-- Tombol Hapus --}}
                                <form action="{{ route('matakuliah.destroy', $mk->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus mata kuliah ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if ($mks->isEmpty())
            <p class="text-center text-gray-500 mt-4">Belum ada data mata kuliah 😅</p>
        @endif
    </div>
</div>

<script>
    setTimeout(() => {
        document.querySelectorAll('.bg-green-100, .bg-red-100').forEach(el => el.remove());
    }, 3000); // 3 detik
</script>

@endsection

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

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-indigo-600 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Nama Mata Kuliah</th>
                        <th class="px-4 py-2 text-left">SKS</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($mks as $mk)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-4 py-2 text-gray-700">{{ $mk->id }}</td>
                            <td class="px-4 py-2 text-gray-800 font-medium">{{ $mk->nama_mk }}</td>
                            <td class="px-4 py-2 text-gray-700">{{ $mk->sks }}</td>
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
@endsection

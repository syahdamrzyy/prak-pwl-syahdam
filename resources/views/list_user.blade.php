@extends('layouts.app')

@section('content')
<h1 style="text-align:center; margin-bottom:20px; color:#fff;">Daftar Pengguna</h1>

<table style="
    width: 100%;
    border-collapse: collapse;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #1e1e1e;
    color: #e0e0e0;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 6px 15px rgba(0,0,0,0.5);
">
    <thead style="background: #2c2c2c;">
        <tr>
            <th style="padding: 12px; text-align: left; color:#f1f1f1;">Nama</th>
            <th style="padding: 12px; text-align: left; color:#f1f1f1;">NPM</th>
            <th style="padding: 12px; text-align: left; color:#f1f1f1;">Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr style="transition: background 0.2s;">
            <td style="padding: 12px; border-bottom: 1px solid #333;">{{ $user->nama }}</td>
            <td style="padding: 12px; border-bottom: 1px solid #333;">{{ $user->nim }}</td>
            <td style="padding: 12px; border-bottom: 1px solid #333;">{{ $user->nama_kelas }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

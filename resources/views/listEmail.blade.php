{{-- @dd($data) --}}

@extends('layouts.main')
 
@section('content')
    <div class="mt-1" >
        <p>Ini halaman {{ $title }}</p>
        <table border="2">
            <tr >
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor telepon</th>
                <!-- Tambahkan kolom lain yang ingin ditampilkan -->
            </tr>
            @if(is_array($data) && array_keys($data) !== range(0, count($data) - 1))
            <tr>
                <td>{{ $data['nama'] }}</td>
                <td>{{ $data['email'] }}</td>
                <td>{{ $data['nomor'] }}</td>
            </tr>
        @else
            @foreach ($data as $p)
                <tr>
                    <td>{{ $p['nama'] }}</td>
                    <td>{{ $p['email'] }}</td>
                    <td>{{ $p['nomor'] }}</td>
                </tr>
            @endforeach
        @endif
        </table>
  </div>
@endsection
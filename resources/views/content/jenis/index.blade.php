@extends('base')
@section('title')
@section('content')
    <div class="card table-responsive">
        <div class="card-body">
            <div class="mb-5">
                <center>
                    <h2>
                        {{ $title }}
                    </h2>
                </center>
            </div>
            <form action="">
                <a href="{{ route('jenis.create') }}" class="btn btn-sm shadow btn-success">
                    <i class="flaticon-381-plus"></i>
                    Tambah Paket</a>
                </form>

            <br>

            <table class="example display ">
                <thead class="light">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Jenis Paket</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($jenis as $item)

                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td>{{ $item->jenis_nama }}</td>
                        <td class="text-center">
                            @if ($item->jenis_status != 1)
                            <b>{{$item->jenis_harga ?? 'Hitung'}}/Pcs</b>
                            @else
                            @Rp($item->jenis_harga)/Kg
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
        </div>
    </div>
@endsection

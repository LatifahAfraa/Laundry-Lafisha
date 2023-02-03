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
                <a href="" class="btn btn-sm shadow btn-success">
                    <i class="flaticon-381-plus"></i>
                    Tambah Kain Masuk</a>
                </form>

            <br>

            <table class="example display ">
                <thead class="light">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Jenis Paket</th>
                        <th>Berat</th>
                        <th>Harga</th>
                        <th>Helaian</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Harga Total</th>
                        <th>Status Pembayaran</th>
                        <th>Status Kain</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($kainMasuk as $item)

                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->id_pelanggan }}</td>
                        <td>{{ $item->id_jenis }}</td>
                        <td>{{ $item->berat }}</td>
                        <td>{{ $item->harga1 }}</td>
                        <td>{{ $item->id_helaian }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->harga2 }}</td>
                        <td>{{ $item->harga_total }}</td>
                        <td>{{ $item->pembayaran }}</td>
                        <td>{{ $item->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
        </div>
    </div>
@endsection

@extends('base')
@section('title')
@section('content')
    <div class="card table-responsive">
        <div class="card-body">
            <div class="mb-5">
                <center>
                    <h2>
                        List Harga Helaian Laundry Lafisha
                    </h2>
                </center>
            </div>
            <form action="">
                <a href="" class="btn btn-sm shadow btn-success">
                    <i class="flaticon-381-plus"></i>
                    Tambah Helaian</a>
                </form>

            <br>

            <table class="example display ">
                <thead class="light">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($helaian as $item)

                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nama_helaian }}</td>
                        <td>@Rp($item->harga_helaian)</td>
                        <td class="text-center">
                            <div class="col">
                                <a href="" class="btn btn-sm shadow btn-warning">
                                    <i class="flaticon-381-edit"></i>
                                    Edit</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
        </div>
    </div>
@endsection

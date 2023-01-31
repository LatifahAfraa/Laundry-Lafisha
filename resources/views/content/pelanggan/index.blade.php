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
                <a href="{{ route('pelanggan.create') }}" class="btn btn-sm shadow btn-success">
                    <i class="flaticon-381-plus"></i>
                    Tambah Pelanggan</a>
                </form>

            <br>

            <table class="example display ">
                <thead class="light">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>No Hp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($pelanggan as $item)

                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nama_pelanggan }}</td>
                        <td>{{ $item->no_pelanggan }}</td>
                        <td class="text-center">
                            <div class="col">
                                <a href="{{ route('pelanggan.edit', $item->id) }}" class="btn btn-sm shadow btn-warning">
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

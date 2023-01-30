@extends('master')
@section('title', 'Laundry Lafisha - Pelanggan')
@section('content')
    <div class="card table-responsive">
        <div class="card-body">
            <div class="mb-5">
                <center>
                    <h2>
                        List Pelanggan Laundry Lafisha
                    </h2>
                </center>
            </div>
            <br>

            <br>
            <table id="" class="example-display table-bordered mt-2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>No Hp</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                </tbody>
            </table>
            <br>
        </div>
    </div>
@endsection

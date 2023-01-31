@extends('base')
@section('title')
@section('content')

<div class="col-xl-12 col-lg-12 col-sm-12 mt-2">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <center><h3>{{ $title }}</h3></center><br>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
           <form action="{{ route('jenis.store') }}" method="post" >
        @csrf
        <div class="form-group row mb-1">
            <label for="jenis_nama" class="col-sm-3 col-form-label">Jenis Paket</label>
            <div class="col-sm-9">
                <input type="text" name="jenis_nama" class="form-control" required autofocus>
            </div>
        </div>

        <div class="form-group row mb-1">
            <label for="jenis_harga" class="col-sm-3 col-form-label">Harga</label>
            <div class="col-sm-9">
                <input type="number" name="jenis_harga" class="form-control" autofocus>
            </div>
        </div>

        <div class="form-group row mb-1">
            <label for="jenis_status" class="col-sm-3 col-form-label">Jenis Status</label>
            <div class="col-sm-9">
                <input type="number" name="jenis_status" class="form-control" value="1" required autofocus>
            </div>
        </div>

        <button type="submit" class="btn btn-success float-end mt-2">Simpan</button>


        </form>
        </div>
    </div>
</div>
@endsection

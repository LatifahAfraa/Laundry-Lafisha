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
           <form action="{{ route('pelanggan.store') }}" method="post" >
        @csrf
        <div class="form-group row mb-1">
            <label for="nama_pelanggan" class="col-sm-3 col-form-label">Nama Pelanggan</label>
            <div class="col-sm-9">
                <input type="text" name="nama_pelanggan" class="form-control" required autofocus>
            </div>
        </div>

        <div class="form-group row mb-1">
            <label for="no_pelanggan" class="col-sm-3 col-form-label">No Hp Pelanggan</label>
            <div class="col-sm-9">
                <input type="number" name="no_pelanggan" class="form-control" autofocus>
            </div>
        </div>

        <button type="submit" class="btn btn-success float-end mt-2">Simpan</button>


        </form>
        </div>
    </div>
</div>
@endsection

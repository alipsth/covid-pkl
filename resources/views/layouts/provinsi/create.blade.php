@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data provinsi') }}</div>
                <div class="card-body">
                <form action="{{route('prov.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Provinsi</label>
                    <input type="text" name="kode_prov" class="form-control" 
                    id="exampleInputEmail" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Provinsi</label>
                    <input type="text" name="nama_prov" class="form-control" 
                    id="exampleInputEmail" aria-describedby="emailHelp">
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
@endsection

@section('js')
@endsection
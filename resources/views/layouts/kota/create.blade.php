@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kota') }}</div>
                <div class="card-body">
                <form action="{{route('kota.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Kota</label>
                    <input type="text" name="kode_kota" class="form-control" 
                    id="exampleInputEmail" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Kota</label>
                    <input type="text" name="nama_kota" class="form-control" 
                    id="exampleInputEmail" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                            <label for="">Nama Provinsi</label>
                            <select class="form-control" name="provinsis_id" id="">
                                @foreach($prov as $data)
                                <option value="{{$data->id}}">{{$data->nama_prov}}</option>
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
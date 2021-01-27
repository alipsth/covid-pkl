@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('prov.update',$prov->id) }}" method="post">
                        @csrf   
                        @method('PUT')
                            <div class="form-group">
                                <label for="">Nis</label>
                                    <input type="number" name="kode_prov" value="{{ $prov->kode_prov }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Siswa</label>
                                    <input type="text" name="nama_prov" value="{{ $prov->nama_prov }}"class="form-control" required>
                            </div>
                        <button class="btn btn-outline-primary" type="submit">Simpan</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
@endsection
@section('js')
@endsection
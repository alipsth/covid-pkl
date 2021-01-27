@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
             @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
            <div class="card">
                <div class="card-header">Data Provinsi</div>

                <div class="card-body">
                    <a href="{{ route('prov.create') }}" class="btn btn-outline-primary form-control">
                        Tambah data
                    </a>

                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Kode Provinsi</th>
                            <th>Nama Provinsi</th>
                            <th>Action</th> 
                        </thead>

                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($prov as $data)
                            <tr>
                                <td> {{ $no++ }} </td>
                                <td> {{ $data->kode_prov }} </td>
                                <td> {{ $data->nama_prov}} </td>
                                <td>
                                    <form action="{{ route('prov.destroy',$data->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('prov.edit', $data->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('prov.show', $data->id) }}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> </a>
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>                      
</div>
@endsection


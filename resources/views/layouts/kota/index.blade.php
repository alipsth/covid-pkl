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
                <div class="card-header">Data Kota</div>

                <div class="card-body">
                    <a href="{{ route('kota.create') }}" class="btn btn-outline-primary form-control">
                        Tambah data
                    </a>

                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Kode Kota</th>
                            <th>Nama Kota</th>
                            <th>Provinsi</th>
                            <th>Action</th> 
                        </thead>

                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($kota as $data)
                            <tr>
                                <td> {{ $no++ }} </td>
                                <td> {{ $data->provinsis_id }} </td>
                                <td> {{ $data->kode_kota }} </td>
                                <td> {{ $data->prov->provinsis_id}} </td>
                                <td>
                                    <form action="{{ route('kota.destroy',$data->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('kota.edit', $data->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('kota.show', $data->id) }}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> </a>
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

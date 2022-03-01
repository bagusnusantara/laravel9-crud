@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="mt-2">Detail Pelanggan</h5><a href="{{ url('pelanggan') }}"
                            class="btn btn-secondary">
                            Kembali
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <th>KODE PELANGGAN</th>
                                    <td>{{ $data->kode_pelanggan }}</td>
                                </tr>
                                <tr>
                                    <th>NAMA PELANGGAN</th>
                                    <td>{{ $data->nama_pelanggan }}</td>
                                </tr>
                                <tr>
                                    <th>ALAMAT</th>
                                    <td>{{ $data->alamat }}</td>
                                </tr>
                                <tr>
                                    <th>KOTA</th>
                                    <td>{{ $data->kota }}</td>
                                </tr>
                                <tr>
                                    <th>NO. TELEPON</th>
                                    <td>{{ $data->no_telepon }}</td>
                                </tr>
                                <tr>
                                    <th>JENIS PELANGGAN</th>
                                    <td>{{ ucfirst($data->jenis_pelanggan) }}</td>
                                </tr>
                                <tr>
                                    <th>PLAFON</th>
                                    <td>Rp. {{ number_format($data->plafon,0,',','.') }},00</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

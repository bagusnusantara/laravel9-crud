@extends('layouts.app')
@section('prestyles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="mt-2">Data Pelanggan</h5><a href="{{ route('pelanggan.create') }}"
                            class="btn btn-secondary">
                            Tambah
                        </a>
                    </div>
                    <div class="card-body">
                        @if (session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div><br />
                        @endif
                        <table class="table table-striped table-bordered" id="datatable">
                            <thead>
                                <tr class="text-center">
                                    <th>NO.</th>
                                    <th>KODE</th>
                                    <th>NAMA</th>
                                    <th>ALAMAT</th>
                                    <th>KOTA</th>
                                    <th>NO. TLP</th>
                                    <th>PLAFON</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                 $i=1;   
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="text-center">{{ $i++ }}</td>
                                        <td class="text-center">{{ $item->kode_pelanggan }}</td>
                                        <td>{{ $item->nama_pelanggan }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->kota }}</td>
                                        <td>{{ $item->no_telepon }}</td>
                                        <td class="text-center">Rp. {{ number_format($item->plafon,0,',','.') }},00</td>
                                        <td class="text-center">
                                            <a class="btn btn-success" href="{{ route('pelanggan.show', $item->kode_pelanggan) }}"><i class="bi-list"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-primary" href="{{ route('pelanggan.edit', $item->kode_pelanggan) }}"><i class="bi-pencil-square"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <form class="form-inline"
                                                action="{{ route('pelanggan.destroy', $item->kode_pelanggan) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit"><i
                                                        class="bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="alert alert-warning justify-content-center mt-2">
                            <h6 class="text-center">Jumlah pelangan : {{ $data->count() }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
@endsection

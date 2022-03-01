@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="mt-2">Tambah Pelanggan</h5><a href="{{ url('pelanggan') }}"
                            class="btn btn-secondary">
                            Kembali
                        </a>
                    </div>

                    <form method="POST" action="{{ route('pelanggan.store') }}">
                        <div class="card-body">
                            <div class="row">
                                @csrf
                                <div class="row mb-3">
                                    <label for="nama_pelanggan" class="col-md-4 col-form-label">Nama Pelanggan</label>

                                    <div class="col-md-8">
                                        <input id="name" type="text"
                                            class="form-control @error('nama_pelanggan') is-invalid @enderror"
                                            name="nama_pelanggan" value="{{ old('nama_pelanggan') }}" required
                                            autocomplete="name" autofocus>

                                        @error('nama_pelanggan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="alamat" class="col-md-4 col-form-label">Alamat</label>

                                    <div class="col-md-8">
                                        <input id="alamat" type="text"
                                            class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                            value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="kota" class="col-md-4 col-form-label">Kota</label>

                                    <div class="col-md-8">
                                        <input id="kota" type="text"
                                            class="form-control @error('kota') is-invalid @enderror" name="kota"
                                            value="{{ old('kota') }}" required autocomplete="kota" autofocus>

                                        @error('kota')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="no_telepon" class="col-md-4 col-form-label">No. Telepon</label>

                                    <div class="col-md-8">
                                        <input id="no_telepon" type="text"
                                            class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon"
                                            value="{{ old('no_telepon') }}" required autocomplete="no_telepon" autofocus>

                                        @error('no_telepon')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jenis_pelanggan" class="col-md-4 col-form-label">Jenis Pelanggan</label>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class="form-check form-check-inline @error('jenis_pelanggan') is-invalid @enderror" autofocus required>
                                                <label for="jenis_pelanggan">
                                                    <input type="radio" name="jenis_pelanggan" value="tunai" id="jenis_pelanggan" required> Tunai
                                                    <input type="radio" name="jenis_pelanggan" value="kredit" id="jenis_pelanggan"> Kredit
                                                </label>
                                            </div>
                                        </div>

                                        @error('jenis_pelanggan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="plafon" class="col-md-4 col-form-label">Plafon (Rp.)</label>

                                    <div class="col-md-8">
                                        <input id="plafon" type="text"
                                            class="form-control @error('plafon') is-invalid @enderror" name="plafon"
                                            value="{{ old('plafon') }}" required autocomplete="plafon" autofocus>

                                        @error('plafon')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>




                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label"></label>

                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-primary">
                                            Simpan
                                        </button>
                                        <a href="{{ url('pelanggan') }}" class="btn btn-secondary">
                                            Batal
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

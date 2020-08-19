@extends('master')

@section('title', 'Tambah Purchaser')

@section('container')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Purchaser</h1>
          </div>
        </div>
      </div>
    <!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Purchaser</h3>
            </div>
            <form action="/purchaser/store" method="post" class="form-horizontal" role="form">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputNIP" class="col-sm-3 col-form-label">NIP</label>
                        <div class="col-sm-9">
                            <input type="text" name="nip" id="nip" class="form-control @error('nip') is-invalid @enderror" placeholder="Masukkan NIP Anda" value="{{ old('nip') }}">
                            @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Anda" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-info float-left" value="Tambah" name="simpan">
                    <a href="/purchaser" class="btn btn-danger float-right" type="submit">Cancel</a>
                </div>
            </form>
        </div>
    </section>
    </div>
@endsection
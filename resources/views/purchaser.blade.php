@extends('master')

@section('title','purchaser')
    
@section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Purchaser</h1>
          </div>
        </div>
        @if (session('pesan'))
              {!! session('pesan') !!}
          @endif
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Purchaser</h3>
        </div>
        <div class="card-body">
          <table id="tablemonilog" class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>NIP</>
                <th>Nama</th>
                <th>Action</th>
              </tr>
              <tbody>
                @foreach ($purchaser as $purchaser)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $purchaser->nip }}</td>
                  <td>{{ $purchaser->nama }}</td>
                  <td>
                    <a href="/purchaser/{{ $purchaser->id }}/edit" class="btn btn-sm btn-primary">Update</a>
                    <a href="/purchaser/{{ $purchaser->id }}/delete" onclick="return confirm('Yakin Purchaser Ini Mau Dihapus?')" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </thead>
            <tbody></tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <a href="/purchaser/input" class="btn btn-sm btn-info float-left">Tambah Purchaser</a>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection
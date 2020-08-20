@extends('master')

@section('title','material')
    
@section('container')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Master Data Grup Material</h1>
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
              <th>Group Materials</>
              <th>Action</th>
            </tr>
            <tbody>
              @foreach ($material as $material)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $material->group_materials }}</td>
                <td>
                  <a href="/material/{{ $material->id }}/edit" class="btn btn-sm btn-primary">Update</a>
                  <a href="/material/{{ $material->id }}/delete" onclick="return confirm('Yakin Material Ini Mau Dihapus?')" class="btn btn-sm btn-danger">Delete</a>
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
        <a href="/material/input" class="btn btn-sm btn-info float-left">Tambah Group Material</a>
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
@endsection
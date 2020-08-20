@extends('master')

@section('title','purchaser')
    
@section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master Data Purchaser</h1>
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
                    <a href=" #delete" class="btn btn-sm btn-danger trigger-btn" data-toggle="modal">Delete</a>
                    <div id="delete" class="modal fade" style="display: none;" aria-hidden="true">
                      <div class="modal-dialog modal-confirm">
                        <div class="modal-content">
                          <div class="modal-header flex-column">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <div class="icon-box">
                              <i class="far fa-times-circle justify-content-center"></i>
                            </div>
                            <h4 class="modal-title w-100">Delete User</h4>
                          </div>
                          <div class="modal-body">
                            <p>Kamu yakin akan menghapus item ini? Karena proses ini akan membuat data kamu hilang.</p>
                          </div>
                          <div class="modal-footer justify-content-center">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a href="/purchaser/{{ $purchaser->id }}/delete" type="button" class="btn btn-danger">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
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
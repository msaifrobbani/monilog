@extends('master')

@section('title', 'Edit Group Materials')

@section('container')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Group Materials</h1>
          </div>
        </div>
      </div>
    <!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Group Materials</h3>
            </div>
            <form action="/material/update" method="post" class="form-horizontal" role="form">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group row">
                        <input type="hidden" name="id" id="id" class="form-control" value="{{ $material->id }}">
                        <label for="inputmaterials" class="col-sm-3 col-form-label">Group Material</label>
                        <div class="col-sm-9">
                            <input type="text" name="group_materials" class="form-control @error('group_materials') is-invalid @enderror" placeholder="Masukkan Group Material Anda" value="{{ $material->group_materials }}">
                            @error('group_materials')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-info float-left" value="Update" name="simpan">
                    <input type="reset" class="btn btn-danger float-right" value="Reset" name="reset">
                </div>
            </form>
        </div>
    </section>
    </div>
@endsection
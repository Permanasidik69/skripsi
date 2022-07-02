@extends('layouts.app')

@section('content')
@include('sweetalert::alert')

<div class="container">
  <section class="section">
    <div class="section-header">
      <h1>Universitas Informatika dan Bisnis Indonesia</h1>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Fakultas</h4>
              <div class="card-header-action">
                <a href="{{ route('Fakultas.create') }}" class="btn btn-primary">Tambah Data <i class="fas fa-plus"></i></a>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card-body p-0">
                <div class="table-responsive table-invoice">
                  <table id="myTable" class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode Fakultas</th>
                        <th>Nama Fakultas</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>

  <!-- Start Modal Edit -->
  <div class="modal" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="modelHeading"></h4>
        </div>
        <div class="modal-body">
          <div class="card-body">

            <form id="productForm" name="productForm" class="form-horizontal">

              <input type="hidden" name="fakultass" id="fakultass">
              <div class="form-group">
                <label class="col-sm-6 control-label">Kode Fakultas</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="kode_fk" name="kode_fk" maxlength="50" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <label class="col-sm-6 control-label">Nama Fakultas</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="nama_fakultas" name="nama_fakultas" maxlength="50" required="">
                </div>
              </div>

              <div class="card-footer text-right">
                <div class="mt-3">
                  <button type="submit" class="btn btn-success btn-sm" id="saveBtn" value="create">Save changes</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal Edit -->
</section>
</div>
@endsection
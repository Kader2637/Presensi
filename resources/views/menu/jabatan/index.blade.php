@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Jabatan</h4>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" type="button">Tambah</button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Absensi</h4>
                <div data-simplebar style="max-height: 376px;">
                    <div class="vstack gap-4">
                        <div class="table-responsive">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                              <tr>
                                <th style="background-color: #1B3061" class="text-white">No</th>
                                <th style="background-color: #1B3061" class="text-white">Nama</th>
                                <th style="background-color: #1B3061" class="text-white">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ( $positions as $position )
                              <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$position->name}}</td>
                                <td>
                                  <button href="" class="btn btn-warning">Edit</button>
                                  <button href="" class="btn btn-danger">Hapus</button>
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
    </div>
</div>

{{-- modal  --}}
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Tambah Jabatan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/position" method="post">
              @csrf
              @method('POST')
              <div class="modal-body">
                  <label for="">Nama</label>
                  <input type="text" name="name" class="form-control">
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
              </div>
          </form>
      </div>
  </div>
</div>
{{-- end modal  --}}
@endsection
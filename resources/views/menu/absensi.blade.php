@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Absensi Pegawai</h4>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">

      <h4 class="card-title">Informasi</h4>
      <div class="row mt-3">
        <div class="col">
          <div class="text-center alert alert-danger fs-6" role="alert">
            Belum Hadir
          </div>
        </div>
        <div class="col">
          <div class="alert text-center alert-warning fs-6" role="alert">
            Izin, Sakit, Telat,
          </div>
        </div>
        <div class="col">
          <div class="alert text-center alert-success fs-6" role="alert">
            Sudah Absen
          </div>
        </div>
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
                                <th style="background-color: #1B3061" class="text-white">Siswa</th>
                                <th style="background-color: #1B3061" class="text-white">Sekolah</th>
                                {{-- <th style="background-color: #1B3061" class="text-white">Tanggal</th> --}}
                                <th style="background-color: #1B3061" class="text-white">Keterangan</th>
                                <th style="background-color: #1B3061" class="text-white">Masuk</th>
                                <th style="background-color: #1B3061" class="text-white">Istirahat</th>
                                <th style="background-color: #1B3061" class="text-white">Kembali</th>
                                <th style="background-color: #1B3061" class="text-white">Pulang</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Abdul Kader</td>
                                <td>Smkn 1 kraksaan</td>
                                <td>
                                  <div class="btn btn-soft-success waves-effect waves-light">
                                    18 : 00
                                  </div>
                                </td>
                                <td>
                                  <div class="btn btn-soft-success waves-effect waves-light">
                                    18 : 00
                                  </div>
                                </td>
                                <td>
                                  <div class="btn btn-soft-warning waves-effect waves-light">
                                    18 : 00
                                  </div>
                                </td>
                                <td>
                                  <div class="btn btn-soft-success waves-effect waves-light">
                                    18 : 00
                                  </div>
                                </td>
                                <td>
                                  <div class="btn btn-soft-danger waves-effect waves-light">
                                    Belum Hadir
                                  </div>
                                </td>
                            </tbody>
                          </table>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
  <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
  data-bs-target="#exportExcelModal">Rekap Excel</button>

<!-- Export Excel Modal -->
<div class="modal fade" id="exportExcelModal" tabindex="-1"
  aria-labelledby="exportExcelModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exportExcelModalLabel">Rekap Excel</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"
                  aria-label="Close"></button>
          </div>
          <form action="{{ route('list.attendance.admin.export.excel') }}"
              method="get">
              <div class="modal-body">
                  <div class="mb-3">
                      <label for="yearInput" class="form-label">Tahun</label>
                      <select class="form-select" id="yearInput" name="year">
                          @foreach ($attendanceYears as $year)
                              <option
                                  value="{{ $year->year }}"{{ request()->input('year', now()->year) == $year->year ? ' selected' : '' }}>
                                  {{ $year->year }}
                              </option>
                          @endforeach
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="monthInput" class="form-label">Bulan</label>
                      <select class="form-select" id="monthInput" name="month">
                          @foreach ($attendanceMonth as $month)
                              <option
                                  value="{{ $month->month }}"{{ request()->input('month', now()->month) == $month->month ? ' selected' : '' }}>
                                  {{ $month->month }}
                              </option>
                          @endforeach
                      </select>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Rekap</button>
                  <button type="button" class="btn btn-secondary"
                      data-bs-dismiss="modal">Close</button>
              </div>
          </form>
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

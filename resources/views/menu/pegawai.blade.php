@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Pegawai</h4>
            </div>
        </div>
    </div>
    {{-- modal  --}}
    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Tambah pegawai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('employe.store') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <label for="">Nama</label>
                                <input type="text" name="name" class="form-control">
                                @error('name')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="col-12 col-xl-4">
                                <label for="">Email</label>
                                <input type="gmail" name="email" class="form-control">
                                @error('email')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="col-12 col-xl-4">
                                <label for="">NIK</label>
                                <input type="text" name="nik" class="form-control">
                                @error('nik')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="col-12 col-xl-4 mt-2">
                                <label for="">Jabatan</label>
                                <input type="text" name="position" class="form-control">
                                @error('position')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="col-12 col-xl-4 mt-2">
                                <label for="">Jenis Kelamin</label><br>
                                <input type="radio" name="gender" value="male"> Laki-Laki
                                <input type="radio" name="gender" value="female"> Perempuan
                                @error('gender')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="col-12 col-xl-4 mt-2">
                                <label for="">Gaji</label>
                                <input type="number" name="wages" class="form-control">
                                @error('wages')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="col-12 col-xl-6 mt-2">
                                <label for="">RFID</label>
                                <input type="text" name="rfid" class="form-control">
                                @error('rfid')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="col-12 col-xl-6 mt-2">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="date_of_birth" class="form-control">
                                @error('date_of_birth')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Alamat</label>
                                <textarea name="address" class="form-control" id=""></textarea>
                                @error('address')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal  --}}
    @foreach(['name', 'email', 'nik', 'address', 'date_of_birth', 'rfid', 'wages', 'gender'] as $field)
    @error($field)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="mdi mdi-block-helper me-2"></i>
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @enderror
@endforeach
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h4 class="card-title mb-4">Pegawai</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"
                            type="button">Tambah</button>
                    </div>
                    <div data-simplebar style="max-height: 376px;">
                        <div class="vstack gap-4">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="background-color: #1B3061" class="text-white">No</th>
                                            <th style="background-color: #1B3061" class="text-white">Nama</th>
                                            <th style="background-color: #1B3061" class="text-white">Email</th>
                                            <th style="background-color: #1B3061" class="text-white">NIK</th>
                                            <th style="background-color: #1B3061" class="text-white">Jabatan</th>
                                            <th style="background-color: #1B3061" class="text-white">Jenis Kelamin</th>
                                            <th style="background-color: #1B3061" class="text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($employees as $employes)
                                            <tr>
                                                <td>1</td>
                                                <td>Abdul Kader</td>
                                                <td>abdulkader0126@gmail.com</td>
                                                <td>K 01 K</td>
                                                <td>Programmer</td>
                                                <td>Laki-Laki</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <button class="btn btn-info">Detail</button>
                                                        <button class="btn btn-warning">Edit</button>
                                                        <button class="btn btn-danger">Hapus</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="9">
                                                    <div class="d-flex justify-content-center">
                                                        <img src="{{ asset('nodata.png') }}"
                                                            width="300px
                                                    "
                                                            alt="">
                                                    </div>
                                                    <p class="text-center fs-5 mt-4" style="font-weight:700">
                                                        Data Masih Kosong
                                                    </p>
                                                </td>
                                            </tr>
                                        @endforelse
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

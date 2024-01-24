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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Default Modal Heading</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Overflowing text to show scroll behavior</h5>
                    <p>Cras mattis consectetur purus sit amet fermentum.
                        Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac
                        consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur.
                        Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec
                        ullamcorper nulla non metus auctor
                        fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum.
                        Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac
                        consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur.
                        Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec
                        ullamcorper nulla non metus auctor
                        fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum.
                        Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac
                        consectetur ac, vestibulum at eros.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal  --}}
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h4 class="card-title mb-4">Pegawai</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" type="button">Tambah</button>
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
                                        @forelse ($employes as $employe)  
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
                                            <td colspan="8">
                                                Data Masih Kosong
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

@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h4 class="card-title mb-4">Tambah Image Wajah</h4>
        <a href="/face" class="btn btn-primary">Kembali</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="repeater" action="/face/create" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div data-repeater-list="group-a">
                            <div data-repeater-item class="row">
                                <div class="mb-3 col-lg-12">
                                    <input type="hidden" name="employee_id" value="{{ $id }}">
                                    <label for="name">Image</label>
                                    <input type="file" id="name" name="photo[]" class="form-control"
                                        placeholder="Enter Your Name" multiple />
                                </div>
                            </div>

                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between mb-4">
        <h4 class="card-title mb-4">Data Image Wajah</h4>
        <div class="d-flex gap-2">
            <button class="btn btn-danger btn-delete" data-id="{{ $id }}" id="{{ $id }}">Hapus</button>
            <button class="btn btn-primary btn-edit" data-id="{{ $id }}" id="{{ $id }}">Edit</button>
        </div>
    </div>

    <div class="row">
        @forelse ($faces as $face)
            <div class="col-12 col-xl-3 col-lg-12 ">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('storage/' . $face->photo) }}" alt="{{ $face->photo }}" class="w-100">
                    </div>
                </div>
            </div>
        @empty
            <div class="d-flex justify-content-center">
                <div class="">
                    <img src="{{ asset('nodata.png') }}" width="300px" height="300px" alt="" srcset="">
                    <p class="fs-5 text-center mt-4 text-dark" style="font-weight: 500">
                        Data Tidak Tersedia
                    </p>
                </div>
            </div>
        @endforelse
    </div>
    <div class="modal fade modal-bookmark" id="modal-edit" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-semibold" id="exampleModalLabel">Ubah Data</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form-bookmark needs-validation" id="form-update" method="POST" id="bookmark-form"
                novalidate="" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" name="employee_id" value="{{ $id }}">
                    <label for="name">Image</label>
                    <input type="file" id="name" name="photo[]" class="form-control"
                        placeholder="Enter Your Name" multiple />
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Tutup</button>
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('components.delete-modal-component')
@endsection
@section('script')
    <script src="{{ asset('assets/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
    <script>
         $('.btn-delete').on('click', function() {
            var id = $(this).data('id');
            $('#form-delete').attr('action', '/face/delete/' + id);
            $('#modal-delete').modal('show');
        });
        $('.btn-edit').click(function() {
            var id = $(this).data('id'); // Mengambil nilai id dari tombol yang diklik
            $('#form-update').attr('action', '/face/update/' + id); // Mengubah nilai atribut action form
            $('#modal-edit').modal('show');
        });
    </script>
    <script src="{{ asset('assets/js/pages/form-repeater.int.js') }}"></script>
@endsection

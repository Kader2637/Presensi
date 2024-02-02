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
        @forelse ($positions as $position)
            <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="card border">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-2">
                                <div class="avatar-xs">
                                    <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                        {{ $position->name[0] }}
                                    </span>
                                </div>
                            </div>
                            <div class="row overflow-hidden align-items-center">
                                <h5 class="text-truncate font-size-15 m-0"><a href="javascript: void(0);"
                                        class="text-dark">{{ $position->name }}</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 border-top d-flex ">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-0">
                                <i class= "bx bx-calendar me-0"></i>
                                {{ \Carbon\Carbon::parse($position->created_at)->translatedFormat('d F Y') }}
                            </li>
                        </ul>
                        <div class="d-flex ms-auto gap-2">
                            <span>
                                <button data-bs-toggle="modal" class=" btn btn-sm btn-info btn-edit"style="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 48 48">
                                        <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4">
                                            <path stroke-linecap="round" d="M7 42h36" />
                                            <path fill="currentColor" d="M11 26.72V34h7.317L39 13.308L31.695 6z" />
                                        </g>
                                    </svg>
                                </button>
                            </span>
                            <span>
                                <button data-bs-toggle="modal" class=" btn btn-sm btn-danger btn-delete" style="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 48 48">
                                        <defs>
                                            <mask id="ipSDelete0">
                                                <g fill="none" stroke-linejoin="round" stroke-width="4">
                                                    <path fill="#fff" stroke="#fff" d="M9 10v34h30V10z" />
                                                    <path stroke="#000" stroke-linecap="round" d="M20 20v13m8-13v13" />
                                                    <path stroke="#fff" stroke-linecap="round" d="M4 10h40" />
                                                    <path fill="#fff" stroke="#fff" d="m16 10l3.289-6h9.488L32 10z" />
                                                </g>
                                            </mask>
                                        </defs>
                                        <path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSDelete0)" />
                                    </svg>
                                </button>
                            </span>

                        </div>

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

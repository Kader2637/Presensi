@extends('layouts.app')
@section('content')
<div class="row">
    @forelse ($employees as $employee)
    <div class="col-xl-3 col-sm-6">
        <div class="card text-center">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <div class="dropdown dropstart custom-dropdown">
                        <p id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="fa fa-ellipsis-v"></span>
                        </p>
                        <style>
                            .custome-drop-down {
                                left: -150px !important;
                            }
                        </style>
                    </div>
                </div>
                <div class="avatar-sm mx-auto mb-4">
                    @if (file_exists(public_path('storage/' . $employee->photo)))
                        <img class="avatar-title rounded-circle bg-primary-subtle text-primary"
                            style="object-fit: cover" src="{{ asset( $employee->photo) }}">
                    @else
                        <img class="avatar-title rounded-circle bg-primary-subtle text-primary"
                            style="object-fit: cover" src="{{ asset('default.jpg') }}">
                    @endif
                </div>
                <h5 class="font-size-15 mb-1"><a href="javascript: void(0);"
                        class="text-dark">{{ $employee->name }}</a></h5>
            </div>
            <div class="card-footer bg-transparent border-top">
                <div class="contact-links d-flex justify-content-center font-size-20">
                    <div class="d-flex-fill d-flex ">
                        <a href="face/detail/{{ $employee->id }}"><i class="bx bx-user-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty

    @endforelse
</div>
@endsection

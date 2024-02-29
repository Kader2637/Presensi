@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Example</h4>
                <form class="repeater" action="/face/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div data-repeater-list="group-a">
                        <div data-repeater-item class="row">
                            <div  class="mb-3 col-lg-12">
                                <input type="hidden" name="employee_id" value="{{ $id }}">
                                <label for="name">Image</label>
                                <input type="file" id="name" name="photo[]" class="form-control" placeholder="Enter Your Name" multiple/>
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
<div class="row">
    @forelse ($faces as $face)
    <div class="col mt-4">
        <img src="{{ asset('storage/' . $face->photo ) }}" alt="{{ $face->photo }}" style="width:400px">
    </div>
    @empty

    @endforelse
</div>
@endsection
@section('script')

<script src="{{ asset('assets/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/form-repeater.int.js') }}"></script>
@endsection

@extends('layouts.app')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Atur Jam Masuk Kantor</h4>
                    <ul class="nav nav-pills bg-light rounded" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#senin" role="tab">Senin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#selasa" role="tab">Selasa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#rabu" role="tab">Rabu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kamis" role="tab">Kamis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#jumat" role="tab">Jumat</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-4">
                        <div class="tab-pane active" id="senin" role="tabpanel">
                            <div class="table-responsive" data-simplebar style="max-height: 330px;">
                                <form action="#" method="post">
                                    <input type="hidden" name="day" value="monday">
                                    @csrf
                                    @method('POST')
                                    <table class="table align-middle table-nowrap">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Masuk</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_starts" class="form-control"
                                                            placeholder="Sampai" value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_ends" class="form-control"
                                                            placeholder="Sampai" value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_starts" class="form-control"
                                                            placeholder="Sampai" value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_ends" class="form-control"
                                                            placeholder="Sampai" value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Balik Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_starts" class="form-control"
                                                            placeholder="Sampai" value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_ends" class="form-control"
                                                            placeholder="Sampai" value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Pulang</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_ends" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="selasa" role="tabpanel">
                            <div class="table-responsive" data-simplebar style="max-height: 330px;">
                                <form action="#" method="post">
                                    <input type="hidden" name="day" value="tuesday">
                                    @csrf
                                    @method('POST')
                                    <table class="table align-middle table-nowrap">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Masuk</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_ends" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_ends" class="form-control"
                                                            placeholder="Sampai" value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Balik Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_ends" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Pulang</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_ends" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="rabu" role="tabpanel">
                            <div class="table-responsive" data-simplebar style="max-height: 330px;">
                                <form action="#" method="post">
                                    <input type="hidden" name="day" value="tuesday">
                                    @csrf
                                    @method('POST')
                                    <table class="table align-middle table-nowrap">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Masuk</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_ends" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_ends" class="form-control"
                                                            placeholder="Sampai" value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Balik Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_ends" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Pulang</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_ends" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="kamis" role="tabpanel">
                            <div class="table-responsive" data-simplebar style="max-height: 330px;">
                                <form action="#" method="post">
                                    <input type="hidden" name="day" value="tuesday">
                                    @csrf
                                    @method('POST')
                                    <table class="table align-middle table-nowrap">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Masuk</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_ends" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_ends" class="form-control"
                                                            placeholder="Sampai" value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Balik Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_ends" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Pulang</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_ends" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="jumat" role="tabpanel">
                            <div class="table-responsive" data-simplebar style="max-height: 330px;">
                                <form action="#" method="post">
                                    <input type="hidden" name="day" value="tuesday">
                                    @csrf
                                    @method('POST')
                                    <table class="table align-middle table-nowrap">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Masuk</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_ends" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_ends" class="form-control"
                                                            placeholder="Sampai" value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Balik Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_ends" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Pulang</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_starts" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_ends" class="form-control"
                                                            placeholder="Sampai"
                                                            value="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-7">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium">Total Siswa Yang Aktif</p>
                                    <h4 class="mb-0">22</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                        <span class="avatar-title">
                                            <i class="bx bx-happy-beaming font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium">Menunggu Konfirmasi</p>
                                    <h4 class="mb-0">14</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center ">
                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-confused font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium">Siswa Yang Ditolak</p>
                                    <h4 class="mb-0">2</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-tired font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Siswa Absensi</h4>
                            <div data-simplebar style="max-height: 376px;">
                                <div class="vstack gap-4">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        No
                                                    </th>
                                                    <th>
                                                        Nama
                                                    </th>
                                                    <th>
                                                        Sekolah
                                                    </th>
                                                    <th>
                                                        Tanggal
                                                    </th>
                                                    <th>
                                                        Jam Absensi
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-2">
                                                                <div class="avatar-xs">
                                                                    <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                        A
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="ms-2 flex-grow-1">
                                                                <h6 class="mb-1 font-size-15 mt-2"><p
                                                                        class="text-body">Abdul Kader</p></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-1 font-size-15 mt-2"><p
                                                            class="text-body">Smkn 1 Kraksaan</p></h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-1 font-size-15 mt-2"><p
                                                            class="text-body">12 januari 2023</p></h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-1 font-size-15 mt-2"><p
                                                            class="text-body text-center">12:00</p></h6>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            {{--
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex flex-wrap">
                        <h4 class="card-title mb-4">Statistik Siswa Magang</h4>
                        <div class="ms-auto">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Minggu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Bulan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Tahun</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div id="stacked-column-chart" class="apex-charts"
                        data-colors='["--bs-primary", "--bs-warning", "--bs-success"]' dir="ltr"></div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Pegawai Terlambat</h4>
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
                                      <div class="btn btn-soft-success waves-effect waves-light">
                                        18 : 00
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
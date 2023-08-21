@extends('backend.layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                                View Rekap Gardu Induk
                            </h5>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url('rekap-garduinduk') }}" class="btn btn-secondary btn-sm">Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Area</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->apj_id }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gardu Induk</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->gardu_induk }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pmt_recloser" class="col-sm-2 col-form-label">PMT Recloser</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->pmt_recloser }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="waktu_trip" class="col-sm-2 col-form-label">Waktu Trip</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->waktu_trip }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="waktu_normal" class="col-sm-2 col-form-label">Waktu Normal</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->waktu_normal}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alasan_operasi" class="col-sm-2 col-form-label">Alasan Operasi</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->alasan_operasi }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="indikasi_relay" class="col-sm-2 col-form-label">Indikasi Relay</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->indikasi_relay }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_gangguan" class="col-sm-2 col-form-label">Jenis Gangguan</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->jenis_gangguan}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fasa" class="col-sm-2 col-form-label">Fasa</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->fasa }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ifa" class="col-sm-2 col-form-label">Ifa</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->ifa}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ifb" class="col-sm-2 col-form-label">Ifb</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->ifb }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ifc" class="col-sm-2 col-form-label">Ifc</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->ifc }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ifn" class="col-sm-2 col-form-label">Ifn</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->ifn }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="beban_sebelum" class="col-sm-2 col-form-label">Beban Sebelum</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->beban_sebelum }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tegangan_sebelum" class="col-sm-2 col-form-label">Tegangan Sebelum</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->tegangan_sebelum }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="beban_sesudah" class="col-sm-2 col-form-label">Beban Sesudah</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->beban_sesudah }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tegangan_sesudah" class="col-sm-2 col-form-label">Tegangan Sesudah</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->tegangan_sesudah }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_gangguan_keterangan" class="col-sm-2 col-form-label">Kode Gangguan Keterangan</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->kode_gangguan_keterangan }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="daya_hilang" class="col-sm-2 col-form-label">Daya Hilang</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->daya_hilang }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lama_padam" class="col-sm-2 col-form-label">Lama Padam</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->lama_padam }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kwh_hilang" class="col-sm-2 col-form-label">Kwh Hilang</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->kwh_hilang }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cuaca" class="col-sm-2 col-form-label">Cuaca</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->cuaca }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_pole_tiang" class="col-sm-2 col-form-label">No Pole Tiang</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->no_pole_tiang }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jarak_gangguan" class="col-sm-2 col-form-label">Jarak Gangguan</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->jarak_gangguan}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lokasi_gangguan" class="col-sm-2 col-form-label">Lokasi Gangguan</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->lokasi_gangguan }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="recovery" class="col-sm-2 col-form-label">Recovery</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->recovery }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->status }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="user_update" class="col-sm-2 col-form-label">User Update</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->user_update}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keterangan" class="col-sm-2 col-form-label">Noted</label>
                                <div class="col-sm-10">
                                    <p>{{ $tables->keterangan }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

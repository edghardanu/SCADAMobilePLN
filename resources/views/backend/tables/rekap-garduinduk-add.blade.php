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
                                Tambah Rekap Gardu Induk
                            </h5>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url('rekap-garduinduk') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-undo"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">

                            <form action="{{ url('rekap-garduinduk') }}" method="POST">
                                
                                @csrf
                                <div class="form-group row">
                                    <label for="apj_id" class="col-sm-2 col-form-label">Area</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="apj_id" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gardu_induk" class="col-sm-2 col-form-label">Gardu Induk</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="gardu_induk"
                                            placeholder="Enter Gardu Induk" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pmt_recloser" class="col-sm-2 col-form-label">PMT Recloser</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pmt_recloser"
                                            placeholder="Enter Pmt Recloser" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="waktu_trip" class="col-sm-2 col-form-label">Waktu Trip</label>
                                    <div class="col-sm-10">
                                        <input type="datetime-local" class="form-control" name="waktu_trip" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="waktu_normal" class="col-sm-2 col-form-label">Waktu Normal</label>
                                    <div class="col-sm-10">
                                        <input type="datetime-local" class="form-control" name="waktu_normal" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alasan_operasi" class="col-sm-2 col-form-label">Alasan Operasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alasan_operasi"
                                            placeholder="Enter Alasan Operasi" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="indikasi_relay" class="col-sm-2 col-form-label">Indikasi Relay</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="indikasi_relay"
                                            placeholder="Enter Indikasi Relay" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_gangguan" class="col-sm-2 col-form-label">Jenis Gangguan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="jenis_gangguan"
                                            placeholder="Enter Jenis Gangguan" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fasa" class="col-sm-2 col-form-label">Fasa</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="fasa" placeholder="Enter Fasa"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ifa" class="col-sm-2 col-form-label">Ifa</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ifa" placeholder="Enter Ifa"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ifb" class="col-sm-2 col-form-label">Ifb</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ifb" placeholder="Enter Ifb"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ifc" class="col-sm-2 col-form-label">Ifc</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ifc"
                                            placeholder="Enter Ifc" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ifn" class="col-sm-2 col-form-label">Ifn</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ifn"
                                            placeholder="Enter Ifn" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="beban_sebelum" class="col-sm-2 col-form-label">Beban Sebelum</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="beban_sebelum"
                                            placeholder="Enter Beban Sebelum" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tegangan_sebelum" class="col-sm-2 col-form-label">Tegangan Sebelum</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tegangan_sebelum"
                                            placeholder="Enter Tegangan Sebelum" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="beban_sesudah" class="col-sm-2 col-form-label">Beban Sesudah</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="beban_sesudah"
                                            placeholder="Enter Beban Sesudah" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tegangan_sesudah" class="col-sm-2 col-form-label">Tegangan Sesudah</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tegangan_sesudah"
                                            placeholder="Enter Tegangan Sesudah" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kode_gangguan_keterangan" class="col-sm-2 col-form-label">Kode Gangguan
                                        Keterangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kode_gangguan_keterangan"
                                            placeholder="Enter Kode Gangguan Keterangan" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="daya_hilang" class="col-sm-2 col-form-label">Daya Hilang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="daya_hilang"
                                            placeholder="Enter Daya Hilang" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lama_padam" class="col-sm-2 col-form-label">Lama Padam</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="lama_padam"
                                            placeholder="Enter Lama Padam" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kwh_hilang" class="col-sm-2 col-form-label">Kwh Hilang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kwh_hilang"
                                            placeholder="Enter Kwh Hilang" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cuaca" class="col-sm-2 col-form-label">Cuaca</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="cuaca"
                                            placeholder="Enter Cuaca" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_pole_tiang" class="col-sm-2 col-form-label">No Pole Tiang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="no_pole_tiang"
                                            placeholder="Enter No Pole Tiang" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jarak_gangguan" class="col-sm-2 col-form-label">Jarak Gangguan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="jarak_gangguan"
                                            placeholder="Enter Jarak Gangguan" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lokasi_gangguan" class="col-sm-2 col-form-label">Lokasi Gangguan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="lokasi_gangguan"
                                            placeholder="Enter Lokasi Gangguan" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="recovery" class="col-sm-2 col-form-label">Recovery</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="recovery"
                                            placeholder="Enter Recovery" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="status"
                                            placeholder="Enter Status" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="user_update" class="col-sm-2 col-form-label">User Update</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="user_update"
                                            placeholder="Enter User Update" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="keterangan" class="col-sm-2 col-form-label">Noted</label>
                                    <div class="col-sm-10">
                                        <textarea name="keterangan" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="bi bi-sd-card-fill"></i>
                                </button>
                                <a href="{{ url('/rekap-garduinduk') }}" class="btn btn-danger btn-sm">
                                    <i class="bi bi-x-square"></i>
                                </a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection

@extends('backend.layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <div class="animated fadeIn">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="content-wrapper">
            <div class="card-body">
                <div class="col-md-12">
                    <form id="searchForm">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="start_date">Start Date :</label>
                                <input type="datetime-local" class="form-control" id="start_date" name="start_date">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="end_date">End Date :</label>
                                <input type="datetime-local" class="form-control" id="end_date" name="end_date">
                            </div>

                            <div class="form-group col-md-4" id="area">
                                <label for="area">Search Area:</label>
                                <select class="form-control">
                                    <option value="">-- UP3 / UP2D --</option>
                                    <option value="1">Semarang</option>
                                    <option value="2">Klaten</option>
                                    <option value="3">Yogyakarta</option>
                                    <option value="4">Surakarta</option>
                                    <option value="5">Kudus</option>
                                    <option value="6">Pekalongan</option>
                                    <option value="7">Salatiga</option>
                                    <option value="8">Cilacap</option>
                                    <option value="9">Tegal</option>
                                    <option value="10">Purwokerto</option>
                                    <option value="11">Magelang</option>
                                    <option value="12">UP2D</option>
                                    <option value="13">Demak</option>
                                    <option value="14">Sukoharjo</option>
                                </select>
                            </div>
                        </div>
                    </form>

                    <div class="card" style="width:100%;">
                        <div class="card-header">
                            <h3 class="card-title" style="font-family: Arial, Helvetica, sans-serif; font-weight: 400px;">
                                Rekap
                                Data
                                Gardu
                                Induk</h3>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url('/rekap-garduinduk-add') }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>
                            </div>
                        </div>

                        <div class="card-body table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>No</th>
                                        <th>Area</th>
                                        <th>Gardu Induk</th>
                                        <th>Pmt Recloser</th>
                                        <th>Waktu Trip</th>
                                        <th>Waktu Normal</th>
                                        <th>Alasan Operasi</th>
                                        <th>Indikasi Relay</th>
                                        <th>Jenis Gangguan</th>
                                        <th>Fasa</th>
                                        <th>Ifa</th>
                                        <th>Ifb</th>
                                        <th>Ifc</th>
                                        <th>Ifn</th>
                                        <th>Beban Sebelum</th>
                                        <th>Tegangan Sebelum</th>
                                        <th>Beban Sesudah</th>
                                        <th>Tegangan Sesudah</th>
                                        <th>Kode Gangguan Keterangan</th>
                                        <th>Daya Hilang</th>
                                        <th>Lama Padam</th>
                                        <th>Kwh Hilang</th>
                                        <th>Cuaca</th>
                                        <th>No Pole Tiang</th>
                                        <th>Jarak Gangguan</th>
                                        <th>Lokasi Gangguan</th>
                                        <th>Recovery</th>
                                        <th>Status</th>
                                        <th>User Update</th>
                                        <th>Noted</th>
                                        <th>Last Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rekap_garduinduk as $gardu)
                                        <tr>
                                            <td>

                                                <a href="{{ url('/rekap-garduinduk', $gardu->id) }}"
                                                    class="btn btn-danger btn-sm">
                                                    <i class="bi bi-trash-fill"></i>
                                                </a>
                                                <a href="{{ url('/rekap-garduinduk-edit', $gardu->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </a>
                                                <a href="{{ url('/rekap-garduinduk-view', $gardu->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fa fa-eye" style="color: rgb(246, 233, 233)"></i>
                                                </a>
                                            </td>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $gardu->apj_id }}</td>
                                            <td>{{ $gardu->gardu_induk }}</td>
                                            <td>{{ $gardu->pmt_recloser }}</td>
                                            <td>{{ $gardu->waktu_trip }}</td>
                                            <td>{{ $gardu->waktu_normal }}</td>
                                            <td>{{ $gardu->alasan_operasi }}</td>
                                            <td>{{ $gardu->indikasi_relay }}</td>
                                            <td>{{ $gardu->jenis_gangguan }}</td>
                                            <td>{{ $gardu->fasa }}</td>
                                            <td>{{ $gardu->ifa }}</td>
                                            <td>{{ $gardu->ifb }}</td>
                                            <td>{{ $gardu->ifc }}</td>
                                            <td>{{ $gardu->ifn }}</td>
                                            <td>{{ $gardu->beban_sebelum }}</td>
                                            <td>{{ $gardu->tegangan_sebelum }}</td>
                                            <td>{{ $gardu->beban_sesudah }}</td>
                                            <td>{{ $gardu->tegangan_sesudah }}</td>
                                            <td>{{ $gardu->kode_gangguan_keterangan }}</td>
                                            <td>{{ $gardu->daya_hilang }}</td>
                                            <td>{{ $gardu->lama_padam }}</td>
                                            <td>{{ $gardu->kwh_hilang }}</td>
                                            <td>{{ $gardu->cuaca }}</td>
                                            <td>{{ $gardu->no_pole_tiang }}</td>
                                            <td>{{ $gardu->jarak_gangguan }}</td>
                                            <td>{{ $gardu->lokasi_gangguan }}</td>
                                            <td>{{ $gardu->recovery }}</td>
                                            <td>{{ $gardu->status }}</td>
                                            <td>{{ $gardu->user_update }}</td>
                                            <td>{{ $gardu->keterangan }}</td>
                                            <td>{{ $gardu->last_update }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $rekap_garduinduk->links() }}
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>







    <style>
        .container {
            overflow: scroll;
            height: 180px;
            width: 300px;
        }

        table {
            border-collapse: collapse;
        }

        table th,
        table td {
            max-width: 100%;
            padding: 8px 16px;
            border: 1px solid #ddd;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        table thead {
            position: sticky;
            inset-block-start: 0;
            background-color: #000000;
            color: #ffffff;
        }
    </style>




@endsection

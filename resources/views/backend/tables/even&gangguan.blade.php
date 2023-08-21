@extends('backend.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="col-md-12">
                <form class="offset">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputCity">Start Date</label>
                            <input type="date" class="form-control" id="start_date">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputZip">End Date</label>
                            <input type="date" class="form-control" id="end_date">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputZip">UP3 / UP2D</label>
                            <select class="form-control">
                                <option value="UP3">-- UP3 / UP2D --</option>
                                <option value="Cilacap">Cilacap</option>
                                <option value="Demak">Demak</option>
                                <option value="Klaten">Klaten</option>
                                <option value="Kudus">Kudus</option>
                                <option value="Magelang">Magelang</option>
                                <option value="Pekalongan">Pekalongan</option>
                                <option value="Purwokerto">Purwokerto</option>
                                <option value="Salatiga">Salatiga</option>
                                <option value="Semarang">Semarang</option>
                                <option value="Sukoharjo">Sukoharjo</option>
                                <option value="Surakarta">Surakarta</option>
                                <option value="Tegal">Tegal</option>
                                <option value="Yogyakarta">Yogyakarta</option>
                            </select>
                        </div>
                        <br>

                       



                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

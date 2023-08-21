@extends('backend.layouts.app')
@section('content')
    <div class="content-wrapper">

        <section class="content">
            <div class="row">
                <div class="col-lg-1">

                </div>
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                                Edit User
                            </h5>
                        </div>
                        <div class="card-body">

                            <form role="form" action="{{ URL::to('/update-user' .$edit->id)}}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Enter your name" value="{{$edit->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Enter your email" value="{{$edit->email}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Enter Password" value="{{$edit->password}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-2 col-form-label">User Role Type</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="exampleFormControlSelect1" name="role" required>
                                            <option value="Admin" {{'Admin' == $edit->role ? 'selected' : ''}}>Admin</option>
                                            <option value="Level 1 - Pelaksana (Apkt DCC)" {{'Level 1 - Pelaksana (Apkt DCC)' == $edit->role ? 'selected' : ''}}>Level 1 - Pelaksana (Apkt DCC)
                                            </option>
                                            <option value="Level 2 - DCC dkk" {{'Level 2 - DCC dkk' == $edit->role ? 'selected' : ''}}>Level 2 - DCC dkk</option>
                                            <option value="Level 3 - Supervisor"{{'Level 3 - Supervisor' == $edit->role ? 'selected' : ''}}>Level 3 - Supervisor</option>
                                            <option value="Level 4 - Asisten Manajer dan Manajer"{{'LLevel 4 - Asisten Manajer dan Manajer' == $edit->role ? 'selected' : ''}}>>Level 4 - Asisten Manajer
                                                dan Manajer</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info">
                                    Submit
                                </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">

            </div>
    </div>
    </section>
@endsection

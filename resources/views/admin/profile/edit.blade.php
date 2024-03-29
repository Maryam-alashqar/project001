@extends('admin.master')

@section('style')
<style>
    body {
        background: linear-gradient(60deg, #e7e6f1 10%, #f3f1ff 100%);
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #466385
    }

    .profile-button {
        background: #201f2b;
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #466385
    }

    .profile-button:focus {
        background: #201f2b;
        box-shadow: none
    }

    .profile-button:active {
        background: #201f2b;
        box-shadow: none
    }

    .back:hover {
        color: #466385;
        cursor: pointer
    }

    .labels {
        font-size: 11px
    }

    .add-experience:hover {
        background: #466385;
        color: #fff;
        cursor: pointer;
        border: solid 1px #466385
    }
</style>
@stop


@php
$name = Auth::user()->username??'';
$src = 'https://ui-avatars.com/api/?background=random&name='.$name;

if(Auth::user()->image) {
$img = Auth::user()->image;
$src = asset('uploads/'.$img);
}
@endphp
@section('content')
<section style="background-color: #eee;">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 mt-5">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="{{ $src }}" alt="avatar" class="rounded-circle img-fluid"
                            style="width: 200px; height: 180px; object-fit: contain;">
                        <h5 class="my-3"></h5>
                        <p class="text-muted mb-1"></p>

                    </div>
                </div>
            </div>

            <div class="col-md-6 ml-5">
                <div class="p-3 py-5 ml-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form action="{{ route('admin.profile.update', Auth::user()->id) }}" method="POST"
                        enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="firstname" class="labels">Name</label>
                                <input name="firstname" type="text" class="form-control" placeholder="first name"
                                value="{{ Auth::user()->firstname }}">
                            </div>
                            <div class="col-md-6">
                                <label for="lastname" class="labels">Surname</label>
                                <input name="lastname" type="text" class="form-control"
                                    value="{{ Auth::user()->lastname }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 mb-3">
                                <label for="mobile" class="labels">Mobile Number</label>
                                <input type="text" class="form-control"
                                    value="{{ Auth::user()->mobile }}">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="dob" class="labels">Date of birth</label>
                                <input id="dob" name="dob" type="date" class="form-control"
                                value="{{ Auth::user()->dob }}">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="email" class="labels">Email</label>
                                <input  id="email" name="email" type="text" class="form-control" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="bio" class="labels">bio</label>
                                <input id="bio" name="bio" type="text" class="form-control"
                                value="{{ Auth::user()->bio }}">
                            </div>
                            <hr>
                            <h6>links</h6>
                            <div class="row col-md-12 mb-2">
                                <div class="col-sm-3">
                                    <i class="fab fa-linkedin fa-lg" style="color: #3b5998;"></i>
                                </div>
                                <div class="col-md-9">
                                    <input id="li" name="li" class="form-control" value="{{ Auth::user()->li }}">

                                </div>
                            </div>
                            <div class=" row col-md-12 mb-2">
                                <div class="col-sm-3">
                                    <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                </div>
                                <div class="col-md-9">
                                    <input id="tw" name="tw" class="form-control" value="{{ Auth::user()->tw }}">

                                </div>
                            </div>
                            <div class="row col-md-12 mb-2">
                                <div class="col-sm-3">
                                    <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                </div>
                                <div class="col-md-9">
                                    <input id="fb" name="fb" class="form-control" value="{{ Auth::user()->fb }}">

                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-right">
                            <button class="btn btn-success px-5">
                                <i class="fas fa-save"></i>
                                Save Profile</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section>
@stop

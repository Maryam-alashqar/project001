@extends('admin.master')
<link rel="stylesheet" href={{ asset('adminassets/plugins/fontawesome-free/css/all.min.css') }}>
<!-- Theme style -->
<link rel="stylesheet" href={{ asset('adminassets/dist/css/adminlte.min.css') }}>

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
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="{{ $src }}" alt="avatar" class="rounded-circle img-fluid"
                            style="width: 200px; height: 180px; object-fit: contain;">
                        <h5 class="my-3">{{ Auth::user()->firstname}}</h5>
                        <p class="text-muted mb-1">{{ Auth::user()->email}}</p>

                    </div>
                </div>

            </div>

            <div class="col-md-6 ml-5">
                <div class="p-3 py-5 ml-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Name</label>
                                <input type="text" class="form-control" placeholder="first name"
                                    value="{{ old('firstname', $user->firstname) }}">
                            </div>
                            <div class="col-md-6"><label class="labels">Surname</label>
                                <input type="text" class="form-control" value="" placeholder="surname">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="enter phone number" value="">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Date og birth</label>
                                <input type="text" class="form-control" placeholder="enter address line 1" value="">
                            </div>

                            <div class="col-md-12"><label class="labels">Email</label>
                                <input type="text" class="form-control" placeholder="enter email id" value="">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">bio</label>
                                <input type="text" class="form-control" placeholder="bio" value="">
                            </div>
                        </div>

                        <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">
                                Save Profile</button></div>
                    </form>
                </div>
            </div>
            <!--        <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit
                            Experience</span><span class="border px-3 p-1 add-experience"><i
                                class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text"
                            class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text"
                            class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div> -->
        </div>
    </div>
</section>
@stop
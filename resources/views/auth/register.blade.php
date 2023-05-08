@extends('layouts.app')

@section('content')
<style>
    form {
        margin-left: 180px;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    form button {
        position: relative;

        display: inline-block;
        padding: 10px 150px;
        color: #e4d3d3;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;

        background: transparent;
        background: #8b2929;
        border: none;
        cursor: pointer;
        font-family: event-reg !important;
        /* letter-spacing: 4px */
    }

    button:hover {
        background: #bd8282;
        color: #fff;

        box-shadow: 0 0 5px #bd8282,
            0 0 25px #bd8282,
            0 0 50px #bd8282,
            0 0 100px #bd8282;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- <div class="row mt-3 mb-3">
                            <div class="col-md-8">
                                <label for="image">Add PFP</label>
                                <input id="image" name="image" type="file"
                                    class="form-control @error('image') is-invalid @enderror " />
                                @error('image')
                                <small class="invalid-feedback">{{ $message }}</small>
                                @enderror

                            </div>
                        </div> -->
                        <!-- {{-- {{__('firstname') }} --}} -->
                        <div class="row mt-4 mb-3">
                            <div class="col-md-4">
                                <label for="firstname" class="labels">First Name</label>
                                <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                                    name="firstname" value="{{ old('firstname') }}">
                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div for="lastname" class="col-md-4">
                                <label class="labels">Surname</label>
                                <input type="text" class="form-control @error('lastname') is-invalid @enderror"
                                    name="lastname" value="{{ old('lastname') }}">

                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-2 col-form-label ">Email:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!--               <div class="row mb-4">
                            <div class="col-md-4">
                                <label class="col-md-6 col-form-label">First Name: </label>
                                <input type="name"
                                    class="form-control @error('firstname') is-invalid
                                    @enderror" value="{{ old('firstname') }}">

                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="col-md-6 col-form-label">Surname: </label>
                                <input type="name"
                                    class="form-control @error('lastname') is-invalid
                                    @enderror" value="{{ old('lastname') }}">

                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
 -->


                        <div class="row mb-3">
                            <label for="mobile" class="col-md-2 col-form-label ">Mobile: </label>

                            <div class="col-md-6">
                                <input id="mobile" type="mobile" class="form-control
                                @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}">

                                @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gender" class="col-md-2 col-form-label ">Gender: </label>

                            <div class="col-md-6 mt-2">
                                <input id="male" type="radio" class="
                                @error('gender') is-invalid @enderror" name="gender" value="male">
                                <label for="male">Male</label>
                                <input id="male" type="radio" class="
                                @error('gender') is-invalid @enderror" name="gender" value="female">
                                <label for="female">Female</label>
                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dob" class="col-md-2 col-form-label ">Date of Birth: </label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-2 col-form-label ">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-2 col-form-label ">{{ __('Confirm
                                Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 ">
                                <button type="submit">
                                    {{ __('Sign In') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

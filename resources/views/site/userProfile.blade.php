@section('title', 'About')
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') {{ env('APP_NAME') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('siteassets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('siteassets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/css/style.css') }}">
</head>
<style>
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

<body>

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><img src="{{ asset('siteassets/img/icon/header_icon1.png') }}">34ºc, Sunny
                                        </li>
                                        <li><img src="{{ asset('siteassets/img/icon/header_icon1.png') }}">Tuesday, 18th
                                            June, 2019</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="navbar-nav ml-auto">
                                        @if (Auth::check())

                                        @php
                                        $name = Auth::user()->username??'';
                                        $src = 'https://ui-avatars.com/api/?background=random&name='.$name;

                                        if(Auth::user()->image) {
                                        $img = Auth::user()->image;
                                        $src = asset('uploads/'.$img);
                                        }
                                        @endphp
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" data-toggle="dropdown" href="#">
                                                <img width="25" height="20"
                                                    style="object-fit: contain; margin-top: -5px;" src="{{ $src }}"
                                                    class="img-circle elevation-2 ml-1" alt="">
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu  dropdown-menu-right">
                                                <a href="{{ route('site.userProfile') }}" class="dropdown-item">
                                                    signed as <br> {{ Auth::user()->firstname }} {{
                                                    Auth::user()->lastname }}
                                                </a>

                                                <div class="dropdown-divider"></div>
                                                <a href="{{ route('site.userProfile') }}" class="dropdown-item">
                                                    <i class="fas fa-user mr-2"></i> Profile
                                                </a>



                                                <div class="dropdown-divider"></div>
                                                <a href="" onclick="
                                                event.preventDefault();
                                                document.getElementById('logout-form').submit()
                                                " class="dropdown-item">
                                                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                                </a>

                                                <form id="logout-form" action="" method="POST">
                                                    @csrf
                                                    {{-- <button class="dropdown-item">
                                                        <i class="fas fa-sign-out-alt mr-2"></i> Logout</button> --}}
                                                </form>

                                            </div>

                                        </li>


                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mid d-none d-md-block">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="logo">
                            <a href="{{ route('site.index') }}"><img src="{{ asset('siteassets/img/logo/logo.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="header-banner f-right ">
                            <img src="{{ asset('siteassets/img/hero/header_card.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="content">
            <section style="background-color: #eee;">
                <div class="container py-5 ">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="card-body text-center">

                                    <img src="{{ $src }}" alt="avatar" class="rounded-circle img-fluid"
                                        style="width: 180px; height: 160px; object-fit: contain;">
                                    <h5 class="my-2">{{ Auth::user()->firstname}} {{ Auth::user()->lastname}}</h5>


                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1">Favorite</span>
                                        <i class="fa fa-heart"></i>
                                    </p>
                                    <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 72%"
                                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 89%"
                                            aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 55%"
                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                    <div class="progress rounded mb-2" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 66%"
                                            aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span>
                                        Project Status
                                    </p>
                                    <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 72%"
                                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 89%"
                                            aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 55%"
                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                    <div class="progress rounded mb-2" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 66%"
                                            aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main>
</body>

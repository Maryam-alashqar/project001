@extends('admin.master')
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
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->firstname}} {{ Auth::user()->lastname}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->email}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->mobile}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of Birth</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->dob}}</p>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"> - </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <i class="fab fa-linkedin fa-lg" style="color: #3b5998;"></i>
              </div>
              <div class="col-sm-9">
                <a class=" mb-0">{{ Auth::user()->li}}</a>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
              </div>
              <div class="col-sm-9">
                <a class=" mb-0">{{ Auth::user()->tw}}</a>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
              </div>
              <div class="col-sm-9">
                <a class=" mb-0">{{ Auth::user()->fb}}</a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!--   <div class="row">
                <div class="col-md-6">
                  <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                      <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                      </p>
                      <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                      <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                      <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                      <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                      <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                      <div class="progress rounded mb-2" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
    </div>
  </>
</section>

@stop
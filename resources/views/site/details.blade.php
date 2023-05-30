@extends('site.master')

@section('title', 'Details')

@section('content')
<div class="about-area">
    <div class="container">
        <div class="content">
            <div class="row">

                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90 mt-3">
                        <div class="about-img">
                            <img height="500px" src=" {{ asset( $details -> image ) }} " alt="">
                        </div>
                        <div class="mt-3 mr-5 f-right">
                            <div class="col-8">
                                <i class="fa fa-eye" style=" color: #9e9696;">
                                    <span style="font-weight: 100; font-size: x-small;">
                                        {{ views($details)->count() }}
                                    </span>
                                </i>
                            </div>
                        </div>
                        <div class="section-tittle mb-30 pt-30">
                            <h3> {{ $details -> title }} </h3>
                        </div>
                        <div class="about-prea">
                            <p class="about-pera1 mb-25"> {{ $details -> short_description }} </p>
                            <p class="about-pera1 mb-25">
                                {{ $details -> full_description }} </p>
                        </div>
                        <div class="section-tittle">
                            <h3> </h3>
                        </div>
                        <div class="about-prea">
                            <p class="about-pera1 mb-25">
                            </p>

                        </div>


                        <div class="mt-3 mr-5 f-left">
                            <div class="row">
                                <div class="col-12">
                                    <a href="" role="button" tabindex="0">
                                        comments <i class="fas fa-angle-down"></i>
                                    </a>

                                </div>



                            </div>

                        </div>


                    </div>
                    <!-- From -->
                    <div class="row">
                        <div class="col-lg-8">
                            @if (Auth::check())
                            <form class="" action=" " method="post" id="contactForm" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100 error" name="comment" id="comment"
                                                cols="20" rows="4" onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Enter comment'"
                                                placeholder="Enter comment"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                </div>
                            </form>
                            @else
                            <p>Plese Login First</p>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- 5 last added Right content -->
                <div class="col-lg-4">
                    @foreach($articales as $articale)
                    <div class="trand-right-single d-flex mt-5">
                        <div class="trand-right-img">
                            <img width="180px" height="110px" style="object-fit: cover;"
                                src="{{ asset( $articale -> image) }}">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color1">{{ $articale -> category-> name }}</span>
                            <h4>

                                <a href="{{ route('site.details',$articale->id) }}">
                                    {{ $articale -> title }}</a>
                            </h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>

    </div>
</div>
@stop

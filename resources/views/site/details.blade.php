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

                    </div>

                    <!-- From -->
                    <div class="row">
                        <div class="col-lg-8">
                            @if (Auth::check())
                            <form class="" action=" " method="post"
                                id="contactForm" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100 error" name="comment" id="comment"
                                                cols="20" rows="9" onfocus="this.placeholder = ''"
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
            </div>


        </div>

    </div>
</div>
@stop

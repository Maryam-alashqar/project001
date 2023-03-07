@extends('admin.master')

@section('title', 'Articale Details')

@section('content')
<div class="content">
<div class="container-fluid">

    <div class="content">
        <div class="row">
            <div class="col-lg-8">
                <!-- Trending Tittle -->
           
                <div class="about-right mb-90">
                    <div class="about-img">
                        <img src="{{ asset( $details->image ) }}" alt="">
                    </div>
                    <div class="section-tittle mb-30 pt-30">
                        <h3>{{ $details -> title }}</h3>
                    </div>
                    <div class="about-prea">
                        <p class="about-pera1 mb-25">{{ $details-> short_description }}</p>
                        <p class="about-pera1 mb-25">
                            {{ $details-> full_description }}</p>
                    </div>
                    <div class="section-tittle">
                        <h3>Unordered list style?</h3>
                    </div>
                    <div class="about-prea">
                        <p class="about-pera1 mb-25">The refractor telescope uses a convex lens to focus the light
                            on the
                            eyepiece.
                            The reflector telescope has a concave lens which means it bends in. It uses mirrors to
                            focus the
                            image that you eventually see.
                        </p>

                    </div>

                </div>
        
    
</div>
</div>
@stop
@extends('admin.master')

@section('title', 'Articale Details')

@section('content')
<div class="content">
    <div class="container py-5">

        <div class="container-fluid">
            <div style="  text-align: right; margin-right: 150px;">

                <a href="{{ route('admin.articales.edit', $details->id) }}" class="btn btn-primary btn-sm"><i
                    class="fas fa-edit"></i></a>

                <form class="d-inline" action="{{ route('admin.articales.destroy', $details->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button onclick="return confirm('Are you sure!?')" class="btn btn-danger btn-sm"><i
                            class="fas fa-trash"></i></button>
                </form>

            </div>

            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->

                    <div class="about-right mb-90">
                        <div class="about-img">
                            <img src="{{ asset( $details ->image ) }}" alt="">
                        </div>
                        <div class="section-tittle mb-30 pt-30">
                            <h3>{{ $details -> title }}</h3>
                        </div>
                        <div class="about-prea">
                            <p class="about-pera1 mb-25">{{ $details -> short_description }}</p>
                            <p class="about-pera1 mb-25">
                                {{ $details -> full_description }}</p>
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
                        <div class="mt-5 text-right">
                            <a href="{{ route('admin.articales.edit', $details -> id ) }}" class="btn btn-secondary profile-button" type="button">
                               Edit</a>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@stop

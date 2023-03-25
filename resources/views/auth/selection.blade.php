@extends('site.master')
@section('content')

<style>
    section {
        height: 90vh;
        background-size: cover !important;
        position: relative;


    }

    .header {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 90vh;
        background-color: rgba(167, 143, 143, 0.4);
        transition: all 0.7s ease;

    }

    .header .slider-title {
        padding: 100px 15px;
        width: 50%;
    }

    .header .slider-title h1 {

        font-family: 'Times New Roman', Times, serif;
        font-size: 56px;
        color: #474747;
    }

    .header .slider-title p {
        font-family: 'Times New Roman', Times, serif;
        width: 50%;
        font-size: 14px;
        color: #707070;

    }

    .header-info-left ul {
        display: flex;
        float: left;
    }

    .header-info-left ul li {
        list-style: none;
        margin-right: 10px;

    }
</style>

<section
    style=" background: url('{{ asset('siteassets/img/selection_header/h1_hero.jpg') }}') no-repeat center center ">
    <div class="header">

        <div class="container mt-5">
            <div class="slider-title mt-5">
                <h1> Heading Title </h1>
                <p>This text is an example of a text that can be replaced in the same space.
                    This text was generated from text generator, where you can generate such text. </p>
                <div class="row">
                    <div class="col-md-6">

                        <button class="button button-contactForm boxed-btn"> User </button>
                        <button class="button button-contactForm boxed-btn"> Author</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--   Weekly-News start -->
<div class="weekly-news-area pt-50">
    <div class="container">
        <div class="weekly-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Weekly Top News</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="weekly-news-active dot-style d-flex dot-style">
                        @foreach($weekly_top as $weekly_top)
                        <div class="weekly-single">
                            <div class="weekly-img">
                                <img style="object-fit: cover;" src="{{ asset( $weekly_top -> image) }}" alt="">
                            </div>
                            <div class="weekly-caption">
                                <span class="color1">{{ $weekly_top -> category-> name }}</span>
                                <h4><a href="#">{{ $weekly_top -> title }}</a></h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

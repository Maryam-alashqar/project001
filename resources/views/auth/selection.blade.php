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
        color: #ffffff;
    }

    .header .slider-title p {
        font-family: 'Times New Roman', Times, serif;
        width: 70%;
        padding: 0px 10px;
        font-size: 14px;
        color: #d4bebe;

    }

    .header .slider-title a {
        margin-left: 10px;
        display: inline-block;
        background-color: #fff;
        padding-top: 10px ;
        padding-bottom: 10px ;
    }
.box{
    border: 1px solid;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        padding: 5px 30px;
        font-size: 16px;
}
    .boxbtn {
        background: #fff;
        color: #000000 !important;
        display: inline-block;

        font-family: "Poppins", sans-serif;
        font-size: 12px;
        font-weight: 300;
        border: 0;
        border: 1px solid #000000;
        letter-spacing: 1px;
        text-align: center;
        color: #000000;
        text-transform: uppercase;
        cursor: pointer;
    }
    .boxbtn:hover {
  background: #ff656a;
  color: #ff656a !important;
  border: 1px solid #ff656a;
}

</style>

<section style=" background: url('{{ asset('siteassets/img/selection_header/g1.jpg') }}') no-repeat center center ">
    <div class="header">

        <div class="container mt-5">
            <div class="slider-title mt-5">
                <h1> Heading Title </h1>
                <p> This text is an example of a text that can be replaced in the same space.
                    This text was generated from text generator, where you can generate such text. </p>
                <div class="row">
                    <div class="col-md-6">
                        <p> Browse and enjoy site features as a </p>
                        <a href="{{ route('login') }}" class="box boxbtn "> User </a>
                        <a href="{{ route('login') }}" class="box boxbtn "> Author</a>
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

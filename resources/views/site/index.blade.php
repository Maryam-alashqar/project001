@extends('site.master')
@section('content')
<!-- Trending Area Start -->
<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <!-- Trending Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>Trending now</strong>
                        <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                        <div class="trending-animated">
                            <ul id="js-news" class="js-hidden">
                                <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    @foreach($top_trend as $top_trend)
                    <div class="trending-top mb-30">
                        <div class="trend-top-img">
                            <img src="{{ asset( $top_trend -> image ) }}" alt="">
                            <div class="trend-top-cap">
                                <span>{{ $top_trend -> category-> name }}</span>
                                <h2><a href="{{ route('site.details',$top_trend->id) }}">{{ $top_trend -> title }}</a></h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- 3 Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            @foreach($trendin_bottom as $trendin_bottom)
                            <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="{{ asset( $trendin_bottom -> image ) }}" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color1">{{ $trendin_bottom -> category-> name }}</span>
                                        <h4><a href="{{ route('site.details',$trendin_bottom->id) }}">{{ $trendin_bottom -> title }}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- 5 last added Right content -->
                <div class="col-lg-4">
                    @foreach($articales as $articale)
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img width="180px" height="110px" src="{{ asset( $articale -> image) }}">
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

@extends('admin.master')

@section('title', 'Articales')
@section('content')


<!-- Whats New Start -->
<section class="mt-5 ml-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-3 col-md-3">
                        <div class="section-tittle mb-30">
                            <h3>Articales</h3>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="properties__button">
                            <!--Nav Button  -->
                            @foreach($categories as $category)
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                        href="#nav-profile" role="tab" aria-controls="nav-profile"
                                        aria-selected="false">{{ $category->name }} </a>  
                                </div>
                            </nav>
                            @endforeach
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            @foreach($articales as $articale)
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="{{ $articale->image }} alt="">
                                                </div>
                                                <div class=" what-cap">
                                                        <span class="color1">Night party</span>
                                                        <h4><a href="#">{{ $articale->title }}</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach                          
                                        </div>
                                    </div>
                                </div>
                                <!-- Card two -->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="{{ asset('siteassets/img/news/whatNews1.jpg') }} alt="">
                                                </div>
                                                <div class=" what-cap">
                                                        <span class="color1">Night party</span>
                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="{{ asset('siteassets/img/news/whatNews2.jpg') }} alt="">
                                                </div>
                                                <div class=" what-cap">
                                                        <span class="color1">Night party</span>
                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@stop
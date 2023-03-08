@extends('admin.master')

@section('title', 'Articales')
@section('style')
<style>
    .boxes {
        gap: 25px;
    }

    .boxes .box {
        text-align: center;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .boxes .box div {
        width: 210px;
        height: 180px;
        border-radius: 5%;
    }

    .boxes .box div img {
        width: 200px;
        height: 180px;
        border-radius: 5%;
        margin-top: 10px;
    }

    .boxes .box span {
        font-size: 14px;
        color: #fffbfb;
        font-weight: bolder;
        margin-top: -20px;
        margin-left: 100px;
        padding: 5px 15px;
        background-color: rgba(105, 52, 52, 0.7);
    }

    .boxes .box p {
        font-size: 16px;
        margin-top: 10px;
    }

    .boxes .box p a {
        direction: none;
        color: #474747;
        margin-top: 20px;
    }

    .boxes .box p a::hover {

        color: #a84f4f;
        margin-top: 20px;
    }
</style>
@stop


@section('content')
<div class="content">
    <div class="container">
        <div class="section-tittle">
            <div class="col-lg-3 col-md-3 mt-5">
                <h3>Articales</h3>
            </div>
        </div>


        <div class="container  mt-3">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    @foreach($articales as $articale)
                    <div class="boxes col-md-3 mb-2">
                        <ul style="  list-style: none;
                        margin-left: 195px;
                        margin-bottom: -20px;">
                            <li class=" dropdown">
                                <a data-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu  dropdown-menu-right">
                                    <a href="{{ route('admin.articales.edit', $articale->id) }}" class="dropdown-item">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form class="d-inline"
                                        action="{{ route('admin.articales.destroy', $articale->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('Are you sure!?')" class="dropdown-item">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <div class="box">
                            <img width="200px" hight="120px" src="{{ asset( $articale->image ) }}">

                            <span class="color1"> {{ $articale->category->name }}</span>
                            <p><a href="{{ route('admin.articales.show', $articale->id) }}">{{ $articale->title }}</a></p>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop
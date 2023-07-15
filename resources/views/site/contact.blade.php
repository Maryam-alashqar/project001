@extends('site.master')

@section('title', 'About')

@section('content')
<div class="content">
    <div id="map" style="height: 480px; position: relative; overflow: hidden;">
        <div
            style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
            <div class="gm-style" style="position: absolute; z-index: 0;
                 left: 0px; top: 0px; height: 100%; width: 100%; 
                 padding: 0px; border-width: 0px; margin: 0px;">

                <iframe aria-hidden="true" frameborder="0" style="z-index: -1; position: absolute;
                     width: 100%; height: 100%;
                      top: 0px; left: 0px; border: none;" src="about:blank">
                </iframe>
            </div>
        </div>
    </div>
</div>

@stop

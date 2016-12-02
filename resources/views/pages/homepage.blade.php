@extends('layout')
@section('title', trans('meta.homepage.title'))
@section('description', trans('meta.homepage.description'))
@section('header')
    @include('header')
@stop
@section('body_class', 'main homepage')
@section('content')
    @include('menu')
    <div class="layout-1">
        <div class="content">
            <div id="large-header" class="large-header">
                <canvas id="demo-canvas"></canvas>
                <h1 class="main-title">
                    <div class="inner-main-title">
                        {!! HTML::image('img/logo.svgz', 'Logo', array('class' => 'main-logo')) !!}
                        <div><span class="thin element"></span></div>
                    </div>
                </h1>
            </div>
        </div>
    </div>
    @include('footer')
@stop
@section('scripts')
<script>
    (function() {
        homegapeInit.init();
    })();
    window.onload = function(){
        $(".element").typed({
            strings: ["Your digital presence <strong>experts.</strong>^1500","Breathing life <strong>into pixels.</strong>"],
            typeSpeed: 45
        });
    }();
</script>
@stop
@extends('layout')
@section('title', trans('meta.homepage.title'))
@section('description', trans('meta.homepage.description'))
@section('header')
    @include('mobile-header')
@stop
@section('body_class', 'main homepage')
@section('content')
    @include('mobile-menu')
    <div class="main-main mobile-home">
        <div class="logo-and-text">
            <a href="{{ url('http://'.env('WEB')) }}">
                {!! HTML::image('img/logo.svgz', 'logo', array('class' => 'main-logo')) !!}
            </a>
            <p class="text-below-logo light"><span class="element"></span></p>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mt5')) !!}
        <span class="logo-text light">{!! trans('homepage.home-title') !!}</span>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mt5')) !!}
        {!! HTML::image('img/color-lines-mob.svgz', 'line', array('class' => 'color-lines-mob')) !!}
        <div class="homepage-button mt20">
            <a href="{{ url(trans('routes.services')) }}">
                <p>{!! trans('homepage.our-services') !!}</p>
                {!! HTML::image('img/arrow-green.svgz', 'arrow', array('class' => 'homepage-button-img')) !!}
            </a>
        </div>
    </div>
    @include('footer')
@stop
@section('scripts')
<script type="text/javascript">
    $(window).load(function() {
        showSVG.init();

        $(".element").typed({
            strings: ["Your digital presence <strong>experts.</strong>^1500","Breathing life <strong>into pixels.</strong>"],
            typeSpeed: 45
        });
    });
</script>
@stop
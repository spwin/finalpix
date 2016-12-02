@extends('layout')
@section('title', trans('meta.development.title'))
@section('description', trans('meta.development.description'))
@section('header')
    @include('header')
@stop
@section('body_class', 'seo select-color2')
@section('content')
    @include('menu')
    <div class="main-development">
        <div class="content-header">
            <h1>{!! trans('programming.header-text-1') !!}</h1>
            <span class="fs22">{!! trans('programming.under-header-text-1') !!}</span>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator centered mt20')) !!}
        <div class="content-container second-margin-dev mt20">
            <div class="paragraph fs18 text-center maxwidth780 mob-not-center">
                <span class="content-text">{!! trans('programming.paragraph-text-1') !!}</span>
                <span class="content-text bold">{!! trans('programming.paragraph-text-2') !!}</span>
            </div>
        </div>

        <div class="flex-container mt20">
            <div class="inline-block">
                {!! HTML::image('img/prog-icons/1prog-greitis.svgz', 'website speed', array('class' => 'centered-icon largex2-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">{!! trans('programming.paragraph-header-text-1') !!}</h2>
                    <span class="content-text">{!! trans('programming.paragraph-content-text-1') !!}</span>
                </div>
            </div>

            <div class="inline-block">
                {!! HTML::image('img/prog-icons/2prog-prieziura.svgz', 'website maintenance', array('class' => 'centered-icon largex2-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">{!! trans('programming.paragraph-header-text-2') !!}</h2>
                    <span class="content-text">{!! trans('programming.paragraph-content-text-2') !!}</span>
                </div>
            </div>

            <div class="inline-block">
                {!! HTML::image('img/prog-icons/3prog-responsive.svgz', 'responsive website', array('class' => 'centered-icon largex2-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">{!! trans('programming.paragraph-header-text-3') !!}</h2>
                    <span class="content-text">{!! trans('programming.paragraph-content-text-3') !!}</span>
                </div>
            </div>
        </div>

        <div class="content-header">
            <h1 class="bold">{!! trans('programming.header-text-2') !!}</h1>
            <span class="fs22 max-width600 inline-block">{!! trans('programming.under-header-text-2') !!}</span>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator centered mt20')) !!}
        <div class="flex-container mt20">
            <div class="inline-block">
                {!! HTML::image('img/prog-icons/5prog-first.svgz', 'seo', array('class' => 'centered-icon largex2-icon')) !!}
                <div class="paragraph">
                    <span class="content-text">{!! trans('programming.paragraph-text-3') !!}</span>
                </div>
            </div>

            <div class="inline-block">
                {!! HTML::image('img/prog-icons/4prog-mobile.svgz', 'mobile websites', array('class' => 'centered-icon small-icon mob-icon')) !!}
                <div class="paragraph">
                    <span class="content-text">{!! trans('programming.paragraph-text-4') !!}</span>
                </div>
            </div>

            <div class="inline-block">
                {!! HTML::image('img/prog-icons/2prog-prieziura.svgz', 'website administration', array('class' => 'centered-icon largex2-icon')) !!}
                <div class="paragraph">
                    <span class="content-text">{!! trans('programming.paragraph-text-5') !!}</span>
                </div>
            </div>

        </div>

        <div class="content-header">
            <h2 class="mt48 fs22 bold">{!! trans('programming.header-text-3') !!}</h2><p class="fs18 light inline-block">{!! trans('programming.under-header-text-3') !!}</p>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator centered')) !!}
        <div class="content-container second-margin-dev mt20">
            <div class="paragraph text-center maxwidth780 mob-not-center">
                <span class="content-text">{!! trans('programming.paragraph-text-6') !!}</span>
            </div>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator mt20 mob-visible')) !!}
        <div class="content-container second-margin-dev mt20">
            <div class="paragraph text-center">
                <span class="content-text">{!! trans('programming.paragraph-text-7') !!}</span>
            </div>
        </div>
        <div class="centered width70">
            <a href="{{ url(trans('routes.contacts')) }}"><div class="centered width50"></div></a>
        </div>
    </div>
    @include('footer')
@stop
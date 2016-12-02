@extends('layout')
@section('title', trans('meta.seo.title'))
@section('description', trans('meta.seo.description'))
@section('header')
    @include('header')
@stop
@section('body_class', 'seo select-color1')
@section('content')
    @include('menu')
    <div class="main-seo">
        <div class="maxwidth1000">
            <div class="content-header">
                <h1>{!! trans('seo.header-text-1') !!}</h1>
                {!! trans('seo.under-header-text-1') !!}
            </div>
            {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator centered mt20')) !!}
            <div class="content-container first-margin mt20">
                {!! HTML::image('img/seo-icons/1.svgz', 'seo icon 1', array('class' => 'centered-icon small-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">{!! trans('seo.paragraph-header-1') !!}</h2>
                    <span class="content-text">{!! trans('seo.paragraph-content-1') !!}</span>
                </div>
            </div>

            <div class="content-container second-margin">
                {!! HTML::image('img/seo-icons/3.svgz', 'seo icon 3', array('class' => 'centered-icon large-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">{!! trans('seo.paragraph-header-2') !!}</h2>
                    <span class="content-text">{!! trans('seo.paragraph-content-2') !!}</span>
                </div>
            </div>

            <div class="content-container third-margin">
                {!! HTML::image('img/seo-icons/2.svgz', 'seo icon 2', array('class' => 'centered-icon large-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">{!! trans('seo.paragraph-header-3') !!}</h2>
                    <span class="content-text">{!! trans('seo.paragraph-content-3') !!}</span>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="maxwidth1000">
            <div class="content-header">
                <h1>{!! trans('seo.header-text-2') !!}</h1>
                <span class="fs22 bold">{!! trans('seo.under-header-text-2') !!}</span>
            </div>
            {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator centered mt20 hideme')) !!}
            <div class="content-container first-margin mt20">
                {!! HTML::image('img/seo-icons/4.svgz', 'seo icon 4', array('class' => 'centered-icon large-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">{!! trans('seo.paragraph-header-4') !!}</h2>
                    <span class="content-text">{!! trans('seo.paragraph-content-4') !!}</span>
                </div>
            </div>

            <div class="content-container second-margin">
                {!! HTML::image('img/seo-icons/5.svgz', 'seo icon 5', array('class' => 'centered-icon largex2-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">{!! trans('seo.paragraph-header-5') !!}</h2>
                    <span class="content-text">{!! trans('seo.paragraph-content-5') !!}</span>
                </div>
            </div>

            <div class="content-container third-margin">
                {!! HTML::image('img/seo-icons/6.svgz', 'seo icon 6', array('class' => 'centered-icon large-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">{!! trans('seo.paragraph-header-6') !!}</h2>
		  			<span class="content-text">{!! trans('seo.paragraph-content-6') !!}</span>
                </div>
            </div>
        </div>
        <div class="clear"></div>

        <div class="content-header">
            <h1>{!! trans('seo.header-text-3') !!}</h1>
            <span class="fs22 light">{!! trans('seo.under-header-text-3') !!}</span>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator centered mt20 hideme')) !!}
        <div class="content-container centered mt20 seo-vertingas">
            {!! HTML::image('img/seo-icons/7.svgz', 'seo icon 7', array('class' => 'centered-icon largex2-icon')) !!}
            <div class="paragraph">
                <h2 class="bold">{!! trans('seo.paragraph-header-7') !!}</h2>
		  			<span class="content-text">{!! trans('seo.paragraph-content-7') !!}</span>
            </div>
        </div>

        <div class="content-container centered mt20 seo-vertingas">
            {!! HTML::image('img/seo-icons/8.svgz', 'seo icon 8', array('class' => 'centered-icon largex2-icon')) !!}
            <div class="paragraph">
                <h2 class="bold">{!! trans('seo.paragraph-header-8') !!}</h2>
                <span class="content-text">{!! trans('seo.paragraph-content-8') !!}</span>
            </div>
        </div>

        <div class="content-header">
            <h1 class="light mt48">{!! trans('seo.header-text-4') !!}</h1>
            <span class="fs22 light">{!! trans('seo.under-header-text-4') !!}</span>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator centered mt20 hideme')) !!}
        <div class="flex-container mt20">
            <div class="inline-block">
                {!! HTML::image('img/seo-icons/9.svgz', 'seo icon 9', array('class' => 'centered-icon small-icon')) !!}
                <div class="paragraph">
                    <span class="content-text">{!! trans('seo.paragraph-content-9') !!}</span>
                </div>
            </div>

            <div class="inline-block">
                {!! HTML::image('img/seo-icons/10.svgz', 'seo icon 10', array('class' => 'centered-icon medium-icon')) !!}
                <div class="paragraph">
                    <span class="content-text">{!! trans('seo.paragraph-content-10') !!}</span>
                </div>
            </div>

            <div class="inline-block">
                {!! HTML::image('img/seo-icons/11.svgz', 'seo icon 11', array('class' => 'centered-icon small-icon')) !!}
                <div class="paragraph">
                    <span class="content-text">{!! trans('seo.paragraph-content-11') !!}</span>
                </div>
            </div>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator centered mt20 hideme mob-visible')) !!}
        <div class="paragraph mt20 text-center">
            <span class="content-text fs14">{!! trans('seo.paragraph-content-12') !!}</span>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator centered mt20 hideme mob-visible')) !!}
        <div class="paragraph mt20 text-center">
            <span class="content-text fs14">{!! trans('seo.paragraph-content-13') !!}</span>
        </div>
        <div class="centered width70">
            <a href="{{ url(trans('routes.contacts')) }}"><div class="centered width50"></div></a>
        </div>
    </div>
    @include('footer')
@stop
@extends('layout')
@section('title', trans('meta.services.title'))
@section('description', trans('meta.services.description'))
@section('header')
    @include('header')
@stop
@section('body_class', 'paslaugos select-color4')
@section('content')
    @include('menu')
    <div class="main-paslaugos">
        <div class="paslaugos-header">
            <h1 class="bold">{!! trans('services.header-text-1') !!}</h1>
            <span class="fs22">{!! trans('services.under-header-text-1') !!}</span>
        </div>

        <div class="sections">
            {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator only1024')) !!}
            <section class="seo-sec">
                <div class="paslaugos-button opacity1">
                    {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator first-seperator')) !!}
                    {!! HTML::image('img/seo-icon.svgz', 'separator line', array('class' => 'paslaugos-icon section-open')) !!}
                    <h2 class="blue bold section-open">{!! trans('services.seo') !!}</h2>
                    {!! HTML::image('img/arrow-down-blue.svgz', 'arrow down', array('class' => 'button-down section-open')) !!}
                    {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator mt-18')) !!}
                </div>

                <div class="hidden">
                    {!! HTML::image('img/hidden-icon-seo.svgz', 'secret image', array('class' => 'hidden-icon')) !!}
                    <p class="hidden-text">{!! trans('services.hidden-text-1') !!}</p>
                </div>

                <div class="button-content">
                    <span class="first-par mt20">{!! trans('services.first-text-1') !!}</span>
                    <span class="second-par mt20">{!! trans('services.second-text-1') !!}</span>
                    <div class="daugiau-button">
                        <span class="blue"><a class="button-link blue" href="{{ url(trans('routes.seo')) }}">{!! trans('services.more') !!}</a></span>
                    </div>
                </div>
            </section>

            <section class="prog-sec">
                <div class="paslaugos-button opacity1">
                    {!! HTML::image('img/programing-icon.svgz', 'development', array('class' => 'paslaugos-icon section-open')) !!}
                    <h2 class="green section-open">{!! trans('services.programming') !!}</h2>
                    {!! HTML::image('img/arrow-green.svgz', 'arrow down', array('class' => 'button-down section-open')) !!}
                    {!! HTML::image('img/line.png', 'development', array('class' => 'seperator mt-18')) !!}
                </div>

                <div class="hidden">
                    {!! HTML::image('img/hidden-icon-programavimas.svgz', 'secret image', array('class' => 'hidden-icon')) !!}
                    <p class="hidden-text">{!! trans('services.hidden-text-2') !!}</p>
                </div>

                <div class="button-content">
                    <span class="first-par mt20">{!! trans('services.first-text-2') !!}</span>
                    <span class="second-par mt20">{!! trans('services.second-text-2') !!}</span>
                    <div class="daugiau-button">
                        <span class="green"><a class="button-link green" href="{{ url(trans('routes.programming')) }}">{!! trans('services.more') !!}</a></span>
                    </div>
                </div>
            </section>

            <section class="diz-sec">
                <div class="paslaugos-button opacity1">
                    {!! HTML::image('img/design-icon.svgz', 'design', array('class' => 'paslaugos-icon section-open')) !!}
                    <h2 class="orange section-open">{!! trans('services.design') !!}</h2>
                    {!! HTML::image('img/arrow-yellow.svgz', 'arrow down', array('class' => 'button-down section-open')) !!}
                    {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator mt-18')) !!}
                </div>

                <div class="hidden">
                    {!! HTML::image('img/hidden-icon-dizainas.svgz', 'secret image', array('class' => 'hidden-icon')) !!}
                    <p class="hidden-text">{!! trans('services.hidden-text-3') !!}</p>
                </div>

                <div class="button-content">
                    <span class="first-par mt20">{!! trans('services.first-text-3') !!}</span>
                    <span class="second-par mt20">{!! trans('services.second-text-3') !!}</span>
                    <div class="daugiau-button">
                        <span class="orange"><a class="button-link orange" href="{{ url(trans('routes.design')) }}">{!! trans('services.more') !!}</a></span>
                    </div>
                </div>
            </section>

        </div>

        <div class="kokybe-wrap">
            {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator kokybe-seperator')) !!}
            {!! HTML::image('img/guarantee-icon.svgz', 'ribbon', array('class' => 'ribbon')) !!}
            <h2>{!! trans('services.warranty') !!}</h2>
            <div class="kokybe-span">{!! trans('services.warranty-text-1') !!}</div>
            <div class="kokybe-span">{!! trans('services.warranty-text-2') !!}</div>
        </div>
    </div>
    @include('footer')
@stop
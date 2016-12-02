@extends('layout')
@section('title', trans('meta.design.title'))
@section('description', trans('meta.design.description'))
@section('header')
    @include('header')
@stop
@section('body_class', 'seo select-color3')
@section('content')
    @include('menu')
    <div class="main-design">
        <div class="content-header">
            <h1>{!! trans('design.header-text-1') !!}</h1>
            <span class="fs22">{!! trans('design.under-header-text-1') !!}</span>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator mt20')) !!}
        <div class="content-container second-margin-dev mt20">
            <div class="paragraph maxwidth780 text-center mob-not-center">
                <span class="content-text">{!! trans('design.paragraph-text-1') !!}</span>
            </div>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator mt20')) !!}
        <div class="flex-container mt20 design-containers">
            <div class="inline-block">
                {!! HTML::image('img/design-icons/1design-font.svgz', 'fonts', array('class' => 'centered-icon largex2-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">{!! trans('design.paragraph-header-text-1') !!}</h2>
                    <span class="content-text">{!! trans('design.paragraph-content-text-1') !!}</span>
                    <p class="content-text">{!! trans('design.paragraph-excerpt-text-1') !!}</p>
                </div>
            </div>

            <div class="inline-block">
                {!! HTML::image('img/design-icons/2design-wireframe.svgz', 'wireframe', array('class' => 'centered-icon largex2-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">{!! trans('design.paragraph-header-text-2') !!}</h2>
                    <span class="content-text">{!! trans('design.paragraph-content-text-2') !!}</span>
                    <p class="content-text">{!! trans('design.paragraph-excerpt-text-2') !!}</p>
                </div>
            </div>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator mt20')) !!}
        <div class="content-header">
            <h1>{!! trans('design.header-text-2') !!}</h1>
            <span class="fs22">{!! trans('design.under-header-text-2') !!}</span>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator mt20')) !!}
        <div class="paragraph maxwidth780 text-center mob-not-center">
            <p class="content-text">{!! trans('design.paragraph-text-2') !!}</p>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator mt20')) !!}
        <div class="flex-container mt20">
            <div class="inline-block">
                {!! HTML::image('img/design-icons/3design-firminis.svgz', 'authentic design', array('class' => 'centered-icon largex2-icon')) !!}
                <div class="paragraph">
                    <p class="content-text">{!! trans('design.paragraph-text-3') !!}</p>
                </div>
            </div>
            <div class="inline-block">
                {!! HTML::image('img/design-icons/2design-wireframe.svgz', 'wireframe', array('class' => 'centered-icon largex2-icon')) !!}
                <div class="paragraph">
                    <p class="content-text">{!! trans('design.paragraph-text-4') !!}</p>
                </div>
            </div>
        </div>

        <div class="paragraph text-center">
            <p class="content-text">{!! trans('design.paragraph-text-5') !!}</p>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator mt20')) !!}
        <div class="content-header">
            <h1>{!! trans('design.header-text-3') !!}</h1>
            <span class="fs22">{!! trans('design.under-header-text-3') !!}</span>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator mt20')) !!}
        <div class="paragraph maxwidth780 text-center mob-not-center">
            <p class="content-text">{!! trans('design.paragraph-text-6') !!}</p>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator mt20')) !!}
        <div class="flex-container spacearound mt20">
            <div class="inline-block maxwidth350 on1366-388">
                {!! HTML::image('img/design-icons/1design-font.svgz', 'fonts', array('class' => 'centered-icon largex2-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">{!! trans('design.paragraph-header-text-3') !!}</h2>
                    <span class="content-text">{!! trans('design.paragraph-content-text-3') !!}</span>
                </div>
            </div>
        </div>

        <div class="flex-container mt-85">
            <div class="inline-block maxwidth350 on1366-388">
                {!! HTML::image('img/design-icons/6design-originalumas.svgz', 'unique design', array('class' => 'centered-icon largex2-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">{!! trans('design.paragraph-header-text-4') !!}</h2>
                    <span class="content-text">{!! trans('design.paragraph-content-text-4') !!}</span>
                </div>
            </div>

            <div class="inline-block maxwidth350 on1366-388">
                {!! HTML::image('img/design-icons/7design-matomumas.svgz', 'visible desgin', array('class' => 'centered-icon largex2-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">{!! trans('design.paragraph-header-text-5') !!}</h2>
                    <span class="content-text">{!! trans('design.paragraph-content-text-5') !!}</span>
                </div>
            </div>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator mt20')) !!}
        <div class="content-header mt20">
            <span class="fs22 inline-block bold">{!! trans('design.paragraph-text-7') !!}</span>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator mt20')) !!}
        <div class="paragraph maxwidth780 text-center mob-not-center">
            <p class="content-text">{!! trans('design.paragraph-text-8') !!}</p>
        </div>
        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator mt20 mob-visible mb13')) !!}
        <div class="paragraph text-center">
            <span class="content-text">{!! trans('design.paragraph-text-9') !!}</span>
        </div>
        <div class="centered width70">
            <a href="{{ url(trans('routes.contacts')) }}"><div class="centered width50"></div></a>
        </div>
    </div>
    @include('footer')
@stop